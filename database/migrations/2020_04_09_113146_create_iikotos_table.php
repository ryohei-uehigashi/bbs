<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIikotosTable extends Migration
{
    /**
     * Run the migrations.
     * 
     * @return void
     */
    // up関数:コラムを定義
    public function up()
    {
        Schema::create('iikotos', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->string('iikoto');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    // down関数：テーブル削除の処理
    public function down()
    {
        Schema::dropIfExists('iikotos');
    }
}
