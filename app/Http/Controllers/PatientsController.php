<?php

namespace App\Http\Controllers;

use App\Models\LabSample;
use App\Models\Patient;
use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use Spatie\Permission\PermissionRegistrar;

class PatientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|\Illuminate\Contracts\View\View|View
     */
    public function index(): View
    {
        app()->make(PermissionRegistrar::class)->forgetCachedPermissions();
        $patients = Patient::all();
        return view("patients.index",["patients" => $patients]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        $patient = Patient::create($request->toArray());
        return response()->redirectTo('/patients');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function externalStore(Request $request)
    {
        $patient = Patient::create($request->toArray());
        return response()->redirectTo('/clients/login');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Application|Factory|\Illuminate\Contracts\View\View|RedirectResponse
     */
    public function externalAuth(Request $request)
    {
        $patient = Patient::where([['document', $request->input('document')],['phone', $request->input('phone')]])->first();
        try {
            if ($patient === null) {
                return response()->redirectTo('/clients/login');
            } else {
                $labSamples = LabSample::where('patient_id','3')->get();
                return view("clients.documents", ["session" => true, "patient" => $patient, "labSamples" => $labSamples]);
            }
        } catch (Throwable $th) {
            return response()->redirectTo('/clients/login');
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
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
     * @param Patient $patient
     * @return RedirectResponse
     */
    public function destroy(Patient $patient): RedirectResponse
    {
        try {
            $patient->delete();
        } catch (Exception $e) { }
        return response()->redirectTo('/patients');
    }
}
