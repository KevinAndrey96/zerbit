<?php

namespace App\Http\Controllers;

use App\Models\LabSample;
use App\Models\Patient;
use App\Models\PhysicalTherapy;
use App\Models\User;
use Barryvdh\DomPDF\Facade as PDF;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PhysicalTherapyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|Response
     */
    public function index()
    {
        $physicalTherapies = PhysicalTherapy::all();
        return view("physical_therapies.index",["physicalTherapies" => $physicalTherapies]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $patients = Patient::all();
        $therapists = User::all();
        return view("physical_therapies.create", ['patients' => $patients, 'therapists' => $therapists]);
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
        //return view('physical_therapies.show');
        $physicalTherapy = PhysicalTherapy::find($physicalTherapy->id);
        $pdf = PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true])
            ->loadView('physical_therapies.show', [
                "physicalTherapy" => $physicalTherapy,
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
        return response()->redirectTo('/physical-therapies');
    }
}
