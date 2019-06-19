<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\siswa2;

class Siswa2Controller extends Controller
{
    public function index()
    {
        // mengambil data siswa
        $siswa = siswa2::all();

        // mengirim data siswa ke view siswa
        return view('siswa2/index', ['siswa' => $siswa]);
    }
}
