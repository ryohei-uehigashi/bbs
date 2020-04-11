@extends('layouts.app')

@section('content')

    <div class="container">
      
      <h1 class="mb-4 border-bottom">きょうのいいこと</h1>
      <form action="/iikoto/input" method="post">
        @csrf
        <div>
            <label for="date">日付：
              <input type="date" name="date">
            </label>
        </div>
        <div>
          <label for="iikoto">いいこと：
            <input type="text" name="iikoto">
          </label>
        </div>
        <input type="submit">
      </form>
    </div>
@endsection