<?php

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
    return view('welcome');
});


Auth::routes();
Route::get('/index', function () {
    return view('index');
 });
Route::get('/result', function () {
    return view('result1');
});
Route::get('/result2', function () {
    return view('result2');
});

Route::post('/AdminGenerateResult','Generate_result_controller@index');



Route::get('/admin/AdminIndex', function () {
    return view('admin.AdminIndex');
});
Route::get('/admin/AdminExample', function () {
    return view('admin.AdminGenerateResult');
});
Route::get('/admin/AdminResult2', function () {
    return view('admin.AdminGenerateResult2');
});
Route::get('/admin/AdminResultBoard', function () {
    return view('admin.AdminResultBoard');
});

Route::get('/home', 'HomeController@index')->name('home');
Route::get('admin/home','AdminController@index'); 
Route::GET('admin','Admin\LoginController@showLoginForm')->name('admin.login');
Route::POST('admin','Admin\LoginController@login');
Route::POST('admin-password/email','Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::GET('admin-password/reset','Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::POST('admin-password/reset','Admin\ResetPasswordController@reset');
Route::GET('admin-password/reset/{token}','Admin\ResetPasswordController@showResetForm')->name('admin.password.reset'); 
