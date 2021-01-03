<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class BiodataRequest extends FormRequest
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
                // 'Username'=>  'required',
                // 'Nama_Lengkap'=> 'required',
                // 'Tanggal_Lahir'=> 'required',
                // 'Jenis_Kelamin'=> 'required',
                // 'Status_Perkawinan'=> 'required',
                // 'Alamat_KTP'=> 'required',
                // 'No_KTP'=> 'required', 
                // 'No_Hp'=> 'required',
                // // 'Alamat_Email'=> 'required',
                // 'Tinggi_Badan'=> 'required',
                // 'Berat_Badan'=> 'required',
                // 'Keadaan_Saat_Isi'=> 'required',
                // 'Cek_Kes_Terakhir'=> 'required',
                // 'Nama_Kel_Dekat'=> 'required',
                // 'No_Hp_Kel_Dekat' => 'required',
        ];
    }
}
