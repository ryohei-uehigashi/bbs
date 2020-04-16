@extends('layouts.app')

@section('content')
    <div class="container">
      <h1 class="mb-3">いいことリスト</h1>

      {{-- 入力欄 --}}
      <form action="/iikoto/input" method="post" class="border mb-4 p-2" id="input">
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

      {{-- いいことリスト --}}
      @foreach($iikotos as $iikoto)
        <div>
          <h3>{{$iikoto->date}}</h3>
          <h1>{{$iikoto->iikoto}}</h1>
        <a href="/iikoto/edit/{{$iikoto->id}}">編集</a> / 
          <a href="/iikoto/delete/{{$iikoto->id}}">削除</a>
          <hr class="mb-3">
        </div>
      @endforeach
      <a href="#input">入力欄へ</a>
    </div>
@endsection