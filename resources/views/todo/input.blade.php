@extends('layouts.app')

{{-- Todoリストの記入ページ --}}
{{-- 名前はcontentに指定しておく（app.blade.phpで決めているため） --}}
@section('content')
  <div class="container">
    <h1 class="mb-3 border-bottom">ToDoList</h1>
    <form action="/todo/input" method="post">
      @csrf
      <label for="title">やること
        <input type="text" name="title" class="ml-3 mb-3">
      </label><br>

      <label for="datetime">日時
        <input name="datetime" type="datetime-local" class="ml-3 mb-3">
      </label><br>

      <label for="note">備考
        <textarea name="note" cols="100" rows="10" class="ml-3 mb-3"></textarea>
      </label><br>

      <button class="btn btn-primary btn-lg">送信</button>
    </form>
  </div>
@endsection