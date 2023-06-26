<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Customer;
use App\Models\Restaurant;
use App\Models\Rate;
use App\Models\History;

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
        $rest_data = Rate::select('rest_id', DB::raw('AVG(rating) as avg_rating'))
            ->groupBy('rest_id')
            ->orderByDesc('avg_rating')
            ->take(4)
            ->get();

        // Iterate over the highest average rating restaurants
        foreach ($rest_data as $data)  {
            $history_count = History::where('rest_id', $data->rest_id)->count();
            $data->browse_count = $history_count;
        }

        //New Customer
        $new_cust_list = Customer::orderByDesc('cust_id')->take(4)->get();
        foreach ($new_cust_list as $cust) {
            $pic = base64_encode($cust->cust_pic);
            $new_cust_list->cust_pic = $pic;
        }

        // return $new_cust_list;
        return view('adminHomePage',['count_list'=>$count_list,'rest_data'=>$rest_data,'new_cust_list'=>$new_cust_list]);
    }
}
