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


Route::get('/', 'maincontroller@index');

Route::get('/epassform', 'maincontroller@epassform');

Route::get('/message', 'maincontroller@message');

Route::post('/addnewpass', 'maincontroller@addnewpass');

//ADMIN

Route::get('/admin', 'maincontroller@admin');

Route::get('/totalepass', 'maincontroller@totalepass');

Route::get('/pendingpass', 'maincontroller@pendingpass');

Route::get('/apppass', 'maincontroller@apppass');

Route::get('/controlpass/{pid}', 'maincontroller@controlpass');

Route::get('/viewpass/{vid}', 'maincontroller@viewpass');

Route::get('/rejectpass/{rid}', 'maincontroller@rejectpass');


Route::get('/resendpass/{rid}', 'maincontroller@resendpass');

Route::get('/invalidpass/{rid}', 'maincontroller@invalidpass');

Route::get('/checkpass/{mid}', 'maincontroller@checkpass');

Route::get('/log/{mobile}', 'maincontroller@log');

Route::post('/approvepass', 'maincontroller@approvepass');

Route::post('/passstatus', 'maincontroller@passstatus');

Route::post('/reject', 'maincontroller@reject');

Route::get('/adminregister', function () {
    return view('admin.aregister');
});


Route::get('/checkform', function () {
    return view('checkform');
});


Route::get('/login', function () {
    return view('admin.alogin');
});

Route::post('/adminsignup', 'maincontroller@adminsignup');

Route::post('/adminlogincheck', 'maincontroller@adminlogincheck');

Route::get('/logout', 'maincontroller@logout');



