<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('login');
});
Route::get('/member', function () {
    return view('Member.Member');
});
Route::get('/addmember', function () {
    return view('Member.AddMember');
});
// Route::get('/viewmember','MemberController@viewMmber');
Route::get('/loginuser', function () {
    return view('Member.memberlogintest');
});
Route::resource('/api/user','MemberController');
Route::post('/api/login','LoginController@loginCheck');
