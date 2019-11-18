<?php

use Illuminate\Database\Seeder;
// use = require_onceのイメージ
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
class DiariesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    //入れるでサンプルでーだを作成
        $diaries = [
            [
                'title'=> '初めてのLaravel',
                'body'=>'難しいいな'
            ],
            [
                'title'=> '初めてのセブ',
                'body'=>'渋滞がばねー'
            ],
            [
                'title'=> '初めてのPC',
                'body'=>'ぼちぼち'
            ]
            ];

            //IDが一番若いユーザーを取得。
                $user = DB::table('users')->first();



    //配列をループで回して、テーブルにINSERTする
            foreach($diaries as $diary){
                DB::table('diaries')->insert([
                    'title'=> $diary['title'],
                    'body'=>$diary['body'],
                    'created_at'=>Carbon::now(),
                    'updated_at'=>Carbon::now(),
                    'user_id'=>$user->id,
        //Carbon::nowは現在時刻をくれる
    ]);

}

    }
}
