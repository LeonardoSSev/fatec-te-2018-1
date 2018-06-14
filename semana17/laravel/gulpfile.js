var elixir = require('laravel-elixir');

elixir(function(mix) {
    mix.style(['../../../node_modules/bootstrap/dist/css/bootstrap.css'], 'public/css/styles.css');

    mix.sass('app.scss');
});