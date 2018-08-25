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

// Compiling Assets
mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css')
    .copy('node_modules/datatables/media/js/jquery.dataTables.min.js', 'public/js')
    .copy('node_modules/datatables/media/css/jquery.dataTables.min.css', 'public/css')
    .copy('node_modules/datatables/media/images', 'public/images', true);

// BrowserSync
mix.browserSync('http://localhost:8000');
