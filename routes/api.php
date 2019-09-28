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

Route::group(['prefix' => '/'], function () {
    Route::post('login', 'LoginController@login');
    Route::post('register', 'LoginController@register');
    Route::post('logout', 'LoginController@logout');

    Route::group(['prefix' => 'item'], function () {
        Route::get('/', 'ItemController@index');
        Route::get('/by/{id}', 'ItemController@byId');
    });
    Route::group(['prefix' => 'report', 'middleware' => 'auth'], function () {
        Route::get('/', 'ReportController@index');
        Route::post('/create', 'ReportController@create');
    });

});


Route::get('regions', 'RegionController@index');
Route::group(['prefix' => 'about', 'middleware' => 'auth'], function () {
    Route::get('/', 'AboutController@index');
    Route::get('/by/{id}', 'AboutController@byId');
    Route::post('/create', 'AboutController@create');
    Route::post('/del/{id}', 'AboutController@destroy');
    Route::post('/update', 'AboutController@update');
});


Route::group(['prefix' => '/dashboard', 'middleware' => 'auth:api'], function () {

    Route::group(['prefix' => 'item'], function () {
        Route::get('/', 'ItemController@index');
        Route::get('/by/{id}', 'ItemController@byId');
        Route::post('/create', 'ItemController@create');
        Route::post('/del/{id}', 'ItemController@destroy');
        Route::post('/update', 'ItemController@update');
    });
    Route::group(['prefix' => 'comment'], function () {
        Route::get('/', 'CommentsController@index');
        Route::get('/by/{id}', 'CommentController@byId');
        Route::post('/create', 'CommentController@create');
        Route::post('/del/{id}', 'CommentController@destroy');
        Route::post('/update', 'CommentController@update');
    });
    Route::group(['prefix' => 'prop'], function () {
        Route::get('/', 'PropAboutController@index');
        Route::get('/by/{id}', 'PropAboutController@byId');
        Route::post('/create', 'PropAboutController@create');
        Route::post('/del/{id}', 'PropAboutController@destroy');
        Route::post('/update', 'PropAboutController@update');
    });


    Route::group(['prefix' => 'report'], function () {
        Route::get('/', 'ReportController@index');
        Route::get('/by/{id}', 'ReportController@byId');
        Route::post('/create', 'ReportController@create');
        Route::post('/del/{id}', 'ReportController@destroy');
        Route::post('/update', 'ReportController@update');
    });
    Route::group(['prefix' => 'about'], function () {
        Route::get('/', 'AboutController@index');
        Route::get('/by/{id}', 'ReportController@byId');
        Route::post('/create', 'ReportController@create');
        Route::post('/del/{id}', 'ReportController@destroy');
        Route::post('/update', 'ReportController@update');
    });

});

