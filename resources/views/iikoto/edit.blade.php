@extends('layouts.app')

@section('content')
    <div class="container">
      <h1 class="mb-3">編集</h1>

      {{-- 入力欄 --}}
      <form action="/iikoto/edit/{{$iikoto->id}}" method="post" class="border mb-4 p-2" id="input">
        @csrf
        <div>
            <label for="date">日付：
            <input type="date" name="date" value="{{$iikoto->date}}">
            </label>
        </div>
        <div>
          <label for="iikoto">いいこと：
            <input type="text" name="iikoto" value="{{$iikoto->iikoto}}">
          </label>
        </div>
        <input type="submit">
      </form>
@endsection