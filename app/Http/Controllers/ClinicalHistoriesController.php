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
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

/**
 * Class ClinicalHistoriesController
 * @package App\Http\Controllers
 */
class ClinicalHistoriesController extends Controller
{
    /**
     * @param string|null $filter
     * @return Application|Factory|View
     */
    public function index(?string $filter = null)
    {
        if ($filter == null) {
            $clinicalHistories = ClinicalHistory::all();
        } else {
            $clinicalHistories = ClinicalHistory::whereHas('patient', function ($query) use ($filter) {
                return $query->where('document', '=', $filter);
            })->get();
        }
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
     * @return Application|JsonResponse|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        print_r("ERRROR");
        $clinicalHistory = ClinicalHistory::create($request->toArray());
        $chRecord = ChRecord::create(array_merge($request->toArray(), ['clinical_history_id' => $clinicalHistory->id]));
        $chPsychotherapeuticAssessment = ChPsychotherapeuticAssessment::create(
            array_merge($request->toArray(), ['clinical_history_id' => $clinicalHistory->id])
        );
        return response()->json($clinicalHistory);
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
        $chRecords = $clinicalHistory->records;
        $chPsychotherapeuticalAssesments = $clinicalHistory->psychotherapeuticalAssesments;
        $chEvolutions = $clinicalHistory->evolutions;
        $pdf = PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true])
            ->loadView('clinical_histories.show', [
                "clinicalHistory" => $clinicalHistory,
                "date" => Carbon::now()->format("Y m d"),
                "chRecords" => $chRecords,
                "chPsychotherapeuticalAssesments" => $chPsychotherapeuticalAssesments,
                "chEvolutions" => $chEvolutions
            ]);
        return $pdf->stream();
    }
}
