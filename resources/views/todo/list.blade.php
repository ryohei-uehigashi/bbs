@extends('layouts.app')

@section('content')
    {{-- Todo入力 --}}
    <div class="container">
    <h1 class="mb-3">ToDoList</h1>
    
    <form action="/todo/input" method="post">
      @csrf
      <div class="row">
        <label for="title" class="col-3">やること:
          <input type="text" name="title" class="ml-3 mb-3">
        </label><br>
        <label for="datetime" class="col-3">日時:
          <input name="datetime" type="datetime-local" class="ml-3 mb-3">
        </label>
      </div>
      
      <div class="row">
        <label for="note" class="col-2">備考
          <input name="note" cols="38" rows="5" class="ml-3">
        </label>
      </div>
      <button class="btn btn-primary btn-lg mb-3">送信</button>
    </form>
    <hr color="black" size="4px">

    {{-- ToDoList表示 --}}
    <div class="container">
      @foreach($todos as $todo)
        <div>
          <h4 class="mt-4">{{$todo->updated_at}}</h4>
          <h2>{{$todo->title}}</h2>
          <p>{{$todo->note}}</p>
          <a href="/todo/edit/{{$todo->id}}">編集する</a> / 
          <a href="/todo/delete/{{$todo->id}}">削除する</a>
          <hr>
        </div>
      @endforeach
    </div>
@endsection