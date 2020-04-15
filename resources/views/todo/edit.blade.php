@extends('layouts.app')

@section('content')
  <div class="container">
    <h1 class="mb-3 border-bottom"></h1>
    <form action="/todo/edit/{{$todo->id}}" method="post">
      @csrf
      <label for="title">やること 編集ページ
        <input type="text" name="title" class="ml-3 mb-3" value="{{$todo->title}}">
        <a href="/todo/edit">編集する</a>
      </label><br>

      <label for="datetime">日時
      <input name="datetime" type="datetime-local" class="ml-3 mb-3" value="{{$todo->datetime}}">
      </label><br>

      <label for="note">備考
        <textarea name="note" cols="100" rows="10" class="ml-3 mb-3" value="{{$todo->note}}"></textarea>
      </label><br>

      <button class="btn btn-primary btn-lg">更新</button>
    </form>
  </div>
@endsection