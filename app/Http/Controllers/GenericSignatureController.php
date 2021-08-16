<?php

namespace App\Http\Controllers;

use App\Models\ChEvolution;
use App\Models\ClinicalHistory;
use App\Models\LabSample;
use App\Models\PhysicalTherapy;
use Carbon\Carbon;
use GuzzleHttp\Client;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

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
        } elseif ($request->input('signatureType') == 'therapy') {
            $physicalTherapy = PhysicalTherapy::find($request->input('id'));
            $physicalTherapy->signature = $request->input('dataSignature');
            $physicalTherapy->save();
            return "/physical-therapies";
        } elseif ($request->input('signatureType') == 'clinical') {
            $clinicalHistory = ClinicalHistory::find($request->input('id'));
            $clinicalHistory->signature = $request->input('dataSignature');
            $clinicalHistory->save();
            return "/clinical-histories";
        } elseif ($request->input('signatureType') == 'evolution') {
            $evolution = ChEvolution::find($request->input('id'));
            $evolution->signature = $request->input('dataSignature');
            $evolution->save();

            $base64_str = substr($evolution->signature, strpos($evolution->signature, ",")+1);

            //decode base64 string
            $image = base64_decode($base64_str);
            $signatureFile = Storage::disk('public')->put('signatures/'.$evolution->id.'.png', $image);
            $storagePath = Storage::disk('public')->getDriver()->getAdapter()->getPathPrefix();
            $evolution->signature = $evolution->id . '.png';
            $evolution->save();

            $client = new Client();

            $url = 'https://portal.zerbit.co/upload.php';

            $response = $client->request('POST', $url, [
                'multipart' => [
                    [
                        'name'     => 'image',
                        'contents' => fopen( Storage::disk('public')->getDriver()->getAdapter()->getPathPrefix().'/signatures/'.$evolution->id.'.png', 'r'),
                    ],
                    [
                        'name'     => 'path',
                        'contents' => 'signatures',
                    ]
                ]
            ]);
            File::delete(Storage::disk('public')->getDriver()->getAdapter()->getPathPrefix().'/signatures/'.$evolution->id.'.png');
            return "/clinical-histories";
        } elseif ($request->input('signatureType') == 'labExternal') {
            $labSample = LabSample::find($request->input('id'));
            $labSample->signature = $request->input('dataSignature');
            $labSample->signature_date = Carbon::now();
            $labSample->save();

            return "/clients/externalAuth/".Crypt::encryptString($labSample->patient->id);
        }
    }
}
