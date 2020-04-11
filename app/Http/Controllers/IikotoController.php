<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Iikoto;

class IikotoController extends Controller
{
  // 
  public function index(){
    return view('iikoto/input');
  }

  // モデル作成
  // ['(key)' => (value)]
  public function iikoto(Request $request) {
    Iikoto::create([
      'date' => $request->date,
      'iikoto' => $request->iikoto
    ]);
  }

  public function iikoto_list() {
      $iikotos = Iikoto::get();
      return view('iikoto/list', ['iikotos' => $iikotos]);
    }
}