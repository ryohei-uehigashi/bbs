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
    $validatedData = $request->validate([
      'date' => 'required',
      'iikoto' => 'required | max:15',
    ],
    [
      'date.required' => '「日付」は必須項目です',
      'iikoto.required' => '「いいこと」は必須項目です',
      'iikoto.max:15' => '１５文字以内で記入してください',
    ]);
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
    $validatedData = $request->validate([
      'date' => 'required',
      'iikoto' => 'required | max:15'
    ],
    [
      'date.required' => '「日付」は必須項目です',
      'iikoto.required' => '「いいこと」は必須項目です',
      'iikoto.max:15' => '１５文字以内で記入してください'
    ]);
    $iikoto->update([
      'date' => $request->date,
      'iikoto' =>$request->iikoto
    ]);
    return redirect('/iikoto/list');
  }
}