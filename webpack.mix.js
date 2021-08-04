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

mix
    .js('resources/js/app.js', 'public/js')
    .js('resources/js/admin.js', 'public/js')
    .disableSuccessNotifications()
    .postCss("./resources/css/admin.css", "public/css", [
        require('tailwindcss'),
        require('autoprefixer'),
    ])
    .copy(
        'node_modules/boxicons/fonts',
        'public/fonts'
    )


mix.disableSuccessNotifications();
if (!mix.inProduction()) {
    mix.browserSync({
        proxy: 'roxo-blog.test',
        notify: false
    })
}