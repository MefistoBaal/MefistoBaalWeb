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

mix.js('resources/js/landing.js', 'public/js').version()
    .sass('resources/sass/landing.scss', 'public/css').version();
mix.js('resources/js/dashboard.js', 'public/js').version()
    .sass('resources/sass/dashboard.scss', 'public/css').version();
mix.js('resources/js/loginadmin.js', 'public/js').version();