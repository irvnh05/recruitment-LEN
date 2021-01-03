<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class HarapanRequest extends FormRequest
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
            'Harapan_Karir' => 'required|max:255',
            'Permintaan_Gaji' => 'required',
            'Minat_Posisi_Jika_Ditolak' => 'required',
        ];
    }
}
