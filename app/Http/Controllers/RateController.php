<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use App\Models\Restaurant;
use App\Models\Rate;
use Carbon\Carbon;
use Illuminate\Http\Request;

class RateController extends Controller
{
    //New Review
    function new_rate(Request $req)
    {
        $data = $req->input();
        $old_rate = Rate::where('cust_id',session('user_id'))->where('rest_id',$req['rate_rest_id'])->first();

        if ($old_rate) {
            Session::flash('old_rate_present', true);
            return redirect()->back();
        } else {
            if ($req['custfirstreview']) {
                $rating_t = new Rate;
                $rating_t->cust_id = session('user_id');
                $rating_t->rest_id = $req['rate_rest_id'];
                $rating_t->review = $req['custfirstreview'];
                $rating_t->rating = $req['ratingValue'];
                $rating_t->date = Carbon::now('Asia/Kuala_Lumpur');
                $rating_t->save(); 
            } else {
                $rating_t = new Rate;
                $rating_t->cust_id = session('user_id');
                $rating_t->rest_id = $req['rate_rest_id'];
                $rating_t->review = " ";
                $rating_t->rating = $req['ratingValue'];
                $rating_t->date = Carbon::now('Asia/Kuala_Lumpur');
                $rating_t->save(); 
            }
            
            return redirect('/restaurantDetailsPage/'.$req['rate_rest_id']);
        }
    }
}
