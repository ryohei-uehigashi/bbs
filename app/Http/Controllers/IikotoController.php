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
    return redirect('/iikoto/list');
  }

  public function iikoto_list() {
      $iikotos = Iikoto::get();
      return view('iikoto/list', ['iikotos' => $iikotos]);
    }

  //削除
  public function delete($id) {
    $iikoto = Iikoto::find($id);
    return redirect('/iikoto/list',);
  }

  //更新
  public function update(Request $request, $id) {
    $iikoto = Iikoto::find($id);
    
  }
}