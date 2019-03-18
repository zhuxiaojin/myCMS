<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RoleRequest extends FormRequest
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
        switch (\Request::method()) {
            case 'POST':
                return [
                    'name' => 'required|string|min:2|max:30|unique:roles,name',
                    'description' => 'required|string|min:2|max:30'
                ];
                break;
            case 'PUT':
            case 'PATCH':
                return [
                    'name' => 'required|string|min:2|max:30|unique:roles,name,' . \Request::route('role')->id,
                    'description' => 'required|string|min:2|max:30'
                ];
                break;
        }
    }

    public function messages() {
        return [
            'name.required'=>'调用名称不能为空',
            'name.min'=>'调用名称最少2个字符',
            'name.max'=>'调用名称最多30个字符',
            'name.unique'=>'调用名称已经存在',
            'description.require'=>'名称不能为空',
            'description.min'=>'名称最少2个字符',
            'description.max'=>'名称最多30个字符',
        ];
    }
}
