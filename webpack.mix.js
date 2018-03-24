let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

 /*
 move this into the script when using VUE:
'resources/assets/js/vue.js',
	'resources/assets/js/axios.js',
	'resources/assets/js/app.js',

 */

mix.scripts([
	'resources/assets/js/jquery.js',
	'resources/assets/js/fontawesome-all.min.js',
	'resources/assets/js/fontawesome.js',
	'resources/assets/js/owl.carousel.js',
	'resources/assets/js/tether.js',
	'resources/assets/js/bootstrap.js',
	'resources/assets/js/toastr.js',
	'resources/assets/js/main.js'
	], 'public/js/app.js')
.sass(
	'resources/assets/sass/main.scss',
	'../resources/assets/css/main.css'
).options({
	processCssUrls: false
 })
.styles([
	'resources/assets/css/normalize.css',
	'resources/assets/css/bootstrap.css',
	'resources/assets/css/toastr.css',
	'resources/assets/css/owl.carousel.min.css',
	'resources/assets/css/owl.theme.default.min.css',
	'resources/assets/css/main.css'
], 'public/css/app.css');
