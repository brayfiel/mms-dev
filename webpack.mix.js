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

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css')

mix.styles([
    // 'resources/css/blog-post.css',
    'resources/css/bootstrap.css',
    'resources/css/font-awesome.css',
    'resources/css/metisMenu.css',
    'resources/css/sb-admin-2.css'
], 'public/css/libs.css');

mix.scripts([
    'resources/js/jquery.js',
    // 'resources/js/bootstrap.js',
    'resources/js/bootstrap.bundle.js',
    'resources/js/sb-admin-2.js',
    'resources/js/metisMenu.js',
    // 'resources/js/scripts.js'
    'resources/js/zipcode.js',
], 'public/js/libs.js');

mix.copy('resources/fonts/fontawesome-webfont.eot', 'public/fonts/fontawesome-webfont.eot');
mix.copy('resources/fonts/fontawesome-webfont.svg', 'public/fonts/fontawesome-webfont.svg');
mix.copy('resources/fonts/fontawesome-webfont.ttf', 'public/fonts/fontawesome-webfont.ttf');
mix.copy('resources/fonts/fontawesome-webfont.woff', 'public/fonts/fontawesome-webfont.woff');
mix.copy('resources/fonts/fontawesome-webfont.woff2', 'public/fonts/fontawesome-webfont.woff2');
mix.copy('resources/fonts/FontAwesome.otf', 'public/fonts/FontAwesome.otf');
