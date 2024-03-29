@extends('layouts.app')

@section('content')
  <div class="container">
    <a href="/post/create">新規投稿</a>
    <h1 class="mb-3 border-bottom">投稿一覧</h1>
    {{-- 配列からタイトルと内容を取り出し、表示 --}}
    {{-- $postsはPostController.phpで定義 --}}
    @foreach($posts as $post)
      <div>
        <h1>{{$post->title}}</h1>
        <p>{{$post->content}}</p>
        <a href="/post/edit/{{$post->id}}">編集</a>
        <a href="/post/delete/{{$post->id}}">削除</a>
      </div>
    @endforeach
  </div>
@endsection