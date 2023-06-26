<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;
use App\Models\Rest_Picture;
use App\Models\Rate;
use App\Models\History;
use Illuminate\Support\Facades\Session;

class RestController extends Controller
{
    //Get All Data for Restaurant Page
    function getAllRest()
    {
        $datas = Restaurant::all();
        foreach ($datas as $data) {
            // Get First Pic
            $pic_data = Rest_Picture::where('rest_id',$data->rest_id)->first();
            $rest_pic = $pic_data ? base64_encode($pic_data->rest_pic) : null;
            $data->data_pic = $rest_pic;

            //Get Rating
            $rate_datas = Rate::where('rest_id',$data->rest_id)->get();
            $total_rate = 0;
            $count = 0;
            foreach ($rate_datas as $rate_data) {
                $total_rate += $rate_data->rating;
                $count += 1;
            }
            

            $avg_rate = $count > 0 ? $total_rate / $count : 0;
            $data->count = $count;
            $data->avg_rate = $avg_rate;
        }
        return view('viewRestaurantPage',['datas'=>$datas]);
    }

    public function filter(Request $request)
    {
        $search = $request->input('search');
        $locations = $request->input('location', []);

        // Query for filtering restaurants
        $query = Restaurant::query();

        // Apply search filter
        if (!empty($search)) {
            $query->where('name', 'like', '%' . $search . '%');
        }

        // Apply location filter
        if (!empty($locations)) {
            $query->whereIn('location', $locations);
        }

        // Retrieve the filtered data
        $filteredData = $query->get();

        // Return the filtered data to the view
        return view('filteredRestaurants', ['filteredData' => $filteredData]);
    }

    function restDetails($rest_id) {

        //Add to History
        $history_data = History::where('cust_id', session('user_id'))
               ->where('rest_id', $rest_id)
               ->first();
        if ($history_data) {
            $history_data->datetime = now();
            $history->updated_at = null; // Set updated_at to null
            $history_data->save();
        } else {
            $history_t = new History;
            $history_t->cust_id = session('user_id');
            $history_t->rest_id = $rest_id;
            $history_t->datetime = now();
            $history_t->save();
        }

        $rest_data = Restaurant::where('rest_id', $rest_id)->get();
    
        // Get Picture
        $pic_data = Rest_Picture::where('rest_id', $rest_id)->get();
        $rest_pics = [];
    
        foreach ($pic_data as $pic) {
            $rest_pics[] = base64_encode($pic->rest_pic);
        }
    
        $rest_data[0]->data_pic = $rest_pics;
    
        // Get Rating
        $rate_datas = Rate::where('rest_id', $rest_id)->get();
        $total_rate = 0;
        $count = 0;
    
        foreach ($rate_datas as $rate_data) {
            $total_rate += $rate_data->rating;
            $count += 1;
        }
    
        $avg_rate = $count > 0 ? $total_rate / $count : 0;
        $rest_data[0]->count = $count;
        $rest_data[0]->avg_rate = $avg_rate;
    
        $rate_data = Rate::where('cust_id', session('user_id'))->where('rest_id', $rest_id)->first();

        if ($rate_data) {
            $rest_data[0]->rating = $rate_data->rating;
            $rest_data[0]->review = $rate_data->review;
            $rest_data[0]->rate_date = $rate_data->date;
        }


        // Rating according Rest
        $rating_datas = Rate::where('rest_id', $rest_id)->where('cust_id', '!=', session('user_id'))->get();
        foreach ($rating_datas as $data){
            $user_data = Customer::where('cust_id',$data->cust_id)->get();
            $data->cust_name = $user_data->cust_name;
            $data->cust_pic = base64_encode($user_data->cust_pic);
        }

        // return $rest_data[0];
        return view('restaurantDetailsPage', ['rest_data' => $rest_data[0]], ['rating_datas' => $rating_datas]);
    }

    function show()
    {
        $data = Restaurant::all();
        return view('list',['rests'=>$data]);
    }

    function addPic(Request $req)
    {
        $rest_picture_t = new Rest_Picture;
        $rest_picture_t->rest_id = $req->upt_rest_id;
        $path = $req->restPic;
        $imageContent = file_get_contents($path);
        $rest_picture_t->rest_pic = $imageContent;
        $rest_picture_t->save();
        return redirect('/list');
    }
}
