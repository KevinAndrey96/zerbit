<?php

namespace App\Http\Controllers;

use App\Models\ChPsychotherapeuticAssessment;
use App\Models\ChRecord;
use App\Models\ClinicalHistory;
use App\Models\Patient;
use App\Models\PhysicalTherapy;
use App\Models\User;
use Barryvdh\DomPDF\Facade as PDF;
use Carbon\Carbon;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

/**
 * Class ClinicalHistoriesController
 * @package App\Http\Controllers
 */
class ClinicalHistoriesController extends Controller
{
    public function index()
    {
        $clinicalHistories = ClinicalHistory::all();
        return view("clinical_histories.index", ['clinicalHistories' => $clinicalHistories]);
    }
    /**
     * @return Application|Factory|View
     */
    public function create()
    {
        $patients = Patient::all();
        $therapists = User::all();
        return view("clinical_histories.create", ['patients' => $patients, 'therapists' => $therapists]);
    }

    /**
     * @param Request $request
     * @return Request
     */
    public function store(Request $request)
    {
        $clinicalHistory = ClinicalHistory::create($request->toArray());
        $chRecord = ChRecord::create(array_merge($request->toArray(), ['clinical_history_id' => $clinicalHistory->id]));
        $chPsychotherapeuticAssessment = ChPsychotherapeuticAssessment::create(
            array_merge($request->toArray(), ['clinical_history_id' => $clinicalHistory->id])
        );
        return $chPsychotherapeuticAssessment;
    }

    /**
     * Display the specified resource.
     *
     * @param ClinicalHistory $clinicalHistory
     * @return Response
     */
    public function show(ClinicalHistory $clinicalHistory)
    {
        $clinicalHistory = ClinicalHistory::find($clinicalHistory->id);
        $pdf = PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true])
            ->loadView('clinical_histories.show', [
                "clinicalHistory" => $clinicalHistory,
                "date" => Carbon::now()->format("Y m d")
            ]);
        return $pdf->stream();
    }
}
