const mix = require('laravel-mix');


mix
    .js('resources/js/app.js', 'public/js')
    .js('resources/js/admin.js', 'public/js')
    .css('resources/css/app.css', 'public/css')
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