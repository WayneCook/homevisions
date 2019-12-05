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


// mix.js('resources/js/app.js', 'public/js')
//    .sass('resources/sass/app.scss', 'public/css');

   mix.js('resources/js/admin.js', 'public/js');

   mix.browserSync({
    injectChanges: false,
    proxy: 'http://127.0.0.1:8000/'
});


mix.js('resources/js/app.js', 'public/js')
    /* extract all vendor */
    .extract([
        'axios', 'vue', 'vuetify'
    ])
mix.sass('resources/sass/app.scss', 'public/css')
mix.sourceMaps()
if (mix.inProduction()) {
    mix.version()
    mix.disableNotifications()
}

