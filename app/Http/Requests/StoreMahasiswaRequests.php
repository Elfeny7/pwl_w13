<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMahasiswaRequests extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules()
    {
        return [
            'Nim' => 'required|min:10',
            'Nama' => 'required',
            'Image' => 'required',
            'Jurusan' => 'required',
            'No_Handphone' => 'required|min:12',
            'Email' => 'required',
            'TanggalLahir' => 'required',
            'kelas_id' => 'required',
        ];
    }
}
