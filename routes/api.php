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

Route::group([
    'middleware' => 'api'

], function ($router) {
	Route::post('authenticate', 'Api\ApiAuthController@authenticate');
	Route::post('register', 'Api\ApiAuthController@register');
    Route::post('login', 'Api\ApiAuthController@login');
    Route::post('logout', 'Api\ApiAuthController@logout');
    Route::post('refresh', 'Api\ApiAuthController@refresh');
    Route::get('me', 'Api\ApiAuthController@me');
    Route::get('auth/facebook', 'Api\ApiFacebookController@redirectToProvider');
    Route::post('auth/facebook/callback', 'Api\ApiFacebookController@handleProviderCallback');
    Route::get('auth/google', 'Api\ApiGoogleController@redirectToProvider');
    Route::post('auth/google/callback', 'Api\ApiGoogleController@handleProviderCallback');

    Route::post('postbenefit', 'Api\ApiHomeController@postbenefit');
    Route::delete('unpostbenefit/{id}', 'Api\ApiHomeController@unpostbenefit');

    Route::get('map', 'Api\ApiHomeController@map');
    Route::get('category/{id}', 'Api\ApiHomeController@category');
    Route::get('new/{id}', 'Api\ApiHomeController@new');
    Route::get('benefit/{id}', 'Api\ApiHomeController@benefit');
    Route::get('savebenefits', 'Api\ApiHomeController@savebenefits');

    Route::put('updateprofile/{id}', 'Api\ApiHomeController@updateprofile');
    Route::put('updatepassword/{id}', 'Api\ApiHomeController@updatepassword');

    Route::post('registerPush', 'Api\ApiPushController@registerPush');
    Route::post('sendMessage', 'Api\ApiPushController@Message');

    Route::get('getBenfits', 'Api/ApiHomeController@getBenefits');
});
