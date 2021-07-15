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
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

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
            $clinicalHistories = ClinicalHistory::orderBy('id', 'DESC')
                ->limit(50)
                ->get();
        } else {
            $clinicalHistories = ClinicalHistory::whereHas('patient', function ($query) use ($filter) {
                return $query->where('document', '=', $filter);
            })
                ->limit(50)
                ->get();
        }
        return view("clinical_histories.index", ['clinicalHistories' => $clinicalHistories]);
    }
    /**
     * @return Application|Factory|View
     */
    public function create()
    {
        if (Auth::user()->role == 'terapeuta') {
            $therapists = User::where('id', Auth::user()->id)->get();
        } elseif (Auth::user()->role == 'administrador') {
            $therapists = User::where('id', Auth::user()->id)->get();
        } else {
            $therapists = User::where('id', Auth::user()->id)->get();
        }
        //[{value: 1, text: 'Item 1'}, {value: 2, text: 'Item 2'}]
        $therapists2 = Array();
        foreach ($therapists as $therapist) {
            $therapist2 = [
                "value" => $therapist->id,
                "text" => $therapist->name
            ];
            array_push($therapists2, $therapist2);
        }
        $patients = Patient::all();
        $patients2 = Array();
        foreach ($patients as $patient) {
            $patient2 = [
                "value" => $patient->id,
                "text" => $patient->document.' '.
                    $patient->first_name.' '.
                    $patient->second_name.' '.
                    $patient->first_surname.' '.
                    $patient->second_surname
            ];
            array_push($patients2, $patient2);
        }

        return view("clinical_histories.create", ['patients' => json_encode($patients2), 'therapists' => json_encode($therapists2)]);
    }

    /**
     * @param Request $request
     * @return Application|JsonResponse|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $clinicalHistory = ClinicalHistory::create(
            $request->only([
                      'patient_id',
                      'professional_id',
                      'medical_diagnostic',
                      'physiotherapist_diagnostic',
                      'objective',
                      'sessions_number',
                      'deductible_payment',
                      'payment_value',
                  ]));
        $chRecord = ChRecord::create(array_merge($request->toArray(), ['clinical_history_id' => $clinicalHistory->id]));
        $chPsychotherapeuticAssessment = ChPsychotherapeuticAssessment::create(
            array_merge($request->toArray(), ['clinical_history_id' => $clinicalHistory->id])
        );

        // Generate PDF
        $pdf = PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true])
            ->loadView('clinical_histories.show', [
                "clinicalHistory" => $clinicalHistory,
                "date" => Carbon::now()->format("Y m d"),
                "chRecords" => $clinicalHistory->records,
                "chPsychotherapeuticalAssesments" => $clinicalHistory->psychotherapeuticalAssesments,
                "chEvolutions" => $clinicalHistory->evolutions
            ]);
        $id = $clinicalHistory->id;
        Storage::disk('public')->put("clinical_histories/$id.pdf", $pdf->output());

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
        $id = $clinicalHistory->id;
        return Storage::disk('public')->download("clinical_histories/$id.pdf", "$id.pdf");
        /*$clinicalHistories = ClinicalHistory::all();
        foreach ($clinicalHistories as $clinicalHistory) {
            if ($clinicalHistory->id < 43) {
                continue;
            }
            $pdf = PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true])
                ->loadView('clinical_histories.show', [
                    "clinicalHistory" => $clinicalHistory,
                    "date" => Carbon::now()->format("Y m d"),
                    "chRecords" => $clinicalHistory->records,
                    "chPsychotherapeuticalAssesments" => $clinicalHistory->psychotherapeuticalAssesments,
                    "chEvolutions" => $clinicalHistory->evolutions
                ]);
            $id = $clinicalHistory->id;
            Storage::disk('public')->put("clinical_histories/$id.pdf", $pdf->output());
        }
        return "Ok";*/
    }
}
