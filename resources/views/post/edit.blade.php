@extends('layouts.app')

@section('content')
<div class="container">
  <h1>編集ページ（ログインしてね！）</h1>
  <form action="/post/edit/{{$post->id}}" method="post">
    @csrf
    <div>
      <label for="title">タイトル</label>
      <input type="text" id="title" name="title" value="{{$post->title}}">
    </div>
    <div>
      <label for="content">内容</label>
      <textarea id="content" name="content">{{$post->content}}</textarea>
    </div>
    <div>
      <button class="btn btn-primary">投稿する</button>
    </div>
  </form>
</div>
@endsection