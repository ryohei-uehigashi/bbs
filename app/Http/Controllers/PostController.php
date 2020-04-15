<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function create() {
      //view:どのbladeファイルを表示するか->フォルダ名を指定
        return view('post/create');
    }

    public function store(Request $request) {
      Post::create([
        'user_id' => Auth::id(),
        'title' => $request->title,
        'content' => $request->content
      ]);
      // redirect:飛ばす先のurlを指定->bbs.testの後のurlを指定
      // 先頭に"/"必要
      return redirect('/post');
    }

    //一覧
    public function index() {
      //Postテーブルのデータ全部取得
      $posts = Post::orderBy('created_at', 'desc')->get();
      // 連想配列 ['bladeファイルでの変数名（key）' => $実際の値(value)]
      return view('post/index', ['posts' => $posts]);
    }

    //削除
    public function delete($id) {
      $post = Post::find($id); //find:データ取得、1件だけ見つける
      $post->delete();
      return redirect('/post');
    }

    //編集
    public function edit($id) { //
      $post = Post::find($id);
      return view('post/edit', ['post' => $post]);
    }

    //編集した後に更新
    public function update(Request $request, $id) {
      $post = Post::find($id);
      $post->update([
        'title' => $request->title,
        'content' => $request->content
      ]);
      return redirect('/post');
    }
}