<?php

use Illuminate\Support\Facades\Route;

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

// ルーティング:urlの指定、どのurlで何をするか
// urlからアクセス->get,formからアクセス->post

Route::get('/', function () {
    return view('welcome');
});

Route::get('/bbs', 'BbsController@index');

//BMI
Route::get('/bmi', 'BmiController@index');
Route::post('/bmi/calc', 'BmiController@calc');

//星座
Route::get('/sign', 'SignController@index');
Route::post('/sign/yourSign', 'SignController@yourSign');
Auth::routes();

//ログイン後の画面(勝手に作られた)
Route::get('/home', 'HomeController@index')->name('home');

//掲示板
Route::get('/post/create', 'PostController@create');
Route::post('/post/create', 'PostController@store');
Route::get('/post', 'PostController@index');

//ToDoリスト
Route::get('/todo/input', 'TodoController@index');
Route::post('/todo/input', 'TodoController@list');
Route::get('/todo/list', 'TodoController@todo_list');
Route::post('/todo/list', 'TodoController@todo_list');

//いいこと
Route::get('/iikoto/input', 'IikotoController@index');
Route::post('/iikoto/input', 'IikotoController@iikoto');
Route::get('/iikoto/list', 'IikotoController@iikoto_list');
Route::post('/iikoto/list', 'IikotoController@iikoto_list');