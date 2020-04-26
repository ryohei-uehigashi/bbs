<?php

namespace App\Http\Controllers;

//use:外のものを呼び出し
//Illuminateディレクトリ内のHttpディレクトリ内のRequest.php
use Illuminate\Http\Request;
//appディレクトリ内のTodo.php（モデル）呼び出しTodoテーブル
use App\Todo;
use Illuminate\Support\Carbon;

class TodoController extends Controller
{
  public function index() {
    return view('todo/input'); //view:HTMLをかえす。ファイル名を指定
  }

  //use Illuminate\Http\Request;とpublic function xxx(Request $request){}はセット
  public function list(Request $request) {
    $request->validate([
      'title' => 'required | max:10',
      'datetime' => 'required',
      'note' => 'required | max:30',
    ]);
    Todo::create([
      'title' => $request->title,
      'time' => $request->datetime,
      'note' => $request->note
    ]);
    return redirect('/todo/list');
    //redirect:URLに移動する指示
    //web.phpのRoute::get('/todo/input', 'TodoController@index');
  }

  // TodoListに関するメソッド
  public function todo_list(Request $request) {
    $todos = Todo::get();
    return view('todo/list', ['todos' => $todos]);
  }

  // 削除
  public function delete($id) {
    $todo = Todo::find($id);
    $todo->delete();
    return redirect('/todo/list');
  }

//編集
  public function edit($id, Request $request) {
    $todo = Todo::find($id);
    // フルネームスペースで指定
    $todo->time = Carbon::parse($todo->time)->format('Y-m-d\TH:i');
    return view('todo/edit', ['todo' => $todo]);
  }

  //編集後、更新
  public function update(Request $request, $id) {
    $validatedData = $request->validate([
      'title' => 'required | max:10',
      'datetime' => 'required',
      'note' => 'required | max:30',
    ]);
    $todo = Todo::find($id);
    $todo->update([
      'title' => $request->title,
      'time' => $request->datetime,
      'note' => $request->note
    ]);
    return redirect('/todo/list');
  }
}