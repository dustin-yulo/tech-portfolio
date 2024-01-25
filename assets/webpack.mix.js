// webpack.mix.js

let mix = require( 'laravel-mix' );

mix.sass( 'src/scss/main.scss', 'css' )
   .sass( 'src/scss/editor.scss', 'css' )
   .js( 'src/js/main.js', 'js' )
   .js( 'src/js/metabox-file-upload.js', 'js' )
   .setPublicPath( 'build' );