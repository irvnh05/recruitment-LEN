<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class LowonganRequest extends FormRequest
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
            'posisi' => 'required|max:255',
            'gaji' => 'required|integer',
            'deksripsi' => 'required',
            'kriteria_penting' => 'required',
            'tgl_awal' => 'required|date',
            'tgl_akhir' => 'required|date',
            'programs_id' => 'required|exists:programs,id',
        ];
    }
}
