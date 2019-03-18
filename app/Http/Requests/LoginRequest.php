<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
            'email' => 'bail|required|email',
            'password' => 'bail|required|min:5|max:20',
            'captcha' => 'required|captcha',
        ];
    }

    public function messages() {
        return [
            'captcha.required' => '请输入验证码',
            'captcha.captcha' => '验证码错误'
        ];
    }

}
