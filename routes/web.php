<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RestController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\WheelController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RateController;

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

//custProfilePage
Route::get('/custProfilePage',[UserController::class,'customerProfile']);
Route::post('/editProfile',[UserController::class,'editProfile']);

//viewRestaurantPage
Route::get('viewRestaurantPage',[RestController::class,'getAllRest']);
Route::get('filter/{searchValue}',[RestController::class,'filter']);

Route::get('addToWheel/{rest_id}',[WheelController::class,'addWheel']);

//restaurantDetailsPage
Route::get('restaurantDetailsPage/{rest_id}',[RestController::class,'restDetails']);

//historyPage
Route::get('/custHistoryPage',[HistoryController::class,'getHistory']);

Route::get('filter/{searchValue}',[RestController::class,'filter']);

//spinwheelPage
Route::get('/spinwheelPage', function(){
    return view('spinwheelPage');
});

//Rating
Route::post('new_rate',[RateController::class,'new_rate']);
Route::post('cust_rate_action', [RateController::class,'rate_action']);

//testNewRating
Route::get('/testNewRating', function(){
    return view(('testNewRating'));
});

//adminHomePage
Route::get('/adminHomePage',[AdminController::class,'homePage']);

//adminEditCustomer
Route::get('/adminEditCustomer', [AdminController::class,'getAllCust']);
Route::get('/adminEditCustomer/{customerId}', [AdminController::class,'getAllwithCust']);
Route::delete('/customers/{customerId}', 'UserController@destroy');

//adminViewRestaurant
Route::get('/adminViewRestaurant', [AdminController::class,'getAllRest']);
Route::get('/adminViewRestaurant/{customerId}', [AdminController::class,'getAllwithRest']);

//adminEditRestaurant
Route::get('/adminEditRest', function(){
    return view(('adminEditRest'));
});

//adminAddRestaurant
Route::get('/adminAddRestaurant', function(){
    return view(('adminAddRestaurant'));
});

//adminProfile
Route::get('/adminProfilePage', function(){
    return view(('adminProfilePage'));
});

//adminEditRating
Route::get('/adminEditRating', function(){
    return view(('adminEditRating'));
});

// Route::get('list',[RestController::class,'show']);
// Route::post('addPic',[RestController::class,'addPic']);

//testAddRestPage
Route::get('/newAdminViewRest', function(){
    return view (('newAdminViewRest'));
});