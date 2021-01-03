<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class SoalRequest extends FormRequest
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
            'pertanyaan' => 'required',
            'pila'=> 'required',
            'pilb'=> 'required',
            'pilc'=> 'required',
            // 'pild'=> 'required',
            // 'pile'=> 'required',
            'kunci'=> 'required',
        ];
    }
}
