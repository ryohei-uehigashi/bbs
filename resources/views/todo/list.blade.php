@extends('layouts.app')

@section('content')
    {{-- Todo入力 --}}
    <div class="container">
    <h1 class="mb-3">ToDoList</h1>
    
    <form action="/todo/list" method="post">
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
          <textarea name="note" cols="38" rows="5" class="ml-3"></textarea>
        </label>
      </div>
      <button class="btn btn-primary btn-lg mb-3">送信</button>
    </form>
    <a class="" href="/todo/input">入力画面へ</a>
    <hr color="black" size="4px">

  

    {{-- ToDoList表示 --}}
    <div class="container">
      @foreach($todos as $todo)
        <div>
          <h4>{{$todo->updated_at}}</h4>
          <h2>{{$todo->title}}</h2>
          <p class="border-bottom mb-3">{{$todo->note}}</p>
        </div>
      @endforeach
    </div>
@endsection