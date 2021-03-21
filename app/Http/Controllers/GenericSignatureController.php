<?php

namespace App\Http\Controllers;

use App\Models\LabSample;
use Carbon\Carbon;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class GenericSignatureController extends Controller
{
    /**
     * @param string $signatureType
     * @param int $id
     * @return Application|Factory|View
     */
    public function index(string $signatureType, int $id)
    {
        return view("generic_signature.index", ["signatureType" => $signatureType, "id" => $id]);
    }

    /**
     * @param Request $request
     * @return string
     */
    public function store(Request $request): string
    {
        if ($request->input('signatureType') == 'labSample') {
            $labSample = LabSample::find($request->input('id'));
            $labSample->signature = $request->input('dataSignature');
            $labSample->signature_date = Carbon::now();
            $labSample->save();
            return "/lab-samples";
        }
    }
}