<?php
//書き換えたら$php artisan migrate:refresh
//migrate:テーブル設計図

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTodoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      // todosというテーブルのコラムを設定
      Schema::create('todos'/* <--テーブル名 */, function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->dateTime('time');
            $table->string('note');
            $table->timestamps();
        });
    //$table->id();と$table->timestamps();の間に追加する
    //column（縦）の設定
    //row:横
    //unsignedBigInteger:数字のみ
    //dateTime:日時
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('todos'); //テーブル名
    }
}
