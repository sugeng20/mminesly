<?php

namespace App\Http\Controllers;

use App\Models\Forum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SiswaController extends Controller
{
    public function index()
    {
        return view('pages.siswa.index');
    }

    public function ForumDiskusiPesan(Request $request)
    {
        $subject = '';
        if($request->subject) {
            $subject = $request->subject;
        }
        return view('pages.siswa.forum.pesan', compact('subject'));
    }

    public function ForumDiskusi()
    {
        $messages = Forum::with('user')->get();
        return view('pages.siswa.forum.index', compact('messages'));
    }

    public function postDiskusi(Request $request)
    {
        $request->validate([
            'subject' => 'required',
            'pesan' => 'required'
        ]);

        $data = $request->all();
        $data['id_user'] = Auth::user()->id;
        Forum::create($data);
        return redirect('forum-diskusi');
    }

    public function soal()
    {
        return view('pages.siswa.evaluasi.soal');
    }
}
