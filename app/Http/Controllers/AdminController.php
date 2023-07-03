<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Customer;
use App\Models\Restaurant;
use App\Models\Rate;
use App\Models\History;
use App\Models\Rest_Picture;
use App\Models\Spinwheel;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //Home Page
    function homePage()
    {
        $rest_count = Restaurant::count();
        $cust_count = Customer::count();
        $rating_count = Rate::count();
        $count_list = [
            'rest_count' => $rest_count,
            'cust_count' => $cust_count,
            'rating_count' => $rating_count
        ];

        //Most Popular Restaurant
        $rest_data = Rate::select('rest_id', DB::raw('AVG(rating) as avg_rating'), DB::raw('COUNT(*) as rating_count'))
                    ->groupBy('rest_id')
                    ->orderByDesc('avg_rating')
                    ->orderByDesc('rating_count')
                    ->take(7)
                    ->get();

        
        foreach ($rest_data as $data) {
            $rest = Restaurant::where('rest_id', $data['rest_id'])->first();
            $data->rest_name = $rest->rest_name;
        }

        // Iterate over the highest average rating restaurants
        foreach ($rest_data as $data)  {
            $history_count = History::where('rest_id', $data->rest_id)->count();
            $data->browse_count = $history_count;
        }

        //New Customer
        $new_cust_list = Customer::orderByDesc('cust_id')->take(5)->get();
        foreach ($new_cust_list as $cust) {
            $pic = base64_encode($cust->cust_pic);
            $cust->cust_pic = $pic;
        }

        // return $new_cust_list;
        return view('adminHomePage',['count_list'=>$count_list,'rest_data'=>$rest_data,'new_cust_list'=>$new_cust_list]);
    }

    //Edit Customer Page
    function getAllCust()
    {
        $cust_datas = Customer::all();
        foreach ($cust_datas as $data) {
            $data->cust_pic = base64_encode($data->cust_pic);
        }
        return view('adminEditCustomer',['cust_datas'=>$cust_datas]);
    }

    function getAllwithCust($customerId)
    {
        $cust_datas = Customer::all();
        foreach ($cust_datas as $data) {
            $data->cust_pic = base64_encode($data->cust_pic);
        }

        $select_cust = Customer::where('cust_id',$customerId)->first();
        $select_cust->cust_pic = base64_encode($select_cust->cust_pic);
        return view('adminEditCustomer',['cust_datas'=>$cust_datas,'select_cust'=>$select_cust]);
    }

    public function filterCustomers(Request $request)
    {
        $searchTerm = $request->input('searchTerm');
        $customers = Customer::where('cust_name', 'like', '%' . $searchTerm . '%')
            ->orWhere('user_email', 'like', '%' . $searchTerm . '%')
            ->orWhere('cust_id', 'like', '%' . $searchTerm . '%')
            ->get();
        foreach ($customers as $customer) {
            $customer->cust_pic = base64_encode($customer->cust_pic);
        }

        return response()->json(['customers' => $customers]);
    }

    function deleteCust($cust_id)
    {
        $customer_data = Customer::find($cust_id);
        $email = $customer_data->user_email;

        if($customer_data){
            Rate::where('cust_id',$cust_id)->delete();
            History::where('cust_id',$cust_id)->delete();
            Spinwheel::where('cust_id',$cust_id)->delete();
            
            $customer_data->delete();
            User::where('user_email',$email)->delete();

            // return redirect('adminEditCustomer')->with('success', 'Customer deleted successfully');
            return response()->json(['success' => true]);
        }
        else {
            // return redirect('adminEditCustomer')->with('error', 'Customer not found');
            return response()->json(['success' => false, 'message' => 'Customer not found']);
        }
    }

    function editCust(Request $req)
    {
        $customer_data = Customer::find($req->cust_id);
        $user_data = User::where('user_email',$customer_data->user_email)->first();

        if($req->new_user_email != $customer_data->user_email) {

            $customer_datas = Customer::all();
            foreach ($customer_datas as $data) {
                if ($req->new_user_email == $data->user_email) {
                    Session::flash('email_used', true);
                    return redirect()->back();
                }
            }
            $user_t=new User;
            $user_t->user_email=$req->new_user_email;
            $user_t->user_password=$user_data->user_password;
            $user_t->position="1";
            $user_t->save();
        }

        $old_email = $customer_data->user_email;
        
        $customer_data->cust_contact=$req->new_cust_contact;
        $customer_data->cust_name=$req->new_cust_name;
        $customer_data->user_email = $req->new_user_email;
        
        if ($req->hasFile('new_cust_pic')) {
            $file = $req->file('new_cust_pic');
            $destinationPath = public_path('image/customer');
            $filename = $file->getClientOriginalName();
            $file->move($destinationPath, $filename);
            $customer_data->cust_pic = 'image/customer/' . $filename; // Save the file path
        }
        
        $customer_data->save();

        if($req->new_user_email != $old_email) {
            User::where('user_email',$old_email)->delete();
        }

        return redirect('adminEditCustomer/'.$req->cust_id);
    }

    function getAllRest()
    {
        $rest_datas = Restaurant::all();
        foreach ($rest_datas as $data) {
            $pic_data = Rest_Picture::where('rest_id',$data->rest_id)->first();
            $rest_pic = $pic_data ? base64_encode($pic_data->rest_pic) : null;
            $data->rest_pic = $rest_pic;
        }
        return view('adminViewRestaurant',['rest_datas'=>$rest_datas]);
    }

    function getRestDetails($rest_id)
    {
        //Get Restaurant
        $rest_datas = Restaurant::where('rest_id',$rest_id)->first();

        $pic_datas = Rest_Picture::where('rest_id', $rest_id)->get();
    
        foreach ($pic_datas as $pic) {
            $pic->rest_pic = base64_encode($pic->rest_pic);
        }

        //Get All Rating Datas
        $rating_datas = Rate::where('rest_id', $rest_id)->get();
        foreach ($rating_datas as $data){
            $user_data = Customer::where('cust_id',$data->cust_id)->first();
            $data->cust_name = $user_data->cust_name;
            $data->cust_pic = base64_encode($user_data->cust_pic);
        }

        return view('adminEditRestaurant',['rest_data' => $rest_datas,'pic_datas' => $pic_datas,'rating_datas' => $rating_datas]);
    }

    function editRestDetails(Request $req)
    {
        $rest_datas = Restaurant::find($req->rest_id);
        $rest_datas->rest_name = $req->new_rest_name;
        $rest_datas->rest_contact = $req->new_rest_contact;
        $rest_datas->rest_category = $req->new_rest_category;
        $rest_datas->rest_address = $req->new_rest_address;
        $rest_datas->price_min = $req->new_price_min;
        $rest_datas->price_max = $req->new_price_max;
        $rest_datas->save();

        return redirect('adminEditRestaurant/'.$req->rest_id);
    }

    function addRest(Request $req)
    {
        $validator = Validator::make($req->all(), [
            'rest_name' => 'required',
            'rest_contact' => 'required|numeric',
            'rest_category' => 'required',
            'rest_address' => 'required',
            'price_min' => 'required|numeric',
            'price_max' => 'required|numeric',
        ], [
            'rest_name.required' => 'The name field is required.',
            'rest_contact.required' => 'The contact field is required.',
            'rest_contact.numeric' => 'The contact field must contain only numeric values.',
            'rest_category.required' => 'The category field is required.',
            'rest_address.required' => 'The address field is required.',
            'price_min.required' => 'The minimum price field is required.',
            'price_min.numeric' => 'The minimum price field must contain only numeric values.',
            'price_max.required' => 'The maximum price field is required.',
            'price_max.numeric' => 'The maximum price field must contain only numeric values.',
        ]);
    
        if ($validator->fails()) {
            $errors = $validator->errors();
    
            // If the name is not there
            if ($errors->has('rest_name')) {
                Session::flash('rest_name_error', $errors->first('rest_name'));
            }
    
            // If the contact format is wrong
            if ($errors->has('rest_contact')) {
                Session::flash('rest_contact_error', $errors->first('rest_contact'));
            }
    
            if ($errors->has('rest_category')) {
                Session::flash('rest_category_error', $errors->first('rest_category'));
            }

            if ($errors->has('rest_address')) {
                Session::flash('rest_address_error', $errors->first('rest_address'));
            }

            if ($errors->has('price_min')) {
                Session::flash('price_min_error', $errors->first('price_min'));
            }

            if ($errors->has('price_max')) {
                Session::flash('price_max_error', $errors->first('price_max'));
            }
            
            return redirect()->back();
        }
    
        $data= $req->input();
        
        $last_id = Restaurant::orderBy('rest_id', 'desc')->first();

        if ($last_id) {
            $numeric_id = (int) substr($last_id->rest_id, 1);
            $next_numeric_id = $numeric_id + 1;
            $new_id = 'R' . str_pad($next_numeric_id, 3, '0', STR_PAD_LEFT);
        } else {
            $new_id = 'R001';
        }
        
        $restaurant_t=new Restaurant;
        $restaurant_t->rest_id = $new_id;
        $restaurant_t->rest_name = $req->rest_name;
        $restaurant_t->rest_contact = $req->rest_contact;
        $restaurant_t->rest_category = $req->rest_category;
        $restaurant_t->rest_address = $req->rest_address;
        $restaurant_t->price_min = $req->price_min;
        $restaurant_t->price_max = $req->price_max;
        $restaurant_t->save();

        Session::flash('successful_add', true);
        return redirect('adminEditRestaurant/'.$new_id);
            
    }

    function deleteRest($rest_id)
    {
        Rest_Picture::where('rest_id',$rest_id)->delete();
        Rate::where('rest_id',$rest_id)->delete();
        History::where('rest_id',$rest_id)->delete();
        Spinwheel::where('rest_id',$rest_id)->delete();

        $rest_data=Restaurant::find($rest_id);
        $rest_data->delete();

        return redirect('adminViewRestaurant');
    }

    function deleteRestPic($pic_id, $rest_id)
    {
        Rest_Picture::where('pic_id', $pic_id)->delete();
        
        return redirect('adminEditRestaurant/'.$rest_id);
    }

    function deleteRate($cust_id, $rest_id)
    {
        Rate::where('cust_id', $cust_id)->where('rest_id',$rest_id)->delete();
        
        return redirect('adminEditRestaurant/'.$rest_id);
    }
}
