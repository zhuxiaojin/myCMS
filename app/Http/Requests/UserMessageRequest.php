<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserMessageRequest extends FormRequest
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
        switch (Request::method()) {
            //创建一个用户
            case 'POST':
                return [
                    'email' => 'bail|required|email|unique:users',
                    'password' => 'bail|required|min:5|max:20|confirmed',
                    'name' => 'bail|required|string|min:2|max:20',
                    'captcha' => 'required|captcha',

                ];
                break;
            //更新一个用户
            case 'PUT':
                return [
                    'email' => 'sometimes|email|unique:users,email,' . Request::route('user')->id,
                    'duty' => 'nullable|string|min:2|max:20',
                    'phone' => 'nullable|phone:CN,mobile|unique:users,mobile,' . Request::route('user')->id,
                    'avatar' => 'sometimes|dimensions:min_width=100,min_height=100,max_width=700,max_height=400',
                    'role' => 'nullable|exists:roles,id'
                ];
            case 'PATCH':
                break;
        }

    }

    public function messages() {
        return [
            'email.required' => '请填写邮箱',
            'email.unique' => '该邮箱已经被注册',
            'name.min' => '姓名至少5个字符',
            'name.max' => '姓名最多20个字符',
            'phone.phone' => '手机格式错误',
            'phone.unique' => '手机号已被注册',
            'name.required' => '姓名不能为空',
            'captcha.required' => '请输入验证码',
            'captcha.captcha' => '验证码错误',
            'avatar.dimensions' => '头像尺寸错误(700*400)',
            'role.exist' => '该角色不存在'
        ];
    }
}
