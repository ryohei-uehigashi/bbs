@extends('layouts.app')

@section('content')
    <div class="container">
      <h1 class="mb-3">いいことリスト</h1>
      
      {{-- 入力欄 --}}
      <form action="/iikoto/input" method="post" class="border mb-4 p-2" id="input">
        @csrf
        {{-- 記入欄の隣にエラー文表示 --}}
        <div>
            <label for="date">日付：</label>
            <input type="date" name="date" class="@error('date') is-invalid @enderror">
            @error('date')
              <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>
        <div>
          <label for="iikoto">いいこと：</label>
          <input type="text" name="iikoto" class="@error('iikoto') is-invalid @enderror">
          @error('iikoto')
            <div class="alert alert-danger">{{$message}}</div>
          @enderror
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