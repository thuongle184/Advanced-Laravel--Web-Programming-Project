<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerMessageRequest extends FormRequest
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
          'name'      =>  'required',
          'email'     =>  'required',
          'message'   =>  'required'
        ];
    }

    public function messages()
    {
        return [
          'name.required'     =>  'Your name is required',
          'email.required'    =>  'Your e-mail address is required',
          'message.required'  =>  'Your message is required'
        ];
    }
}
