<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiswaController extends Controller
{
    public function index()
    {
       $siswa = DB::table('siswa')->get();
        return view('siswa/siswa', ['siswa' => $siswa]);
    }    
    public function tambah()
    {
        return view('siswa/siswatambah');
    }
    public function store(Request $request)
    {
        DB::table('siswa')->insert([
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'jenkel' => $request->jenkel,
            'umur' => $request->umur,
            'alamat' => $request->alamat
        ]);
        return redirect('/siswa');
    }
    public function ubah($id)
    {
        // mengambil data siswa berdasarkan id yang dipilih
        $siswa = DB::table('siswa')->where('id', $id)->get();
        // passing data siswa yang didapat ke view editsiswa.blade.php
        return view('siswa/siswaubah', ['siswa' => $siswa]);
    } // update data siswa
    public function update(Request $request)
    {
        // update data siswa
        DB::table('siswa')->where('id', $request->id)->update([
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'jenkel' => $request->jenkel,
            'umur' => $request->umur,
            'alamat' => $request->alamat
        ]);
        // alihkan halaman ke halaman siswa
        return redirect('/siswa');
    } // method untuk hapus data siswa
    public function hapus($id)
    {
        // menghapus data siswa berdasarkan id yang dipilih
        DB::table('siswa')->where('id', $id)->delete();

        // alihkan halaman ke halaman siswa
        return redirect('/siswa');
    }
}
