const mix = require("laravel-mix");

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

mix.js("resources/js/app.js", "public/js")
    .sass("resources/sass/app.scss", "public/css")
    .copyDirectory('resources/metronic4.5.6', 'public/template/admin')
    .options({
        processCssUrls: false
    })
    // Admin custom
    .js("resources/js/admin.js", "public/js/admin")
    .sass("resources/sass/admin.scss", "public/css/admin");
    