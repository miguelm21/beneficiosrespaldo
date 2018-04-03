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
    $config['center'] = '-32.889459, -68.845839';
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
    $marker['position'] = '-32.899569, -68.846949';
    $marker['icon'] = 'https://icon-icons.com/icons2/1151/PNG/32/1486505264-food-fork-kitchen-knife-meanns-restaurant_81404.png';;
    $marker['infowindow_content'] = 'Gastronomia 1';
    
    app('map')->add_marker($marker);

    $marker = array();
    $marker['position'] = '-32.879569, -68.816949';
    $marker['icon'] = 'https://icon-icons.com/icons2/1149/PNG/32/1486504374-clip-film-movie-multimedia-play-short-video_81330.png';;
    $marker['infowindow_content'] = 'Entretenimiento 1';
    
    app('map')->add_marker($marker);

    $marker = array();
    $marker['position'] = '-32.909569, -68.876949';
    $marker['icon'] = 'https://icon-icons.com/icons2/1146/PNG/32/1486485566-airliner-rplane-flight-launch-rbus-plane_81166.png';;
    $marker['infowindow_content'] = 'Turismo 1';

    app('map')->add_marker($marker);

    $marker = array();
    $marker['position'] = '-32.879569, -68.876949';
    $marker['icon'] = 'https://icon-icons.com/icons2/197/PNG/32/scissors_24029.png';;
    $marker['infowindow_content'] = 'Moda 1';
    
    app('map')->add_marker($marker);

    $marker = array();
    $marker['position'] = '-32.909569, -68.816949';
    $marker['icon'] = 'https://icon-icons.com/icons2/1130/PNG/32/womaninacircle_80046.png';;
    $marker['infowindow_content'] = 'Belleza 1';
    
    app('map')->add_marker($marker);

    $marker = array();
    $marker['position'] = '-32.869569, -68.846949';
    $marker['icon'] = 'https://icon-icons.com/icons2/1151/PNG/32/1486505259-estate-home-house-building-property-real_81428.png';;
    $marker['infowindow_content'] = 'Deco y Hogar 1';
    
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
