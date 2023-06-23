<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;
use App\Models\Rest_Picture;

class RestController extends Controller
{
    //Get All Data for Restaurant Page
    function getRestData()
    {
        // $rest = a
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
