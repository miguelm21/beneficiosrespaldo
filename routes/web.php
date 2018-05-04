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


Route::get('/', array('as' => 'login', 'uses' => 'HomeController@index'));
Route::get('index', array('as' => 'login', 'uses' => 'HomeController@index'));

//Login
Route::get('login', array('as' => 'login', 'uses' => 'HomeController@login'));
Route::post('auth', array('as' => 'auth', 'uses' => 'HomeController@auth'));
Route::get('auth/facebook', 'FacebookController@redirectToProvider');
Route::get('auth/facebook/callback', 'FacebookController@handleProviderCallback');
Route::get('auth/google', 'GoogleController@redirectToProvider');
Route::get('auth/google/callback', 'GoogleController@handleProviderCallback');

//Register
Route::get('sign-up', array('as' => 'sign-up', 'uses' => 'HomeController@signup'));
Route::post('register', array('as' => 'register', 'uses' => 'HomeController@register'));

//Views
Route::get('closet-benefits', array('as' => 'closet-benefits', 'uses' => 'HomeController@closetbenefits'));
Route::get('dashboard-admin', array('as' => 'dashboard-admin', 'uses' => 'HomeController@dashboardadmin'));
Route::get('details-benefits', array('as' => 'details-benefits', 'uses' => 'HomeController@detailsbenefits'));
Route::get('list-benefits-franchise', array('as' => 'list-benefits-franchise', 'uses' => 'HomeController@listbenefitsfranchise'));
Route::get('list-benefits', array('as' => 'list-benefits', 'uses' => 'HomeController@listbenefits'));
Route::get('profile-screen', array('as' => 'profile-screen', 'uses' => 'HomeController@profilescreen'));
Route::get('profile-screen', array('as' => 'profile-screen', 'uses' => 'HomeController@profilescreen'));
Route::get('blog', array('as' => 'blog', 'uses' => 'HomeController@blog'));
Route::get('article/{article}', array('as' => 'article', 'uses' => 'HomeController@article'));
Route::get('category/{id}', array('as' => 'category', 'uses' => 'HomeController@category'));
Route::get('benefit/{id}', array('as' => 'benefit', 'uses' => 'HomeController@benefit'));
Route::post('search', array('as' => 'search', 'uses' => 'HomeController@search'));

//Ajax
Route::post('postsearch', array('as' => 'postsearch', 'uses' => 'BenefitsController@postsearch'));
Route::post('postbenefit', array('as' => 'postbenefit', 'uses' => 'BenefitsController@postbenefit'));
Route::get('unpostbenefit/{id}', array('as' => 'unpostbenefit', 'uses' => 'BenefitsController@unpostbenefit'));

Route::get('getBenefits.json', array('as' => 'getBenefits.json', 'uses' => 'BenefitsController@getBenefits'));

Route::get('{id}/getBenefits.json', array('as' => '{id}/getBenefits.json', 'uses' => 'BenefitsController@getBenefitsId'));

Route::get('facebookshared/{id}', array('as' => 'facebookshared', 'uses' => 'HomeController@facebookshared'));

Route::group(['middleware' => 'auth'], function () {
    
    Route::resource('news', 'NewsController');
    Route::resource('benefits', 'BenefitsController');
    Route::resource('categories', 'CategoriesController');
    Route::resource('cmssocialnetworks', 'Cms_SocialNetworksController');
    Route::resource('cmsslider', 'Cms_SliderController');

    Route::resource('userbenefits', 'UserBenefitsController');

    Route::get('editprofile/{id}', array('as' => 'editprofile', 'uses' => 'HomeController@editprofile'));
    Route::put('updateprofile/{id}', array('as' => 'updateprofile', 'uses' => 'HomeController@updateprofile'));
    Route::get('editpassword', array('as' => 'editpassword', 'uses' => 'HomeController@editpassword'));
    Route::put('password/{id}', array('as' => 'password', 'uses' => 'HomeController@password'));

    Route::get('logout', function()
    {
        Auth::logout();
        Session::flush();
        return Redirect::to('/');
    });
});

/*Route::resource('task', 'TaskController', ['except' => 'show', 'create', 'edit']);*/
