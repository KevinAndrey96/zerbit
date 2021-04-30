<?php

namespace App\Http\Controllers;

use App\Models\LabSample;
use App\Models\Patient;
use Barryvdh\DomPDF\Facade as PDF;
use Carbon\Carbon;
use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Throwable;

class LabSampleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param string|null $filter
     * @return Application|Factory|View|Response
     */
    public function index(?string $filter = null)
    {
        if ($filter == null) {
            $labSamples = LabSample::with('patient')->get();
        } else {
            $labSamples = LabSample::with('patient')->whereHas('patient', function ($query) use ($filter) {
                return $query->where('document', '=', $filter);
            })->get();
        }
        return view("lab_samples.index",["labSamples" => $labSamples]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $patients = Patient::all();
        $patients2 = Array();
        foreach ($patients as $patient) {
            $patient2 = [
                "value" => $patient->id,
                "text" => $patient->document . ' ' .
                    $patient->first_name . ' ' .
                    $patient->second_name . ' ' .
                    $patient->first_surname . ' ' .
                    $patient->second_surname
            ];
            array_push($patients2, $patient2);
        }
        return view("lab_samples.create", ['patients' => json_encode($patients2)]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request)
    {
        $labSample = LabSample::create($request->toArray());
        return response()->json($labSample);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function externalLab(Request $request)
    {
        $sampleTypes = "";
        foreach ($request->sample_type as $sampleType) {
            $sampleTypes .= $sampleType.",";
        }
        $request->merge(
            [
                'sample_type' => $sampleTypes,
            ]
        );

        $labSample = LabSample::create($request->toArray());
        $patient = $labSample->patient;
        try {
            if ($patient === null) {
                return response()->redirectTo('/clients/login');

            } else {
                $labSamples = $patient->labSamples;
                return view("clients.signature", ["signatureType" => "labExternal", "id" => $labSample->id]);
                //return view("clients.documents", ["session" => true, "patient" => $patient, "labSamples" => $labSamples]);
            }
        } catch (Throwable $th) {
            return response()->redirectTo('/clients/login');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param LabSample $labSample
     * @return Response
     */
    public function show(LabSample $labSample)
    {
        //return view('lab_samples.show');
        $customPaper = array(0,0,600,600);
        $labSample = LabSample::find($labSample->id);
        $pdf = PDF::setPaper($customPaper)->setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true])
            ->loadView('lab_samples.show', [
                "labSample" => $labSample,
                "date" => Carbon::now()->format("Y m d")
            ]);
        //return PDF::->loadView('reports.invoiceSell')->stream();
        return $pdf->stream();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param LabSample $labSample
     * @return RedirectResponse
     */
    public function destroy(LabSample $labSample): RedirectResponse
    {
        try {
            $labSample->delete();
        } catch (Exception $e) { }
        return response()->redirectTo('/lab-samples');
    }
}
