<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

// ※Post：モデル名
class Post extends Model
{
    protected $fillable = [
        'user_id','title','content'
    ];
}