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
        return view('index');
})->name('index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/casse/{id}', function (){ return view('profile');})->name('profile');


Route::view('/directory', 'directory')->name('directory');
Route::view('/pro', 'pro')->name('pro');
Route::view('/home/annonce/add', 'addAds')->name('addAds');
Route::view('/home/account', 'account')->name('account');
Route::view('/home/messages', 'messages')->name('messages');
Route::view('/search', 'search')->name('search');
Route::view('/annonce', 'annonce')->name('annonce');



