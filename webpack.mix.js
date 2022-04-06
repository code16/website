const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');
require('laravel-mix-jigsaw');

mix.disableSuccessNotifications();
mix.setPublicPath('source/assets/build');

mix.jigsaw({
        open: false
    })
    .js('source/_assets/js/main.js', 'js').vue()
    .sass('source/_assets/sass/main.scss', 'css')
    .options({
        processCssUrls: false,
        postCss: [tailwindcss('./tailwind.config.js')],
        terser: {
            terserOptions: {
                format: {
                    comments: false,
                },
            },
            extractComments: false,
        },
    })
    .version();
