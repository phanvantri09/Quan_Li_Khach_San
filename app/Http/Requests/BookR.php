<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookR extends FormRequest
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
            'email' => 'required',
    		'numberPhone' => 'required',
            'name' => 'required',
    		'id_room' => 'required',
            'date_start' => 'required',
    		'date_end' => 'required',
            'amountPeople' => 'required',
            
        ];
    }
    public function messages()
    {
        return [
            'email.required' => 'Bạn chưa nhập',
            'numberPhone.required' => 'Bạn chưa nhập',
            'name.required' => 'Bạn chưa nhập',
            'id_room.required' => 'Bạn chưa nhập',
            'date_start.required' => 'Bạn chưa nhập',
            'date_end.required' => 'Bạn chưa nhập',
            'amountPeople.required' => 'Bạn chưa nhập',
        ];
    }
}
