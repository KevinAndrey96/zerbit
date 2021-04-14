<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Models\User;
use Illuminate\Http\Request;

/**
 * Class ClinicalHistoriesController
 * @package App\Http\Controllers
 */
class ClinicalHistoriesController extends Controller
{
    public function create()
    {
        $patients = Patient::all();
        $therapists = User::all();
        return view("clinical_histories.create", ['patients' => $patients, 'therapists' => $therapists]);
    }
}
