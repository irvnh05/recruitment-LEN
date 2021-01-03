<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class PengalamanKerjaRequest extends FormRequest
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
            'Nama_Perusahaan' => 'required|max:255',
            'Tahun' => 'required',
            'Tugas_TJU' => 'required',
            'Gaji' => 'required',
            'Alasan_Berhenti' => 'required',
        ];
    }
}
