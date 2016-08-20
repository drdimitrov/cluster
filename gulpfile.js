const elixir = require('laravel-elixir');

require('laravel-elixir-vue');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

// elixir(mix => {
//     mix.sass('app.scss')
//        .webpack('app.js');
// });

elixir(mix => {

	mix.styles([
		'font-awesome.min.css',
        'main.css'
    ]);

    mix.styles([
        'custom.css'
    ], 'public/css/admin.css');

    mix.scripts([
    	'jquery.min.js',
    	'jquery.scrolly.min.js',
    	'skel.min.js',
    	'skel-viewport.min.js',
    	'util.js',
    	'main.js'
	]);
});