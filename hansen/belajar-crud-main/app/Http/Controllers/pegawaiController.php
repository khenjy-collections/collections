<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;

class pegawaiController extends Controller
{
    public function index() {
        $data = Pegawai::all();
        return view('home', compact('data'));
    }

    public function regist(Request $request) {
        Pegawai::create($request->all());
        return redirect('daftar')->with('success', 'Registrasi Berhasil');
    }

    public function editData($id) {
        $data =  Pegawai::find($id);
        return view('edit', compact('data'));
    }

    public function updateData(Request $request , $id) {
        $data = Pegawai::find($id);
        $data->update($request->all());

        return redirect('/')->with('success' , 'Update Data Berhasil');
    }

    public function delete($id) {
        $data = Pegawai::find($id);
        $data->delete();

        return redirect('/')->with('success' , 'Hapus Data Berhasil');
    }
}
