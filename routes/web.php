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
/*  Auth Route */
Auth::routes();

/*  Home Page Route */
Route::get('/', function () {
    $parts = \App\Piece::get();
    return view('index', compact('parts'));
})->name('index');

/*  Dashboard */
Route::get('/home', 'HomeController@index')->name('home');

/* Pages Route */
Route::view('/example', 'example')->name('example');

/*  Search Routes  */
Route::view('/search', 'search')->name('search');

/*  Casse Routes  */
Route::view('/directory', 'directory')->name('directory');
Route::view('/casse/{id}', 'profile')->name('profile');

/*  Car Models Routes  */
Route::view('/home/model', 'admin.model')->name('model');
Route::view('/home/model/add', 'admin.modelAdd')->name('model.add');
Route::view('/home/model/{id}', 'admin.modelEdit')->name('model.edit');

/*  Go Pro Routes  */
Route::view('/home/pro', 'pro')->name('pro'); //sent req to go pro
Route::view('/home/prosent', 'proSent')->name('pro.sent'); // req send succesfully
Route::view('/home/pro/list', 'admin.proList')->name('pro.list'); // req list for admin
Route::view('/home/pro/{id}', 'admin.proReq')->name('pro.req'); // req view for admin

/*  Gs Users Routes  */
Route::view('/home/users', 'admin.users')->name('users.List');
Route::view('/home/users/{id}', 'admin.userView')->name('users.view');

/*  Dashboard Routes    */
Route::view('/home/account', 'account')->name('account');
Route::view('/home/messages', 'messages')->name('messages');

/*  Ads Routes  */
Route::view('/annonce', 'annonce')->name('annonce'); // annoce for anyone public view
Route::view('/home/annonce', 'annonces')->name('myads'); // users annonce list
Route::view('/home/annonces', 'admin.annonces')->name('ads'); // admin annonce list
Route::view('/home/annonce/add', 'addAds')->name('addAds'); // add ads form
Route::view('/home/annonce/{id}', 'editAds')->name('EditAds'); // edit ads

/*  Dr Role Routes  */
Route::view('/home/role', 'dr.role')->name('dr.roles.list'); // dr roles list
Route::view('/home/role/add', 'dr.roleAdd')->name('dr.roles.add'); // dr add role
Route::view('/home/role/{id}', 'dr.roleEdit')->name('dr.roles.edit'); // dr edit role