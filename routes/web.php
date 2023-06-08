<?php

use Illuminate\Support\Facades\Route;

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
//Route::view('loginPage','loginPage');
Route::get('/login',function () {
    if(session()->has('user')){
        return redirect('cusHomePage');
    }
    return view('loginPage');
});
Route::post('login',[UserController::class,'userLogin']);

//Logout
Route::get('/logout',function () {
    if(session()->has('user')){
        session()->pull('user');
    }
    return redirect('loginPage');
});