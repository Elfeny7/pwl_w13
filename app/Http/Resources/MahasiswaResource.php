<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MahasiswaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray($request)
    {
        return [
            'Nim' => $this->Nim,
            'Nama' => $this->Nama,
            'Image' => $this->Image,
            'Jurusan' => strtoupper($this->Jurusan),
            'No_Handphone' => $this->No_Handphone,
            'Email' => $this->Email,
            'TanggalLahir' => $this->TanggalLahir,
            'kelas_id' => $this->kelas_id
        ];
    }
}
