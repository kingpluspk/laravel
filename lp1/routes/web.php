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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Auth::routes();

/**
 * 快速入门:
 * 参考:
 * https://github.com/johnlui/Learn-Laravel-5
 */
Route::get('now', function(){
    return date('Y-m-d H:i:s');
});
Route::get('/', 'HomeController@index')->name('home');
Route::group(['middleware' => 'auth', 'namespace' => 'Admin', 'prefix' => 'admin'], function(){
    Route::get('/', 'HomeController@index');
    Route::resource('article', 'ArticleController');
});
Route::get('article/{id}', 'ArticleController@show');
Route::post('comment', 'CommentController@store');


/**
 * 进阶:
 * 服务容器/服务器提供者/契约/依赖自动注入
 * 参考:
 * http://laravelacademy.org/post/796.html
 */
Route::get('testAuto','TestController@testAuto');
Route::get('testBind','TestController@testBind');
