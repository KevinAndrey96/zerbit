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
        $base64_str = substr($chEvolution->signature, strpos($chEvolution->signature, ",")+1);

        //decode base64 string
        $image = base64_decode($base64_str);
        Storage::disk('public')->put('signatures/'.$chEvolution->id.'.png', $image);
        $storagePath = Storage::disk('public')->getDriver()->getAdapter()->getPathPrefix();
        $chEvolution->signature = $storagePath;
        $chEvolution->save();

        return redirect('/generic-signature/evolution/'.$chEvolution->id);
    }
}
