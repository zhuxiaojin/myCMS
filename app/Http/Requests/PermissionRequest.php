<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PermissionRequest extends FormRequest
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
                    'name' => 'required|string|min:4|max:20|unique:permissions,name',
                    'description' => 'required|string|min:2|max:20',
                    'group' => 'nullable|string|min:2|max:20'
                ];
                break;
            case 'PUT':
            case 'PATCH':
                return [
                    'name' => 'required|string|min:4|max:20|unique:permissions,name,' . \Request::route('permission')->id,
                    'description' => 'required|string|min:2|max:20',
                    'group' => 'nullable|string|min:2|max:20'
                ];
                break;
        }
    }

    public function messages() {
        return [
            'name.required' => '名称不能为空',
            'name.min' => '名称最少4个字符',
            'name.max' => '名称最多20个字符',
            'description.required' => '描述不能为空',
            'description.min' => '描述最少2个字符',
            'description.max' => '描述最多4个字符',
        ];
    }
}
