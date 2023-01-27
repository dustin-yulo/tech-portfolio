// webpack.mix.js

let mix = require('laravel-mix');

mix.sass('src/scss/main.scss', 'css')
   .setPublicPath('build');