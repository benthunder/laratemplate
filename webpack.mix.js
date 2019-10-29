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

    // Admin layout css
    .styles([
        'resources/metronic4.5.6/pages/css/tasks.css',
        'resources/metronic4.5.6/global/css/components.css',
        'resources/metronic4.5.6/global/css/plugins.css',
        'resources/metronic4.5.6/layouts/layout/css/layout.css',
        'resources/metronic4.5.6/layouts/layout/css/themes/default.css',
        'resources/metronic4.5.6/layouts/layout/css/custom.css'
    ], 'public/admin/layout.css')
    // Admin layout script
    .scripts([
        "global/scripts/metronic.js",
        "layouts/layout/scripts/layout.js",
        "layouts/layout/scripts/quick-sidebar.js",
        "pages/scripts/index.js",
        "pages/scripts/tasks.js"
    ], "admin/js/script.js")

    // Admin plugin





    ;
