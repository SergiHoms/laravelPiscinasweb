<?php

namespace App\Http\Requests\Admin\Request;

use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
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
    }

    public function messages()
    {
        return [
            'name.required' => 'El nombre es obligatorio',
        ];
        return [
            'surname.required' => 'El apellido es obligatorio',
        ];
    }
}
