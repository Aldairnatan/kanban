var elixir = require('laravel-elixir');

elixir(function (mix) {
    mix
        .sass('app.sass')
        .browserSync({
            proxy: 'eshta.app'
        })
    ;

});