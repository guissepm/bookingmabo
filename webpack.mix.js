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

mix.js('resources/assets/js/app.js', 'public/js')
    .babel(['resources/assets/js/admin.js'], 'public/js/admin.js') /* Lecture 4 */
    .sass('resources/assets/sass/app.scss', 'public/css')
    .options({
        processCssUrls: false /* Lecture 4 */
     });
  
