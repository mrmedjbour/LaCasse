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

/*  Car Models Routes  */
Route::view('/home/model', 'admin.model')->name('model');
Route::view('/home/model/add', 'admin.modelAdd')->name('model.add');
Route::view('/home/model/{id}', 'admin.modelEdit')->name('model.edit');

/*  Go Pro Routes  */
//Route::view('/home/pro', 'pro')->name('pro'); //sent req to go pro
//Route::view('/home/prosent', 'proSent')->name('pro.sent'); // req send succesfully
//Route::view('/home/pro/list', 'admin.proList')->name('pro.list'); // req list for admin
//Route::view('/home/pro/{id}', 'admin.proReq')->name('pro.req'); // req view for admin

/*  Gs Users Routes  */
Route::view('/home/users', 'admin.users')->name('users.List');
Route::view('/home/users/{id}', 'admin.userView')->name('users.view');

/*  Dashboard Routes    */
Route::view('/home/messages', 'messages')->name('messages');


/*  Dr Role Routes  */
Route::view('/home/role', 'dr.role')->name('dr.roles.list'); // dr roles list
Route::view('/home/role/add', 'dr.roleAdd')->name('dr.roles.add'); // dr add role
Route::view('/home/role/{id}', 'dr.roleEdit')->name('dr.roles.edit'); // dr edit role


/*  Ads Routes  */
//Route::view('/annoncex', 'annonce')->name('annoncex'); // annoce for anyone public view
//Route::view('/home/annonce', 'annonces')->name('myads'); // users annonce list
Route::view('/home/annonces', 'admin.annonces')->name('ads'); // admin annonce list
//Route::get('/home/annonce/add', function (){
//    $Partscat = \App\PieceCat::with('pieces')->get();
//    return view('addAds', compact('Partscat'));
//})->name('addAds');
//Route::view('/home/annonce/{id}', 'editAds')->name('EditAds'); // edit ads


// ----------------------------------------------------------------------------
// User Account Routes
Route::get('/home/account', 'User\UserAccountController@account')->name("user.account");
Route::post('/home/account', 'User\UserAccountController@updateAccount')->name("user.updateAccount");
Route::put('/home/account', 'User\UserAccountController@updateAvatar')->name("user.updateAvatar");
Route::patch('/home/account', 'User\UserAccountController@updatePassword')->name("user.updatePassword");

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