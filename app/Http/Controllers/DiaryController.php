<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Diaryモデルを使用する宣言
use App\Diary;
//CreateDiaryを愛用する宣言
use App\Http\Requests\CreateDiary;


class DiaryController extends Controller
{


    //一覧画面を表示する
public function index(){
    //diariesテーブルのデータを全権取得
    //取得した結果を画面で確認
    $diaries = Diary::all();
    // dd($diaries);
    //dd():var_dump と die が同時に実行される
    //views/diaries/index.blade.phpを表示
    //フォルダ名、ファイル名(の以下blade.phpは除く)
    return view('diaries.index',[
        //連想配列 キー=>値
        'diaries' => $diaries
    ]);
    }
    //日記の作成画面を表示する
    public function create(){
        return view('diaries.create');
    }
    //新しい日記を保存する画面
    public function store(CreateDiary $request){
            //Diariyモデルのインスタンスを作成
                $diary = new Diary();

            //Diaryモデルを使って、DBに日記を保存
            //$diary->カラム名(DB)＝ カラムに設定したい値(create.blade.phpのカラム)
            $diary->title = $request-> title;
            $diary->body = $request-> body;

            //DBに保存実行
            $diary->save();

            //一覧ページにリダイレクト
            return redirect()->route('diary.index');
    }
            //日記を削除するためのメソッド
            public function destroy(int $id)
            {
                // dd($id);
                $diary = Diary::find($id);
                $diary->delete();
                return redirect()->route('diary.index');
            }
}