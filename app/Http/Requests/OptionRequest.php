<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OptionRequest extends FormRequest
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
                    'name' => 'required|min:2|max:20|unique:options,name',
                    'key' => 'required|min:2|max:20|unique:options,key',
                    'value' => 'required|min:2|max:1000',
                ];
                break;
            case 'PUT':
            case 'PATCH':
            return [
                'name' => 'required|min:2|max:20|unique:options,name,'.\Request::route('option')->id,
                'key' => 'required|min:2|max:20|unique:options,key,'.\Request::route('option')->id,
                'value' => 'required|min:2|max:1000',
            ];
                break;
        }
    }

    public function messages() {
        return [
            'name.required' => '名称不能为空',
            'key.required' => ':attribute 不能为空',
            'key.min' => ':attribute 最少1个字符',
            'key.max' => ':attribute 最多20个字符',
            'name.unique' => '名称已经存在',
            'key.unique' => ':attribute 已经存在',
        ];
    }
}
