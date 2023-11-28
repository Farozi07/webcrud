<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MatakuliahController extends Controller
{
    public function __construct() {
        $this->middleware('coba')->only('daftarMatakuliah');
        // $this->middleware('coba')->only('daftarMatakuliah','tabelMatakuliah');
        // $this->middleware('coba')->except('tabelMatakuliah');
    }
    public function daftarMatakuliah(){
        return 'Form Penambahan Matakuliah';
    }
    public function tabelMatakuliah(){
        return 'Tabel data Matakuliah';
    }
    public function DetailMatakuliah(){
        return 'Halaman Detail Matakuliah';
    }
}
