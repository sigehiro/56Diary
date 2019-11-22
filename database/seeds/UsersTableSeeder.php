<?php

use Illuminate\Database\Seeder;
//追加
use Carbon\carbon;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            //カラム名=>　値
            'name'=>'test',
            'email'=>'test@example.com',
            'password'=>bcrypt('123456'),
            'created_at'=>Carbon::now(),
            'Updated_at'=>Carbon::now(),

        ]);
        //
    }
}
