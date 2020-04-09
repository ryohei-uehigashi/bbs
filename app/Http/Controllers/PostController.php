<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Auth;

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

    public function index() {
      //Postテーブルのデータ全部取得
      $posts = Post::get();
      // 連想配列 ['bladeファイルでの変数名（key）' => $実際の値(value)]
      return view('post/index', ['posts' => $posts]);
    }
}