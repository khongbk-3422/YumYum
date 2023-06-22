<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Models\Customer;
use App\Models\Admin;

class UserController extends Controller
{
    //Login
    function userLogin(Request $req)
    {
        $data= $req->input();
        $user = User::whereRaw("BINARY user_email = ?", [$data['email']])->first();

        if ($user) {
            if ($user->user_password == $data['password']){
                Session::flash('success_login', true);
                
                if ($user->position == "1") {
                    $user_data=Customer::whereRaw("BINARY user_email = ?", [$data['email']])->first();
                    session()->put('user_id', $user_data->cust_id);
                    session()->put('user_name', $user_data->cust_name);
                    session()->put('user_pic', $user_data->cust_pic);
                    return redirect('custHomePage');
                } else {
                    $user_data=Admin::whereRaw("BINARY user_email = ?", [$data['email']])->first();
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

    //Register
    function userRegister(Request $req) {
        $data= $req->input();
        $user=User::whereRaw("BINARY user_email = ?", [$data['email']])->first();

        if ($data['password'] == $data['conf_password']){
            if ($user) {
                Session::flash('email_used', true);
                return redirect()->back();

            } else {
                $user_t=new User;
                $user_t->user_email=$req->email;
                $user_t->user_password=$req->password;
                $user_t->position="1";
                $user_t->save();

                $last_id = Customer::orderBy('cust_id', 'desc')->first();

                if ($last_id) {
                    $numeric_id = (int) substr($last_id->cust_id, 1);
                    $next_numeric_id = $numeric_id + 1;
                    $new_id = 'C' . str_pad($next_numeric_id, 6, '0', STR_PAD_LEFT);
                } else {
                    $new_id = 'C000001'; // Set default if no records exist
                }
                

                $customer_t=new Customer();
                $customer_t->cust_id=$new_id;
                $customer_t->cust_name=$req->name;
                $customer_t->cust_contact=$req->contact;
                $imagePath = 'C:\xampp\htdocs\yumyum\public\image\profile.png';
                $imageContent = file_get_contents($imagePath);
                $customer_t->cust_pic = $imageContent;
                $customer_t->user_email=$req->email;
                $customer_t->save();
                return redirect('/loginPage');
                
            }
        } else {
            Session::flash('conf_pass_incorrect', true);
                return redirect()->back();
        }
        
    }
}
