const mix = require('laravel-mix');

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

//Create Things

mix.js('resources/js/app.js', 'public/js').react()
    .sass('resources/sass/app.scss', 'public/css')
    .js('resources/js/custom.js', 'public/js');


//Turn off Terminal Notifications when it succeeds. No news is good news.

mix.disableSuccessNotifications();