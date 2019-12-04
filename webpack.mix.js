const mix = require('laravel-mix');
require('laravel-mix-polyfill');

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


// mix.js('resources/js/app.js', 'public/js')
//    .sass('resources/sass/app.scss', 'public/css')

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css')
   .polyfill({
      enabled: true,
      useBuiltIns: "entry",
      targets: {"firefox": "50", "ie": 11}
   });


   mix.js('resources/js/admin.js', 'public/js')
   .polyfill({
    enabled: true,
    useBuiltIns: "entry",
    targets: {"firefox": "50", "ie": 11}
 });

   mix.browserSync({
    injectChanges: false,
    proxy: 'http://127.0.0.1:8000/'
});
