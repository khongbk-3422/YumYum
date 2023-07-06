<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;
use App\Models\Spinwheel;
use App\Models\Restaurant;
use Illuminate\Support\Facades\DB;

class WheelController extends Controller
{
    //Add to Wheel Function
    function addWheel($rest_id)
    {
        $spinwheel_datas = Spinwheel::where('cust_id', session('user_id'))->get();

        if ($spinwheel_datas) {
            $correct = $spinwheel_datas->contains('rest_id', $rest_id);

            if ($correct == 1) {
                Session::flash('rest_already_added', true);
                return redirect()->back();
                
            } else {
                $spinwheel_t = new Spinwheel;
                $spinwheel_t->rest_id = $rest_id;
                $spinwheel_t->cust_id = session('user_id');
                $spinwheel_t->save();

                Session::flash('rest_added', true);
                return redirect()->back();
            }
        }
    }
    
    public function wheelItems()
    {
        $spinwheel_datas = Spinwheel::where('cust_id', session('user_id'))->get();
        $rest_datas = [];
        foreach ($spinwheel_datas as $data) {
            $rest_data = Restaurant::where('rest_id',$data->rest_id)->first();
            $rest_datas[] = $rest_data->rest_name;
            $data->rest_name = $rest_data->rest_name;
        }

        return view('wheel',['restaurants'=>$rest_datas, 'spinwheel_datas'=>$spinwheel_datas]);
    }

    function wheelDelete($rest_id)
    {
        $spinwheel_datas = Spinwheel::where('cust_id', session('user_id'))
        ->where('rest_id',$rest_id)->delete();
        
        return redirect('/spin');
    }

    function restDetails($rest_name)
    {
        $rest_data = Restaurant::where('rest_name',$rest_name)->first();
        
        return redirect('restaurantDetailsPage/'.$rest_data->rest_id);
    }
}
