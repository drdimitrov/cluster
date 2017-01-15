<?php

App::setLocale('bg');

// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout');

// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm');
Route::post('register', 'Auth\RegisterController@register');

// Account activation routes
Route::get('activate/token/{token}', 'Auth\ActivationController@activate')->name('auth.activate');
Route::get('activate/resend', 'Auth\ActivationController@resend')->name('auth.activate.resend');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

//Application routes
Route::get('/', 'MainController@index');
Route::get('/method', 'MethodController@index');
Route::get('/method/{part}/transition/{num?}', 'MethodController@transitions');
Route::get('/pictures', 'MainController@images');
Route::get('/videos', 'MainController@videos');
Route::get('/news/{item?}', 'MainController@news');
Route::post('/contact', 'MainController@contact');

//Account routes
Route::get('/home', 'HomeController@index');

//Admin routes
Route::get('/admin', 'Admin\AdminController@index');

Route::get('/admin/images', 'Admin\AdminController@images');
Route::post('/admin/images/upload', 'Admin\AdminController@uploadimage');
Route::get('/admin/images/edit/{image}', 'Admin\AdminController@editimage');
Route::post('/admin/images/edit', 'Admin\AdminController@updateimage');
Route::get('/admin/images/delete/{item}', 'Admin\AdminController@deleteimage');
Route::post('/admin/images/delete', 'Admin\AdminController@destroyImg');

Route::get('/admin/videos', 'Admin\AdminController@videos');
Route::post('/admin/videos/upload', 'Admin\AdminController@uploadVideo');
Route::get('/admin/videos/edit/{video}', 'Admin\AdminController@editVideo');
Route::post('/admin/videos/edit', 'Admin\AdminController@updateVideo');
Route::get('/admin/videos/delete/{item}', 'Admin\AdminController@delVideo');
Route::post('/admin/videos/delete', 'Admin\AdminController@destroyVideo');

Route::get('/admin/news', 'Admin\AdminController@news');
Route::post('/admin/news/upload', 'Admin\AdminController@uploadnews');
Route::get('/admin/news/edit/{item}', 'Admin\AdminController@editNews');
Route::post('/admin/news/edit', 'Admin\AdminController@updateNews');
Route::get('/admin/news/delete/{item}', 'Admin\AdminController@delNews');
Route::post('/admin/news/delete', 'Admin\AdminController@destroyNews');

Route::get('/admin/transition-groups', 'Admin\TransitionsController@trGroups');
Route::post('/admin/transition-groups', 'Admin\TransitionsController@savetrGroups');

Route::get('/admin/transitions', 'Admin\TransitionsController@transitions');
Route::post('/admin/transitions', 'Admin\TransitionsController@saveTransition');

Route::get('/admin/transition-notes', 'Admin\TransitionsController@notes');
Route::post('/admin/transition-notes', 'Admin\TransitionsController@saveNotes');

Route::get('/admin/transition-videos', 'Admin\TransitionsController@videos');
Route::post('/admin/transition-videos', 'Admin\TransitionsController@saveVideos');
