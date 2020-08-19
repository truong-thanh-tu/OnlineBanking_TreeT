<?php

use Illuminate\Support\Facades\Route;

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

Route::group(['prefix' => ''], function () {
    Route::get('/', [
        'as' => 'Home',
        'uses' => 'OutsidePartController\PartController@index'
    ]);

    Route::get('about', [
        'as' => 'About',
        'uses' => 'OutsidePartController\PartController@about'
    ]);

    Route::get('services', [
        'as' => 'Services',
        'uses' => 'OutsidePartController\PartController@services'
    ]);

    Route::get('blog', [
        'as' => 'Blog',
        'uses' => 'OutsidePartController\PartController@Blog'
    ]);

    Route::get('contact', [
        'as' => 'Contact',
        'uses' => 'OutsidePartController\PartController@Contact'
    ]);

});

