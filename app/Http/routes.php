<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give *t the controller to call when that URI is requested.
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/
//header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Origin: http://localhost:8080");
header("Access-Control-Allow-Credentials: true");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, DELETE");
header("Access-Control-Allow-Headers: Content-Type, X-Auth-Token, Origin");

/*Route::resource('categories', array('middleware' => 'cors', 'uses' => 'CategoryController'));
Route::resource('products', array('middleware' => 'cors', 'uses' => 'ProductController'));
Route::resource('categories.products', array('middleware' => 'cors', 'uses' => 'CategoryProductController'));
*/     
Route::resource('products','ProductController', ['only'=>['index','show']]);
Route::resource('categories','CategoryController');
Route::resource('categories.products','CategoryProductController', ['except' => ['show']]);


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
