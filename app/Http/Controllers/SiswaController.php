<?php

namespace App\Http\Controllers;

use App\Exports\EvaluatioExport;
use App\Models\Answer;
use App\Models\Evaluation;
use App\Models\Forum;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use PDF;

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
        $evaluation = Evaluation::where('user_id', Auth::user()->id)->orderBy('score', 'DESC')->first();
        $evaluations = Evaluation::with('user')->get();
        $cek = Evaluation::where('user_id', Auth::user()->id)->count();
        return view('pages.siswa.evaluasi.index', compact('evaluation', 'cek', 'evaluations'));
    }

    public function soal()
    {
        $questions = Question::inRandomOrder()->get();
        return view('pages.siswa.evaluasi.soal', compact('questions'));
    }

    public function excel()
    {
        return Excel::download(new EvaluatioExport, 'evaluasi.xlsx');
    }

    public function pdf()
    {
        $evaluations = Evaluation::with('user')->get();
        $pdf = PDF::loadview('pages.siswa.evaluasi.pdf', compact('evaluations'));
	    return $pdf->download('evaluasi.pdf'); 
    }

    public function review($id)
    {
        $answers = Answer::with('question')->where('evaluation_id', $id)->get();

        return view('pages.siswa.evaluasi.review', compact('answers'));
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
