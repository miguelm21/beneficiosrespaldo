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
Route::get('login', array('as' => 'login', 'uses' => 'HomeController@login'));
Route::post('auth', array('as' => 'auth', 'uses' => 'HomeController@auth'));
Route::get('sign-up', array('as' => 'sign-up', 'uses' => 'HomeController@signup'));
Route::post('register', array('as' => 'register', 'uses' => 'HomeController@register'));
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
Route::get('getBenefits.json', array('as' => 'getBenefits.json', 'uses' => 'BenefitsController@getBenefits'));

Route::get('{id}/getBenefits.json', array('as' => '{id}/getBenefits.json', 'uses' => 'BenefitsController@getBenefitsId'));

Route::group(['middleware' => 'auth'], function () {
    
    Route::resource('news', 'NewsController');
    Route::resource('benefits', 'BenefitsController');
    Route::resource('categories', 'CategoriesController');
    Route::resource('cmssocialnetworks', 'Cms_SocialNetworksController');
    Route::resource('cmsslider', 'Cms_SliderController');

    Route::get('logout', function()
    {
        Auth::logout();
        Session::flush();
        return Redirect::to('/');
    });
});

/*Route::resource('task', 'TaskController', ['except' => 'show', 'create', 'edit']);*/
