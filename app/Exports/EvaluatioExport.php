<?php

namespace App\Exports;

use App\Models\Evaluation;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class EvaluatioExport implements FromView
{
    /**
     * @return \Illuminate\Support\Collection
     */
    
    public function view(): View
    {
        $evaluations = Evaluation::with('user')->get();
        return view('pages.siswa.evaluasi.excel', compact('evaluations'));
    }
}
