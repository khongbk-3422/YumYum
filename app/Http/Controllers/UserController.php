<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
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
            $pwd=md5($data['password']);
            if ($user->user_password == $pwd){
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
        $validator = Validator::make($req->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'contact' => 'required|numeric',
            'password' => 'required|min:8|max:20',
            'conf_password' => 'required|same:password',
        ], [
            'name.required' => 'The name field is required.',
            'email.required' => 'The email field is required.',
            'email.email' => 'The email must be a valid email address format.',
            'contact.required' => 'The contact field is required.',
            'contact.numeric' => 'The contact field must contain only numeric values.',
            'password.required' => 'The password field is required.',
            'password.min' => 'The password must be at least 8 characters.',
            'password.max' => 'The password may not be greater than 20 characters.',
            'conf_password.required' => 'The confirm password field is required.',
            'conf_password.same' => 'The confirm password must match the password.',
        ]);
    
        if ($validator->fails()) {
            $errors = $validator->errors();
    
            // If the name is not there
            if ($errors->has('name')) {
                Session::flash('name_error', $errors->first('name'));
            }

            // If the email format is wrong
            if ($errors->has('email')) {
                Session::flash('email_error', $errors->first('email'));
            }
    
            // If the contact format is wrong
            if ($errors->has('contact')) {
                Session::flash('contact_error', $errors->first('contact'));
            }
    
            // If the password length is less than 8 characters
            if ($errors->has('password')) {
                Session::flash('password_error', $errors->first('password'));
            }

            // If the password length is less than 8 characters
            if ($errors->has('conf_password')) {
                Session::flash('conf_password_error', $errors->first('conf_password'));
            }
            
            Session::flash('register_failed', true);
            return redirect()->back();
        }
    
        $data= $req->input();
        $user=User::whereRaw("BINARY user_email = ?", [$data['email']])->first();

        
        if ($user) {
            Session::flash('email_used', true);
            Session::flash('register_failed', true);
            return redirect()->back();

        } else {

            $pwd=md5($req->password);
            
            $user_t=new User;
            $user_t->user_email=$req->email;
            $user_t->user_password=$pwd;
            $user_t->position="1";
            $user_t->save();

            $last_id = Customer::orderBy('cust_id', 'desc')->first();

            if ($last_id) {
                $numeric_id = (int) substr($last_id->cust_id, 1);
                $next_numeric_id = $numeric_id + 1;
                $new_id = 'C' . str_pad($next_numeric_id, 6, '0', STR_PAD_LEFT);
            } else {
                $new_id = 'C000001';
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
            Session::flash('successful_register', true);
            return redirect('/loginPage');
            
        }
    }

    function customerProfile()
    {
        $customer_data = Customer::where('admin_id', session('user_id'))->first();

        if ($customer_data) {

            $customer_pic = base64_encode($customer_data->cust_pic);
            $customer_data->cust_pic = $customer_pic;

            return view('custProfilePage', ['customer_data' => $customer_data]);
        }

    }

    function adminProfile()
    {
        $admin_data = Admin::where('admin_id', session('user_id'))->first();

        if ($admin_data) {

            $adimn_pic = base64_encode($admin_data->admin_pic);
            $admin_data->admin_pic = $adimn_pic;

            return view('adminProfilePage', ['admin_data' => $admin_data]);
        }

    }

    function editProfile(Request $req)
    {

        $customer_data = Customer::find(session('user_id'));
        $admin_data = Admin::find(session('user_id'));

        if ($customer_data){

            if ($req->new_password) {

                if($req->new_email != $customer_data->user_email) {
                    $customer_datas = Customer::all();
                    foreach ($customer_datas as $data) {
                        if ($req->new_email == $data->user_email) {
                            Session::flash('email_used', true);
                            return redirect()->back();
                        }
                    }
                    
                    $user_t=new User;
                    $user_t->user_email=$req->new_email;
                    $user_t->user_password=md5($req->new_password);
                    $user_t->position="1";
                    $user_t->save();
                } else {
                    $user_data=User::find($customer_data->user_email);
                    $user_data->user_password=md5($req->new_password);
                    $user_data->save();
                }

                $old_email = $customer_data->user_email;
                
                $customer_data->cust_contact=$req->new_contact;
                $customer_data->cust_name=$req->new_name;
                $customer_data->user_email = $req->new_email;
                
                if ($req->hasFile('new_pic')) {
                    $file = $req->file('new_pic');
                    $customer_data->cust_pic = file_get_contents($file);
                }
                
                $customer_data->save();

                if ($req->new_email != $old_email){
                    User::where('user_email',$old_email)->delete();
                }
                    
                return redirect('custProfilePage');

            } else {

                $user_data = User::where('user_email',$customer_data->user_email)->first();

                if($req->new_email != $customer_data->user_email) {

                    $customer_datas = Customer::all();
                    foreach ($customer_datas as $data) {
                        if ($req->new_user_email == $data->user_email) {
                            Session::flash('email_used', true);
                            return redirect()->back();
                        }
                    }
                    $user_t=new User;
                    $user_t->user_email=$req->new_email;
                    $user_t->user_password=$user_data->user_password;
                    $user_t->position="1";
                    $user_t->save();
                }

                $old_email = $customer_data->user_email;
                
                $customer_data->cust_contact=$req->new_contact;
                $customer_data->cust_name=$req->new_name;
                $customer_data->user_email = $req->new_email;
                
                if ($req->hasFile('new_pic')) {
                    $file = $req->file('new_pic');
                    $destinationPath = public_path('image/customer');
                    $filename = $file->getClientOriginalName();
                    $file->move($destinationPath, $filename);
                    $customer_data->cust_pic = 'image/customer/' . $filename; // Save the file path
                }
                
                $customer_data->save();

                if($req->new_email != $old__email) {
                    User::where('user_email',$old_email)->delete();
                }
                
                return redirect('custProfilePage');
            }

        } else if ($admin_data){

            if ($req->new_password) {

                if($req->new_email != $admin_data->user_email) {
                    $admin_datas = Admin::all();
                    foreach ($admin_datas as $data) {
                        if ($req->new_user_email == $data->user_email) {
                            Session::flash('email_used', true);
                            return redirect()->back();
                        }
                    }
                    
                    $user_t=new User;
                    $user_t->user_email=$req->new_email;
                    $user_t->user_password=md5($req->new_password);
                    $user_t->position="1";
                    $user_t->save();
                } else {
                    $user_data=User::find($admin_data->user_email);
                    $user_data->user_password=md5($req->new_password);
                    $user_data->save();
                }

                $old_email = $admin_data->user_email;
                
                $admin_data->admin_contact=$req->new_contact;
                $admin_data->admin_name=$req->new_name;
                $admin_data->user_email = $req->new_email;
                
                if ($req->hasFile('new_pic')) {
                    $file = $req->file('new_pic');
                    $admin_data->cust_pic = file_get_contents($file);
                }
                
                $admin_data->save();

                if ($req->new_email != $old_email){
                    User::where('user_email',$old_email)->delete();
                }
                    
                return redirect('custProfilePage');

            } else {

                $user_data = User::where('user_email',$customer_data->user_email)->first();

                if($req->new_email != $old__email) {

                    $customer_datas = Customer::all();
                    foreach ($customer_datas as $data) {
                        if ($req->new_user_email == $data->user_email) {
                            Session::flash('email_used', true);
                            return redirect()->back();
                        }
                    }
                    $user_t=new User;
                    $user_t->user_email=$req->new_email;
                    $user_t->user_password=$user_data->user_password;
                    $user_t->position="1";
                    $user_t->save();
                }

                $old_email = $customer_data->user_email;
                
                $customer_data->cust_contact=$req->new_contact;
                $customer_data->cust_name=$req->new_name;
                $customer_data->user_email = $req->new_email;
                
                if ($req->hasFile('new_pic')) {
                    $file = $req->file('new_pic');
                    $destinationPath = public_path('image/customer');
                    $filename = $file->getClientOriginalName();
                    $file->move($destinationPath, $filename);
                    $customer_data->cust_pic = 'image/customer/' . $filename; // Save the file path
                }
                
                $customer_data->save();

                if($req->new_email != $customer_data->user_email) {
                    User::where('user_email',$old_email)->delete();
                }
                
                return redirect('custProfilePage');
            }

        } else {
            return "get nothing";
        }
    }
}
