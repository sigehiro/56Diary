<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateDiary extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //'name属性' =>'してほしい入力チェック' 追加制限を入れる場合は’|’でつなげていく
            'title' =>'required|max:30',
            'body' =>'required'
        ];
    }
}
