<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class InfoLainRequest extends FormRequest
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
              'Melamar_Melalui'=> 'required',
               'Diperkenalkan_Oleh'=> 'required',
               'Kegiatan_Lain'=> 'required',
               'Hobi'=> 'required',
        ];
    }
}
