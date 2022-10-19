<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RoomR extends FormRequest
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
            'id_category' => 'required',
    		'code' => 'required',
            'maxPeople' => 'required',
    		'minPeople' => 'required',
            'price' => 'required',
    		'amountBathroom' => 'required',
            'amountBed' => 'required',
    		'decription' => 'required',
            
        ];
    }
    public function messages()
    {
        return [
            'id_category.required' => 'Bạn chưa nhập',
            'code.required' => 'Bạn chưa nhập',
            'maxPeople.required' => 'Bạn chưa nhập',
            'minPeople.required' => 'Bạn chưa nhập',
            'price.required' => 'Bạn chưa nhập',
            'amountBathroom.required' => 'Bạn chưa nhập',
            'amountBed.required' => 'Bạn chưa nhập',
            'decription.required' => 'Bạn chưa nhập',
        ];
    }
}
