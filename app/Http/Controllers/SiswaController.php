<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        return view('pages.siswa.index');
    }

    public function ForumDiskusi()
    {
        return view('pages.siswa.forum.index');
    }
}
