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
Route::get('/admin/images/edit/{image}', 'AdminController@editimage');
Route::post('/admin/images/edit', 'AdminController@updateimage');
Route::get('/admin/images/delete/{item}', 'AdminController@deleteimage');
Route::post('/admin/images/delete', 'AdminController@destroyImg');

Route::get('/admin/videos', 'AdminController@videos');
Route::post('/admin/videos/upload', 'AdminController@uploadVideo');
Route::get('/admin/videos/edit/{video}', 'AdminController@editVideo');
Route::post('/admin/videos/edit', 'AdminController@updateVideo');
Route::get('/admin/videos/delete/{item}', 'AdminController@delVideo');
Route::post('/admin/videos/delete', 'AdminController@destroyVideo');

Route::get('/admin/news', 'AdminController@news');
