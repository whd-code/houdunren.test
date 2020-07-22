<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class packageRequest extends FormRequest
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
            'title'=>['required','min:3','max:15',Rule::unique('packages')->ignore(request()->package)]
        ];
    }
    // public function messages(){
    //     return [
    //         'name.min'=>'套餐名称不能少于三字符','name.max'=>'套餐名称不能多于十五个字符',
    //         'name.unique' =>'已经存在名称'
    //     ];
    // }
}
