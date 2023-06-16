<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Login
Route::get('/loginPage',function () {
    if(session()->has('user_id')){
        return redirect('custHomePage');
    }
    return view('loginPage');
});
Route::post('login',[UserController::class,'userLogin']);
Route::post('register',[UserController::class,'userRegister']);
Route::view('custHomePage','custHomePage');

//Logout
Route::get('/logout',function () {
    if(session()->has('user_id')){
        session()->pull('user_id');
        session()->pull('user_name');
        session()->pull('user_pic');
    }
    return redirect('loginPage');
});

//homePage
Route::get('/homePage', function () {
    return view('homePage');
});

//custHomePage
Route::get('/custHomePage', function () {
    return view('custHomePage');
});


//restPage
Route::get('/viewRestaurantPage', function(){
    return view('viewRestaurantPage');
});

//restDetailsPage
Route::get('/restaurantDetailsPage', function(){
    return view('restaurantDetailsPage');
});



//adminHomePage
Route::get('/adminHomePage', function(){
    return view(('adminHomePage'));
});


//testCardSlider
Route::get('/testCardSlider', function(){
    return view('testCardSlider');
});
