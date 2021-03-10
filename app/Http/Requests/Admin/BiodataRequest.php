<?php

namespace App\Http\Requests\Admin;

use Doctrine\Inflector\Rules\English\Rules;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use App\Biodata;
use App\User;
use Illuminate\Http\Request;
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
    public function rules($id = '')
    {
        $user = Auth::user();
        $item = Biodata::with(['user'])->where('users_id', '=', Auth::user()->id)->first();
  
        return [
         
                // 'Username'=>  'required',
                // 'Nama_Lengkap'=> 'required',
                // 'Tanggal_Lahir'=> 'required',
                // 'Jenis_Kelamin'=> 'required',
                // 'Status_Perkawinan'=> 'required',
                // 'Alamat_KTP'=> 'required'
                // 'No_KTP' => [
                //     'required', 'min:16', 'max:16',
                //     Rule::unique('biodatas', 'No_KTP')->ignore(Auth::user()->id)
                // ],
                // 'No_KTP' => [
                //     'required',
                //     'No_KTP',
                //     'unique:biodatas,No_KTP,'.$this->route('datapribadi-redirect') ?? 0
                // ],     
                // 'No_KTP' => ['required', Rule::unique('biodatas')->ignore(Auth::user()->id), 'min:4'],
                // 'No_KTP'=> 'required|min:16|max:16|unique:biodatas', 
                // 'No_KTP' => 'required|No_KTP|unique:biodatas,No_KTP,'.$user->id,
                'No_KTP' => [
                    'required',
                    Rule::unique('biodatas')->ignore($item->id),
                ],
                // 'No_Hp'=> 'required|min:10|max:14|',
                // // 'Alamat_Email'=> 'required|email|unique:ducks',
                // 'Tinggi_Badan'=> 'required',
                // 'Berat_Badan'=> 'required',
                // 'Keadaan_Saat_Isi'=> 'required',
                // 'Cek_Kes_Terakhir'=> 'required',
                // 'Nama_Kel_Dekat'=> 'required',
                // 'No_Hp_Kel_Dekat' => 'required|min:10|max:14|',
            ];
        }
    }