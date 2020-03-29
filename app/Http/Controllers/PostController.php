<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Auth;

class PostController extends Controller
{
    public function create() {
        return view('post/create');
    }

    public function store(Request $request) {
      Post::create([
        'user_id' => Auth::id(),
        'title' => $request->title,
        'content' => $request->content
      ]);
      return redirect('/post/create');
    }
}