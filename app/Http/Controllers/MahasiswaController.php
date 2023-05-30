<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMahasiswaRequests;
use App\Http\Requests\UpdateMahasiswaRequest;
use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use App\Http\Resources\MahasiswaResource;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return MahasiswaResource::collection(Mahasiswa::all());
        return MahasiswaResource::collection(Mahasiswa::paginate(5));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMahasiswaRequests $request)
    {
        // return response()->json('hello');
        return new MahasiswaResource(Mahasiswa::create(
            [
                'Nim' => $request->Nim,
                'Nama' => $request->Nama,
                'Image' => $request->Image,
                'Jurusan' => $request->Jurusan,
                'No_Handphone' => $request->No_Handphone,
                'Email' => $request->Email,
                'TanggalLahir' => $request->TanggalLahir,
                'kelas_id' => $request->kelas_id
            ]
        ));
    }

    /**
     * Display the specified resource.
     */
    public function show(Mahasiswa $mahasiswa)
    {
        return new MahasiswaResource($mahasiswa);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMahasiswaRequest $request, Mahasiswa $mahasiswa)
    {
        $mahasiswa->update([
            'Nim' => $request->Nim,
            'Nama' => $request->Nama,
            'Image' => $request->Image,
            'Jurusan' => $request->Jurusan,
            'No_Handphone' => $request->No_Handphone,
            'Email' => $request->Email,
            'TanggalLahir' => $request->TanggalLahir,
            'kelas_id' => $request->kelas_id
        ]);
        return new MahasiswaResource($mahasiswa);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mahasiswa $mahasiswa)
    {
        $mahasiswa->delete();
        return response()->noContent();
    }
}
