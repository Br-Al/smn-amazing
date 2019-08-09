<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::group([
	'middleware' => 'cors',
    'prefix' => 'auth'
    ], function () {
    Route::post('login', 'Api\LoginController@login');
    Route::post('register', 'Api\RegisterController@register');
    Route::post('logout', 'Api\LogoutController@logout');
});

Route::Group([
    'prefix' => 'admin',
    'middleware' => 'cors'
], function(){
    Route::post('unit', 'UnitController@store');
    Route::post('category', 'CategoryController@store');
    Route::post('subCategory', 'SubCategoryController@store');
    Route::post('type', 'TypeController@store');
    Route::get('type', 'TypeController@index');
    Route::get('unit', 'UnitController@index');
    Route::get('category', 'CategoryController@index');
    Route::get('rootCategory', 'CategoryController@rootCategory');
    Route::get('intrant', 'ProductController@intrant');
    Route::post('product', 'ProductController@store');
});
Route::get('product', 'ProductController@index');
Route::post('product', 'ProductController@store');

