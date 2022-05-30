<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required',
        ];
        return [
            'surname' => 'required',
        ];
        return [
            'phone' => 'required',
        ];
        return [
            'email' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'El nombre es obligatorio',
        ];
        return [
            'surname.required' => 'El surname es obligatorio',
        ];
        return [
            'phone.required' => 'El phone es obligatorio',
        ];
        return [
            'email.required' => 'El email es obligatorio',
        ];
    }
}