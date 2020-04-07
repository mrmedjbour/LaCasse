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


/*  Gs Users Routes  */
Route::view('/home/users', 'admin.users')->name('users.List');
Route::view('/home/users/{id}', 'admin.userView')->name('users.view');

/*  Dashboard Routes    */
Route::view('/home/messages', 'messages')->name('messages');




// ----------------------------------------------------------------------------
// User Account Routes
Route::get('/home/account', 'User\UserAccountController@account')->name("user.account");
Route::post('/home/account', 'User\UserAccountController@updateAccount')->name("user.updateAccount");
Route::put('/home/account', 'User\UserAccountController@updateAvatar')->name("user.updateAvatar");
Route::patch('/home/account', 'User\UserAccountController@updatePassword')->name("user.updatePassword");
Route::delete('/home/account', 'User\UserAccountController@updateCasseCover')->name("user.updateCasseCover");

// User Annnonce Resource Routes
Route::resource('/home/annonce', 'User\UserAnnonceController');

// User img Route
Route::get('/image/{id}', 'ImageController@delete')->name("image.delete");

//Go Pro Routes
Route::resource('/home/pro', 'ProController', ['except' => ['edit', 'create']]);
Route::get('/home/pro/doc/{id}', 'Admin\AdminFileAccessContoller@AccessUserDoc')->name("pro.doc");

// Ad Routes
Route::get('/annonce/{ad}/{part}/{title?}', 'AdController@adSell')->where(['ad' => '[0-9]+', 'part' => '[0-9]+'])->name("ad.sell"); // sell
Route::get('/annonce/{ad}/{title?}', 'AdController@adBuy')->where(['ad' => '[0-9]+', 'title' => '[A-Za-z0-9-]*'])->name("ad.buy"); // buy
Route::post('/annonce/contact', 'ContactController@contactAd')->name("contactAd");

// Ads Req Page
Route::get('/requests', 'SearchController@AdRequest')->name("requests");

// Search Routes
Route::match(['GET', 'POST'], '/search/{make}/{model}/{part}/{year?}', 'SearchController@search')->name("search.result");
Route::match(['GET', 'POST'], '/search', 'SearchController@searchQuery')->name("search");

/*  Casse Routes  */
Route::get('/directory', 'CasseDirectory@directory')->name('directory');
Route::any('/casse/{id}/{title?}', 'CasseDirectory@profile')->name('profile');

/*  Car Models Routes  */
Route::resource('/home/model', 'Admin\AdminModelController');

/*  Dr Role Routes  */
Route::resource('/home/role', 'DrRolesController');