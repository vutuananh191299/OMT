<?php

Auth::routes();
//Auth::routes(['verify' => true]);

Route::get('/', 'News1Controller@home')->name('home');
Route::get('/detail/{id}', 'News1Controller@daylaham')->name('page');

Route::get('access','LoginController@accessLogin')->name('login');
Route::post('access','LoginController@login_post')->name('pro_access');
Route::get('logout_user','LoginController@logout_user')->name('logout_user');
Route::get('register','LoginController@register')->name('register');
Route::post('register','LoginController@register_post')->name('register_post');


//list
Route::get('admin','AdminController@admin')->name('admin');
Route::post('getUsers','AdminController@getUsers')->name('getUsers');
Route::get('insert', 'AdminController@insert')->name('insert');
Route::post('insert', 'AdminController@postInsert')->name('postInsert');
Route::get('update/{id}', 'AdminController@update')->name('update');
Route::post('update/{id}', 'AdminController@postUpdate')->name('postUpdate');
Route::post('delete/{id}', 'AdminController@delete')->name('delete');
Route::get('soft_delete/{id}', 'AdminController@soft_delete')->name('soft_delete');

//search
Route::get('/live_search/action', 'LiveSearch@action')->name('live_search.action');
Route::get('/live_search/action_User', 'LiveSearch@action_User')->name('live_search.action_User');
Route::get('/live_search/action_Role', 'LiveSearch@action_Role')->name('live_search.action_Role');
//Users
Route::get('user','UserController@user')->name('user');
Route::post('Users','UserController@getUsers')->name('getUsers');
Route::get('insert_User', 'UserController@insert')->name('insert');
Route::post('insert_User', 'UserController@postInsert')->name('postInsert');
Route::get('update_User/{id}', 'UserController@update')->name('update');
Route::post('update_User/{id}', 'UserController@postUpdate')->name('postUpdate');
Route::post('delete_user/{id}', 'UserController@delete')->name('delete');
//Route::get('soft_delete/{id}', 'UserController@soft_delete')->name('soft_delete');

//Role
Route::get('role','RoleController@role')->name('role');
Route::post('Role','RoleController@getRole')->name('getRole');
Route::get('insert_Role', 'RoleController@insert')->name('insert');
Route::post('insert_Role', 'RoleController@postInsert')->name('postInsert');
Route::get('update_Role/{id}', 'RoleController@update')->name('update');
Route::post('update_Role/{id}', 'RoleController@postUpdate')->name('postUpdate');
Route::post('delete_Role/{id}', 'RoleController@delete')->name('delete');
Route::post('user_Role/{role_id}/{user_id}', 'RoleController@userRole');
//Route::get('soft_delete/{id}', 'UserController@soft_delete')->name('soft_delete');

//permission
Route::get('permission','PermissionController@permission')->name('permission');
Route::post('permission','PermissionController@getPermission')->name('getPermission');
Route::get('insert_Permission', 'PermissionController@insert_Permission')->name('insert_Permission');
Route::post('insert_Permission', 'PermissionController@insert_per')->name('insert_permission');
Route::get('update_Permission/{id}', 'PermissionController@update_Permission')->name('update_Permission');
Route::post('update_Permission/{id}', 'PermissionController@update_Per')->name('update_Per');
Route::post('delete_Permission/{id}', 'PermissionController@delete')->name('delete');
Route::post('Permission_Role/{role_id}/{per_id}', 'PermissionController@per_role');
//cmt
Route::get('Comment/{id}', 'CommentController@getComment')->name('cmt');
Route::prefix('cmt')->group(function () {
    Route::post('getComment/{user_id}/{post_id}', 'CommentController@postComment');
    Route::post('del_Comment/{id}', 'CommentController@del_Comment');

 });
