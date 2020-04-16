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
Route::get('/post', 'PostController@index'); //一覧表示
Route::get('/post/delete/{id}', 'PostController@delete'); //パラメータ持たせる（今回はid番号）
//掲示板編集
Route::get('/post/edit/{id}', 'PostController@edit');
Route::post('/post/edit/{id}', 'PostController@update'); //編集後の画面

//ToDoリスト
Route::post('/todo/input', 'TodoController@list');
Route::get('/todo/list', 'TodoController@todo_list');
Route::get('/todo/delete/{id}', 'TodoController@delete'); //削除
Route::get('/todo/edit/{id}', 'TodoController@edit'); //編集
Route::post('/todo/edit/{id}', 'TodoController@update'); //更新

//いいこと
Route::post('/iikoto/input', 'IikotoController@iikoto'); //
Route::get('/iikoto/list', 'IikotoController@iikoto_list');
Route::get('/iikoto/edit/{id}', 'IikotoController@edit'); //編集
Route::get('/iikoto/delete/{id}', 'IikotoController@delete'); //削除
Route::post('/iikoto/edit/{id}', 'IikotoController@update'); //更新