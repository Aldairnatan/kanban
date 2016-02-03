var elixir = require('laravel-elixir');

require('laravel-elixir-vueify');

elixir(function (mix) {
    mix
        .styles('*.css', 'public/css/libs.css')
        .sass('app.scss')
        .browserify('main.js')

        .browserSync({
            proxy: 'kanban.app'
        })
    ;

});