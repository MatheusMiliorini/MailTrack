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

Route::get('/login', function () {
    return view('login');
});

Route::post('/login','LoginController@auth');

Route::get('/trackID/{id}','TrackIDController@updateID');

Route::get('/dashboard','DashboardController@dashboard');

Route::get('/new/TrackID','TrackIDController@createNew');