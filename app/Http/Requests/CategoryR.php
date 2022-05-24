<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryR extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|unique:category|unique:category',
        ];
    }
    public function messages()
    {
        return [
            'name.required' =>'Bạn chưa nhập tên',
            'name.unique' =>'Tên đã tồn tại',
        ];
    }
}
