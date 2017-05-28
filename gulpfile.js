var elixir = require('laravel-elixir');

elixir(function(mix) {
    mix.sass('app.scss')

      .styles([
          'blog-post.css',
          'bootstrap.css',
          'bootstrap.min.css',
          'font-awesome.css',
          'metisMenu.css',
          'sb-admin-2.css',
          'styles.css'

      ], './public/css/libs.css')

      .scripts([
          'bootstrap.js',
          'bootstrap.min.js',
          'jquery.js',
          'metisMenu.js',
          'sb-admin-2.js'

      ],'./public/js/libs.js')
});
