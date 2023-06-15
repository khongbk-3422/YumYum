<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Models\Customer;

class UserController extends Controller
{
    //Login
    function userLogin(Request $req)
    {
        $data= $req->input();
        $user=User::find($data['email']);

        if ($user) {

            if ($user->user_password == $data['password']){
                Session::flash('success_login', true);
                
                if ($user->position == "1") {
                    $user_data=Customer::where('user_email', $data['email'])->first();
                    session()->put('user_id', $user_data->cust_id);
                    session()->put('user_name', $user_data->cust_name);
                    session()->put('user_pic', $user_data->cust_pic);
                    return redirect('custHomePage');
                } else {
                    $user_data=Admin::where('user_email', $data['email'])->first();
                    session()->put('user_id', $user_data->admin_id);
                    session()->put('user_name', $user_data->admin_name);
                    session()->put('user_pic', $user_data->admin_pic);
                    return redirect('adminHomePage');
                }

            } else {
                Session::flash('wrong_password', true);
                return redirect()->back();
            }

        } else{
            Session::flash('email_not_found', true);
            return redirect()->back();
        }
        
    }
}
