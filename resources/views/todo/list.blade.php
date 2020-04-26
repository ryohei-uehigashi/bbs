@extends('layouts.app')

@section('content')
    {{-- Todo入力 --}}
    <div class="container">
        {{-- エラーメッセージ --}}
        @if($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
              <li>{{$error}} </li>
            @endforeach
          </ul>
        </div>
      @endif
    <h1 class="mb-3">ToDoList</h1>
    
    <form action="/todo/list" method="post">
      @csrf
      <div class="row">
        <label for="title">やること：</label>
        <input type="text" id="title" name="title" class="@error('title') is-invalid @enderror">
        @error('title')
          <div class="alert alert-danger">{{$message}}</div>
        @enderror

        <label for="datetime">日時：</label>
        <input type="datetime-local" id="datetime" name="datetime" class="@error('datetime') is-invalid @enderror">
        @error('datetime')
          <div class="alert alert-danger">{{$message}}</div>
        @enderror
      </div>
      
      <div class="row">
        <label for="note">備考</label>
        <input type="text" id="note" name="note" class="@error('note') is-invalid @enderror">
        @error('note')
          <div class="alert alert-danger">{{$message}}</div>
        @enderror
      </div>
      <button class="btn btn-primary btn-lg mb-3">送信</button>
    </form>
    <hr color="black" size="4px">

    {{-- ToDoList表示 --}}
    <div class="container">
      @foreach($todos as $todo)
        <div>
          <h4 class="mt-4">投稿時間：{{$todo->updated_at}}</h4>
          <h4>{{$todo->time}}</h4>
          <h2>{{$todo->title}}</h2>
          <p>{{$todo->note}}</p>
          <a href="/todo/edit/{{$todo->id}}">編集する</a> / 
          <a href="/todo/delete/{{$todo->id}}">削除する</a>
          <hr>
        </div>
      @endforeach
    </div>
@endsection