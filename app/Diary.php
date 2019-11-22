<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diary extends Model
{
    //日記テーブルとユーザーテーブルの　多対多　に接続設定
    public function likes()
    {
        //diariesテーブルとusersテーブルは、likesテーブルを介して多対多の関係である
    return $this ->belongsToMany('App\User','likes')->withTimestamps();
    }
}
