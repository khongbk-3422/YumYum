<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;
use App\Models\Rest_Picture;
use App\Models\Rate;

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
            // $rest_pic = $pic_data->rest_pic;
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
