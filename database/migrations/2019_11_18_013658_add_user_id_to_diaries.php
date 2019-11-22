<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUserIdToDiaries extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('diaries', function (Blueprint $table) {
                $table->integer('user_id')->unsigned();

                $table->foreign('user_id')->references('id')->on('users');
            //１６−１９行目、diariesテーブルにuser_idを付け加える為に記入し、ターミナルでphp artisan migrate:freshを書く事で、56Diaryのカラムが一式削除されて、user_idが追加される。
            //diariesテーブルのuser_idに入るあたいは、必ずesrsテーブルのどこかのレコードのisと一致する
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('diaries', function (Blueprint $table) {
            //
        });
    }
}
