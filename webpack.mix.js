
const mix = require('laravel-mix');
// var BundleAnalyzerPlugin = require('webpack-bundle-analyzer').BundleAnalyzerPlugin;

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
    .sass('resources/sass/app.scss', 'public/css');

    if (mix.inProduction()) {
        mix.version();
    }

    mix.js('resources/js/admin.js', 'public/js');

    mix.browserSync({
    injectChanges: false,
    proxy: 'http://127.0.0.1:8000/'
});



