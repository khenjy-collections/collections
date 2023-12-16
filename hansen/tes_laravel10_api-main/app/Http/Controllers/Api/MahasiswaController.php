<?php

namespace App\Http\Controllers\Api;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Resources\MahasiswaResource;
use Illuminate\Support\Facades\Validator;

class MahasiswaController extends Controller
{
    public function index() 
    {
        $mahasiswa = Mahasiswa::latest()->paginate(5);

        return new MahasiswaResource(true , 'Mahasiswa berhasil ditampilkan!', $mahasiswa);
    }

    public function store(Request $request) 
    {
        $validator = Validator::make($request->all(), [
            'image' => 'required|image|mimes:png,jpg,jpeg,gif,svg|max:2048',
            'name' => 'required',
            'email' => 'required|email'
        ]);

        if($validator->fails()) {
            return response()->json($validator->errors(), 422);
        } 

        $image = $request->image;
        $image->storeAs('public/mahasiswas', $image->hashName());

        $mahasiswa = Mahasiswa::create([
            'image' => $image->hashName(),
            'name' => $request->name,
            'email' => $request->email
        ]);

        return new MahasiswaResource(true , 'Mahasiswa berhasil ditambahkan' , $mahasiswa);
    }

    public function show($id) 
    {
        $mahasiswa = Mahasiswa::find($id);

        return new MahasiswaResource(true , 'Mahasiswa yang ditampilkan' , $mahasiswa);
    }

    public function destroy($id) 
    {
        $mahasiswa = Mahasiswa::find($id);

        Storage::delete('public/mahasiswas/' .basename($mahasiswa->image));

        $mahasiswa->delete();

        return new MahasiswaResource(true , 'Mahasiswa Berhasil di hapus!', null);
    }
}
