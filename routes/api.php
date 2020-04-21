<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\URL;

if (App::environment('production')) {
    URL::forceScheme('https');
}

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/* Region Api to Fetch */
Route::get('/region', 'regionController@index');

/* Marque Model Api to Fetch */
Route::get('/models', 'ModelApiController@index');

/* Parts Api to Fetch */
Route::get('/parts', 'PartsApiController@index');

///* Api to delete image */
//Route::resource('/img', 'ImageController',['only' => ['destroy','show']]);


//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});