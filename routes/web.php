<?php

Auth::routes();
//Auth::routes(['verify' => true]);

Route::get('/', 'NewsController@home')->name('home');
Route::get('/detail/{id}', 'NewsController@page')->name('page');

Route::get('access','LoginController@accessLogin')->name('login');
Route::post('access','LoginController@login_post')->name('pro_access');
Route::get('logout_user','LoginController@logout_user')->name('logout_user');
Route::get('register','LoginController@register')->name('register');
Route::post('register','LoginController@register_post')->name('register_post');

//Route::get('forgot_password','newsController@forgot_password')->name('forgot_password');


Route::get('admin','AdminController@admin')->name('admin');
Route::get('insert', 'AdminController@insert')->name('insert');
Route::post('insert', 'AdminController@postInsert')->name('postInsert');
Route::get('update/{id}', 'AdminController@update')->name('update');
Route::post('update/{id}', 'AdminController@postUpdate')->name('postUpdate');
Route::get('delete/{id}', 'AdminController@delete')->name('delete');
Route::get('soft_delete/{id}', 'AdminController@soft_delete')->name('soft_delete');

//
//Route::get('/home', 'HomeController@index')->name('home');
