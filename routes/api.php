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
    Route::get('subCategory', 'SubCategoryController@index');
    Route::get('intrant', 'ProductController@intrant');
    Route::post('product', 'ProductController@store');
});
