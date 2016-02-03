var elixir = require('laravel-elixir');

elixir(function (mix) {
    mix
        .styles('*.css', 'public/css/libs.css')

        .sass('app.sass')

        .browserSync({
            proxy: 'kanban.app'
        })
    ;

});