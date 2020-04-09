<?php

namespace App\Http\Controllers;

//use:外のものを呼び出し
//Illuminateディレクトリ内のHttpディレクトリ内のRequest.php
use Illuminate\Http\Request;
//appディレクトリ内のTodo.php（モデル）呼び出しTodoテーブル
use App\Todo;

class TodoController extends Controller
{
  public function index() {
    return view('todo/input'); //view:HTMLをかえす。ファイル名を指定
  }

  //use Illuminate\Http\Request;とpublic function xxx(Request $request){}はセット
  public function list(Request $request) {
    Todo::create([
      'title' => $request->title,
      'time' => $request->datetime,
      'note' => $request->note
    ]);
    return view('todo/input');
    //redirect:URLに移動する指示
    //web.phpのRoute::get('/todo/input', 'TodoController@index');
  }

  // TodoListに関するメソッド
  public function todo_list() {
    $todos = Todo::get();
    return view('todo/list', ['todos' => $todos]);
  }
}