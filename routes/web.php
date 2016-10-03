<?php

App::setLocale('bg');

Auth::routes();

Route::get('/', 'MainController@index');
Route::get('/pictures', 'MainController@images');
Route::get('/videos', 'MainController@videos');
Route::get('/news/{item?}', 'MainController@news');
Route::post('/contact', 'MainController@contact');

Route::get('/home', 'HomeController@index');

Route::get('/admin', 'AdminController@index');

Route::get('/admin/images', 'AdminController@images');
Route::post('/admin/images/upload', 'AdminController@uploadimage');

Route::get('/admin/videos', 'AdminController@videos');
Route::post('/admin/videos', 'AdminController@uploadvideo');
