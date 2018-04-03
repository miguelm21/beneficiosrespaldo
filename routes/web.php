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

Route::get('/', function () {
    return view('pages.index');
});

Route::get('index', function () {
    return view('pages.index');
});

Route::get('closet-benefits', function () {
	$config = array();
    $config['center'] = 'auto';
    $config['onboundschanged'] = 'if (!centreGot) {
            var mapCentre = map.getCenter();
            marker_0.setOptions({
                position: new google.maps.LatLng(mapCentre.lat(), mapCentre.lng())
            });
        }
        centreGot = true;';

    app('map')->initialize($config);

    // set up the marker ready for positioning
    // once we know the users location
    $marker = array();
    app('map')->add_marker($marker);

    $marker = array();
    $marker['position'] = '9.042930, -69.756560';
    $marker['icon'] = 'http://maps.google.com/mapfiles/ms/icons/blue-dot.png';
    $marker['infowindow_content'] = 'Marcador 1';
    app('map')->add_marker($marker);

    $map = app('map')->create_map();
    return view('pages.closet-benefits', ['map' => $map]);
});

Route::get('dashboard-admin', function () {
    return view('pages.dashboard-admin');
});

Route::get('details-benefits', function () {
    return view('pages.details-benefits');
});

Route::get('list-benefits-franchise', function () {
    return view('pages.list-benefits-franchise');
});

Route::get('list-benefits', function () {
    return view('pages.list-benefits');
});

Route::get('profile-screen', function () {
    return view('pages.profile-screen');
});

Route::resource('task', 'TaskController', ['except' => 'show', 'create', 'edit']);
