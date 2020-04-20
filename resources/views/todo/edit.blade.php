@extends('layouts.app')

@section('content')

  <div class="container">
    <h1 class="mb-3 border-bottom">編集ページ</h1>
    <form action="/todo/edit/{{$todo->id}}" method="post">
      @csrf
      <label for="title">やること
        <input type="text" name="title" class="ml-3 mb-3" value="{{$todo->title}}">
      </label><br>

      <label for="datetime">日時
        <input name="datetime" type="datetime-local" class="ml-3 mb-3" value="{{$todo->time}}">
      </label><br>

      <label for="note">備考
        <input name="note" cols="100" rows="10" class="ml-3 mb-3" value="{{$todo->note}}">
      </label><br>

      <button class="btn btn-primary btn-lg">更新</button>
    </form>
  </div>
@endsection