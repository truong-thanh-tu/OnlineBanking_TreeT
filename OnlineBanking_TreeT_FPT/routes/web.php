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
Route::group(['prefix'=>'account'],function (){
    Route::get('login',[
        'as'=> 'Login',
        'uses'=> 'OutsidePartController\AccountController@getLogin'
    ]);
    Route::get('register',[
        'as'=> 'Register',
        'uses'=> 'OutsidePartController\AccountController@getRegister'
    ]);
});
Route::group(['prefix'=>'personal'],function (){
    Route::group(['prefix'=>'account'],function (){
        Route::get('account',[
            'as'=>'List_Account',
            'uses'=>'InsideParController\AccountController@getListAccount'
        ]);
        Route::get('detail_account/{id}',[
            'as'=>'Detail_Account',
            'uses'=>'InsideParController\AccountController@getDetailAccount'
        ]);
    });
    Route::group(['prefix'=>'transfers'],function (){
        Route::get('',[
            'as'=>'Transfers',
            'uses'=> 'InsideParController\TransfersController@getTransfer'
        ]);
        Route::get('internal_transfer',[
            'as'=>'Internal_Transfer',
            'uses'=> 'InsideParController\TransfersController@getInternalTransfer'
        ]);
        Route::get('external_transfer',[
            'as'=>'External_Transfer',
            'uses'=> 'InsideParController\TransfersController@getExternalTransfer'
        ]);
        Route::get('confirm_information',[
            'as'=>'Confirm_Information',
            'uses'=> 'InsideParController\TransfersController@getConfirmInformation'
        ]);
        Route::get('confirm_transfer',[
            'as'=>'Confirm_Transfer',
            'uses'=> 'InsideParController\TransfersController@getConfirmTransfer'
        ]);
        Route::get('success',[
            'as'=>'Success',
            'uses'=> 'InsideParController\TransfersController@getSuccess'
        ]);
    });
});
