<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;

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

#Route::get('/mail', function(){
#    return view('mails/example');
#});

Route::get('/sendMail', function() {
    Mail::to('nyx@teste.com')->send(new \App\Mail\Welcome());

    return view('mails/example');
});

Route::group(['prefix' => 'api/'], function() {
    Route::get('email', 'EmailController@index');
});