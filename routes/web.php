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

Route::get('/meuip',function () {
    return $_SERVER['REMOTE_ADDR'];
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register',function() {
    return view('register');
});

Route::get('/logout','LoginController@logout')->middleware('checkLogin');

Route::post('/register','LoginController@cadastro');

Route::post('/login','LoginController@auth');

Route::get('/trackID/{id}','TrackIDController@contaAcesso');

Route::get('/dashboard','DashboardController@dashboard')->middleware('checkLogin');

Route::post('/new/TrackID','TrackIDController@createNew')->middleware('checkLogin');

Route::get('/trackID/enable/{id}','TrackIDController@enable')->middleware('checkLogin');

Route::get('/trackID/disable/{id}','TrackIDController@disable')->middleware('checkLogin');