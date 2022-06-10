<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Evaluation;
use App\Models\Forum;
use App\Models\Question;
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
        return redirect('materi');
    }

    public function evaluasi()
    {
        $evaluation = Evaluation::where('user_id', Auth::user()->id)->first();
        $cek = Evaluation::where('user_id', Auth::user()->id)->count();
        return view('pages.siswa.evaluasi.index', compact('evaluation', 'cek'));
    }

    public function soal()
    {
        $questions = Question::all();
        return view('pages.siswa.evaluasi.soal', compact('questions'));
    }

    public function postSoal(Request $request)
    {
        $questions = $request->question;
        $choices = $request->choice;

        $evaluation = Evaluation::create(['user_id' => Auth::user()->id]);
        $score = 0;
        for($i = 1; $i <= 20; $i++) {
            Answer::create([
                'evaluation_id' => $evaluation->id,
                'question_id' => $questions[$i],
                'answer' => $choices[$i]
            ]);

            $check = Question::where('key', $choices[$i])->where('id', $questions[$i])->count();
            if($check > 0) {
                $score++;
            }
        }
        $evaluation->update(['score' => $score * 5]);

        return redirect('materi');
    }
}
