<?php

namespace App\Http\Controllers;

use App\Models\ChEvolution;
use Barryvdh\DomPDF\Facade as PDF;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EvolutionsController extends Controller
{
    public function store(Request $request)
    {
        $chEvolution = ChEvolution::create(array_merge($request->toArray(), ['evolution_date' => Carbon::now()]));
        // Generate PDF
        /*$pdf = PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true])
            ->loadView('clinical_histories.show', [
                "clinicalHistory" => $chEvolution->clinicalHistory,
                "date" => Carbon::now()->format("Y m d"),
                "chRecords" => $chEvolution->clinicalHistory->records,
                "chPsychotherapeuticalAssesments" => $chEvolution->clinicalHistory->psychotherapeuticalAssesments,
                "chEvolutions" => $chEvolution->clinicalHistory->evolutions
            ]);
        $id = $chEvolution->clinicalHistory->id;
        Storage::disk('public')->put("clinical_histories/$id.pdf", $pdf->output());
*/
        //get the base-64 from data

        return redirect('/generic-signature/evolution/'.$chEvolution->id);
    }
}
