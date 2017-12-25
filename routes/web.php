<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth/login');
});
Route::get('/logout','Auth\LoginController@logout');

Auth::routes();

Route::get('/index', 'HomeController@index')->name('index');
//Route::post('/save', 'PostController@save');
Route::get('/user/manage','UserController@manage');
Route::get('/addblog','PodcastController@showForm');
Route::post('/addblog','PodcastController@store');
Route::get('/test','PostController@test');

Route::group(['prefix'=>'auth','middleware'=>['web','role:administrator|checked']],function (){
    Route::get('users','UserController@index');
    Route::get('roles','RoleController@index');
    Route::get('permissions','PermissionController@index');
    Route::get('menus','MenuController@index');
    Route::get('users/addUser','UserController@showAdd');
    Route::post('users/addUser','UserController@Add');
    Route::get('roles/addRole','RoleController@showAdd');
    Route::post('roles/addRole','RoleController@add');
    Route::get('permissions/addPermission','PermissionController@showAdd');
    Route::post('permissions/addPermission','PermissionController@add');
    Route::get('users/export/{page}','UserController@export');
});

Route::group(['prefix'=>'blog','middleware'=>['web','role:administrator|editor']],function(){
    Route::get('blog','BlogController@index');
    Route::get('blog/addBlog','BlogController@showAdd');
    Route::post('blog/addBlog','BlogController@add');
    Route::post('blog/upload','BlogController@upload');
});

Route::get('/error',function(){
    return view('error',['message'=>'']);
});

Route::get('/test','BlogController@getBlog');

Route::get('/testqueue','UserController@testQueue');
Route::get('/testpay','UserController@testPay');