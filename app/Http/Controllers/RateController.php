<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use App\Models\Restaurant;
use App\Models\Rate;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;


class RateController extends Controller
{
    //New Review
    function new_rate(Request $req)
    {
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

    //Rating Action
    function rate_action(Request $req)
    {
        switch ($req->input('action')) {
            case'save':
                // return $req;
                $ratingId = $req->input('rate_rest_id');

                $rating = Rate::where('rest_id',$ratingId)->where('cust_id',session('user_id'))->delete();
                if ($rating) {

                    if ($req['custfirstreview']) {
                        $rating_t = new Rate;
                        $rating_t->cust_id = session('user_id');
                        $rating_t->rest_id = $ratingId;
                        $rating_t->review = $req['custfirstreview'];
                        $rating_t->rating = $req['ratingValue'];
                        $rating_t->date = Carbon::now('Asia/Kuala_Lumpur');
                        $rating_t->save();
                    } elseif ($req['hidden_custfirstreview']) {
                        $rating_t = new Rate;
                        $rating_t->cust_id = session('user_id');
                        $rating_t->rest_id = $ratingId;
                        $rating_t->review = $req['hidden_custfirstreview'];
                        $rating_t->rating = $req['ratingValue'];
                        $rating_t->date = Carbon::now('Asia/Kuala_Lumpur');
                        $rating_t->save();
                    } else {
                        $rating_t = new Rate;
                        $rating_t->cust_id = session('user_id');
                        $rating_t->rest_id = $ratingId;
                        $rating_t->review = " ";
                        $rating_t->rating = $req['ratingValue'];
                        $rating_t->date = Carbon::now('Asia/Kuala_Lumpur');
                        $rating_t->save();
                    }

                    return redirect('restaurantDetailsPage/'.$ratingId);
                } else {
                    Session::flash('update_failed', true);
                    return redirect('restaurantDetailsPage/'.$ratingId);
                }
                break;


            case 'delete':
                
                $ratingId = $req->input('rate_rest_id');
        
                $rating = Rate::where('rest_id',$ratingId)->where('cust_id',session('user_id'))->delete();
                if ($rating) {
                    return redirect('restaurantDetailsPage/'.$ratingId);
                } else {
                    Session::flash('delete_failed', true);
                    return redirect('restaurantDetailsPage/'.$ratingId);
                }
                break;
        }

    }
}
