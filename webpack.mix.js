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

mix.js('resources/js/app.js', 'public/js').
js('resources/js/mdb.min.js', 'public/js')

.postCss('resources/css/style.css', 'public/css', [
    //
])
    .postCss('resources/css/mdb.min.css', 'public/css', [
        //
    ]).postCss('resources/css/css3.css', 'public/css', [
        //
    ]);

