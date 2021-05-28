<?php

namespace App\Http\Controllers;

use App\Models\LabSample;
use App\Models\Patient;
use App\Models\PhysicalTherapy;
use App\Models\User;
use Barryvdh\DomPDF\Facade as PDF;
use Carbon\Carbon;
use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class PhysicalTherapyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $physicalTherapies = PhysicalTherapy::with(['patient','therapist'])->get();
        return view("physical_therapies.index",["physicalTherapies" => $physicalTherapies]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
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
        return view("physical_therapies.create", ['patients' => json_encode($patients2), 'therapists' => $therapists]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $physicalTherapy = PhysicalTherapy::create($request->toArray());
        return response()->json($physicalTherapy);
    }

    /**
     * Display the specified resource.
     *
     * @param PhysicalTherapy $physicalTherapy
     * @return Response
     */
    public function show(PhysicalTherapy $physicalTherapy)
    {
        $physicalTherapy = PhysicalTherapy::find($physicalTherapy->id);
        $pdf = PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true])
            ->loadView('physical_therapies.show', [
                "physicalTherapy" => $physicalTherapy,
                "date" => Carbon::now()->format("Y m d")
            ]);
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
    public function destroy(PhysicalTherapy $physicalTherapy): RedirectResponse
    {
        try {
            $physicalTherapy->delete();
        } catch (Exception $e) { }
        return response()->redirectTo('/physical-therapies');
    }
}
