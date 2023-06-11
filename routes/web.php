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
    if(session()->has('user')){
        return redirect('custHomePage');
    }
    return view('loginPage');
});
Route::post('login',[UserController::class,'userLogin']);
Route::view('custHomePage','custHomePage');

//Logout
Route::get('/logout',function () {
    if(session()->has('user')){
        session()->pull('user');
    }
    return redirect('loginPage');
});

//homePage
Route::get('/homePage', function () {
    return view('homePage');
});

//header
Route::get('/header', function () {
    return view('header');
});
