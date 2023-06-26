<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;
use App\Models\Spinwheel;

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
}
