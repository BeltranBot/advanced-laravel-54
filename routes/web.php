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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('user/{userId}/articles', 'ArticleUserController@show');
Route::get('/articles', 'ArticlesController@index');
Route::get('/websites', 'WebsitesController@index');

Route::get('/one-to-one-inverse', function() {
  return App\Profile::find(1)->user;
});
