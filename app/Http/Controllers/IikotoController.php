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

  public function iikoto_list(Request $request) {
      $iikotos = Iikoto::get();
      $validatedData = $request->validate([
        'title' => 'required | max:10',
        'datetime' => 'required',
        'note' => 'required | max:30',
      ]);
      return view('iikoto/list', ['iikotos' => $iikotos]);
    }

  //削除
  public function delete($id) {
    $iikoto = Iikoto::find($id);
    $iikoto->delete();
    return redirect('/iikoto/list',);
  }

  //編集
  public function edit($id) {
    $iikoto = Iikoto::find($id);
    return view('iikoto/edit', ['iikoto' => $iikoto]);
  }

  //更新
  public function update(Request $request, $id) {
    $iikoto = Iikoto::find($id);
    $iikoto->update([
      'date' => $request->date,
      'iikoto' =>$request->iikoto
    ]);
    return redirect('/iikoto/list');
  }
}