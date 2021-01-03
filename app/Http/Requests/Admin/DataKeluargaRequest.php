<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class DataKeluargaRequest extends FormRequest
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
            'Nama_Lengkap' => 'required|max:255',
            'TTL' => 'required',
            'Hubungan' => 'required',
            'PekerjaanSekolah' => 'required',
        ];
    }
}
