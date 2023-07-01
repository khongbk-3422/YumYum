<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Customer;
use App\Models\Restaurant;
use App\Models\Rate;
use App\Models\History;
use App\Models\Rest_Picture;

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
        // Fetch the restaurant names based on rest_id
        // $rest_ids = $rest_data->pluck('rest_id');
        // $restaurants = Restaurant::whereIn('rest_id', $rest_ids)->get();

        // Associate the restaurant name with the corresponding rest_id in the $rest_data collection
        // $rest_data = $rest_data->map(function ($item) use ($restaurants) {
        //     $restaurant = $restaurants->firstWhere('rest_id', $item->rest_id);
        //     $item->restaurant_name = $restaurant ? $restaurant->name : 'Unknown Restaurant';
        //     return $item;
        // });
    
        // Iterate over the highest average rating restaurants
        foreach ($rest_data as $data)  {
            $history_count = History::where('rest_id', $data->rest_id)->count();
            $data->browse_count = $history_count;
        }

        //New Customer
        $new_cust_list = Customer::orderByDesc('cust_id')->take(4)->get();
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

    public function destroy($customerId)
    {
        // Find the customer by ID
        $customer = Customer::where('cust_id',$customerId)->first();
        if ($customer) {
            User::where('user_email',$customer->user_email)->delete();
            Customer::where('cust_id',$customerId)->delete();
        } else {
            return "not find";
        }

        return response()->json(['message' => 'Customer deleted successfully']);
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

    function getAllwithRest($customerId)
    {
        $rest_datas = Restaurant::all();
        foreach ($rest_datas as $data) {
            $data->rest_pic = base64_encode($data->rest_pic);
        }

        $select_rest = Customer::where('cust_id',$customerId)->first();
        $select_rest->cust_pic = base64_encode($select_cust->cust_pic);
        return view('adminEditCustomer',['cust_datas'=>$cust_datas,'select_cust'=>$select_cust]);
    }
}
