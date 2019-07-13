<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LibroForm extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'titulo'=>'required',
            'descripcion'=>'required',
            'archivo'=>'required|mimes:pdf|max:10000',
        ];
    }
}
