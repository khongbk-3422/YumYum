<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;
use App\Models\Rest_Picture;
use App\Models\Rate;
use App\Models\Customer;
use App\Models\History;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

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
            $avg_rate_formatted = number_format($avg_rate, 1); // Format avg_rate to 1 decimal place
            
            $data->count = $count;
            $data->avg_rate = $avg_rate_formatted;
        }

        $best_rest_data = Rate::select('rest_id', DB::raw('ROUND(AVG(rating), 1) as avg_rating'), DB::raw('COUNT(*) as rating_count'))
                    ->groupBy('rest_id')
                    ->orderByDesc('avg_rating')
                    ->orderByDesc('rating_count')
                    ->take(8)
                    ->get();
        
        foreach ($best_rest_data as $data) {
            $rest = Restaurant::where('rest_id', $data['rest_id'])->first();
            $data->rest_name = $rest->rest_name;
            $data->rest_category = $rest->rest_category;
            
            $rest_pic_data = Rest_Picture::where('rest_id',$data->rest_id)->first();
            $rest_pic = $rest_pic_data ? base64_encode($rest_pic_data->rest_pic) : null;
            $data->rest_pic = $rest_pic;
        }

        return view('viewRestaurantPage',['datas'=>$datas,'best_rest_data'=>$best_rest_data]);
    }

    public function price_filter(Request $req)
    {
        $datas = Restaurant::where('price_min', '>=', $req->min_price)
                ->where('price_max', '<=', $req->max_price)
                ->get();
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
            $avg_rate_formatted = number_format($avg_rate, 1); // Format avg_rate to 1 decimal place

            $data->count = $count;
            $data->avg_rate = $avg_rate_formatted;
        }

        $best_rest_data = Rate::select('rest_id', DB::raw('ROUND(AVG(rating), 1) as avg_rating'), DB::raw('COUNT(*) as rating_count'))
                    ->groupBy('rest_id')
                    ->orderByDesc('avg_rating')
                    ->orderByDesc('rating_count')
                    ->take(8)
                    ->get();
        
        foreach ($best_rest_data as $data) {
            $rest = Restaurant::where('rest_id', $data['rest_id'])->first();
            $data->rest_name = $rest->rest_name;
            $data->rest_category = $rest->rest_category;
            
            $rest_pic_data = Rest_Picture::where('rest_id',$data->rest_id)->first();
            $rest_pic = $rest_pic_data ? base64_encode($rest_pic_data->rest_pic) : null;
            $data->rest_pic = $rest_pic;
        }

        return view('viewRestaurantPage',['datas'=>$datas,'best_rest_data'=>$best_rest_data]);
    }

    function restDetails($rest_id) 
    {

        //Add to History
        $history_data = History::where('cust_id', session('user_id'))
               ->where('rest_id', $rest_id)
               ->first();
        if ($history_data) {
            History::where('cust_id', session('user_id'))
                    ->where('rest_id', $rest_id)
                    ->delete();
                    
            $history_t = new History;
            $history_t->cust_id = session('user_id');
            $history_t->rest_id = $rest_id;
            $history_t->datetime = Carbon::now('Asia/Kuala_Lumpur');;
            $history_t->save();
        } else {
            $history_t = new History;
            $history_t->cust_id = session('user_id');
            $history_t->rest_id = $rest_id;
            $history_t->datetime = Carbon::now('Asia/Kuala_Lumpur');;
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
            $user_data = Customer::where('cust_id',$data->cust_id)->first();
            $data->cust_name = $user_data->cust_name;
            $data->cust_pic = base64_encode($user_data->cust_pic);
        }

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
