<?php
//モデル

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $fillable = [
      //protected : publicとprivateの間（継承元からは呼び出せる）
      //fillable:ユーザが入力する項目
        'title','time','note'
    ];
}