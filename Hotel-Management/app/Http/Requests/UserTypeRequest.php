<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class userTypeRequest extends FormRequest
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
            'label'             =>'required|unique:user_types,label',
            
        ];
    }

    public function messages (){
        return[
            'label.required'              =>'Enter user name type !',
            'label.unique'                =>'This name exists !',
        ];
    }
}
