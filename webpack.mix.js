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

mix.styles([
    'resources/css/style.css',
    'resources/css/auth.css',
], 'public/css/app.css');
mix.styles([
    'resources/css/admin-style.css',
], 'public/css/admin-style.css');

mix.scripts([
    'resources/js/script.js',
], 'public/js/app.js');
mix.scripts([
    'resources/js/admin-script.js',
], 'public/js/admin-script.js');
