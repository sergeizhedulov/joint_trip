const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/joint_trip/src/main.js', 'public/js')
    .vue()
    .postCss('resources/js/joint_trip/public/css/style.css', 'public/css', [
        //
    ])
    .copyDirectory('resources/js/joint_trip/public/images', 'public/images');
