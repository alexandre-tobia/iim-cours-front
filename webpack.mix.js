const mix = require('laravel-mix');

require('dotenv').config();

const tailwindcss = require('tailwindcss');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your WordPlate application. By default, we are compiling the Sass
 | file for your application, as well as bundling up your JavaScript files.
 |
 */

mix
    .options({
        postCss: [tailwindcss('./tailwind.config.js')]
    })
    .sass('resources/sass/app.scss', 'public/styles')
    .version();
