<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        return view('pages.siswa.selamat-datang');
    }

    public function kompetensiDasar()
    {
        return view('pages.siswa.kompetensi-dasar');
    }

    public function indikator()
    {
        return view('pages.siswa.indikator');
    }

    public function tujuanPembelajaran()
    {
        return view('pages.siswa.tujuan-pembelajaran');
    }

    public function petunjukPenggunaan()
    {
        return view('pages.siswa.petunjuk-penggunaan');
    }

    public function petaKonsep()
    {
        return view('pages.siswa.peta-konsep');
    }

    public function materiPembahasan()
    {
        return view('pages.siswa.materi-pembahasan');
    }
}
