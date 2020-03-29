@extends('layouts.app')

@section('content')
<div class="container">
  <h1>掲示板投稿ページ</h1>
  <form action="/post/create" method="post">
    @csrf
    <div>
      <label for="title">タイトル</label>
      <input type="text" id="title" name="title">
    </div>
    <div>
      <label for="content">内容</label>
      <textarea id="content" name="content"></textarea>
    </div>
    <div>
      <button class="btn btn-primary">投稿する</button>
    </div>
  </form>
</div>
@endsection
