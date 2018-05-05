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

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css')
   .browserSync({
       host:'192.168.10.10',
       proxy: 'homestead.local',
       open:'false',
       browser: 'google-chrome',
       files: [
           './**/*.css',
           './app/**/*',
           './config/**/*',
           './resources/views/**/*',
           './routes/**/*'
       ]
});

