<?php

namespace App\Http\Controllers;

use App\Models\ChEvolution;
use App\Models\ChPsychotherapeuticAssessment;
use App\Models\ClinicalHistory;
use Carbon\Carbon;
use Illuminate\Support\Facades\Artisan;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\Storage;

/**
 * Class CacheController
 * @package App\Http\Controllers
 */
class CacheController extends Controller
{
    public function index() {
        //Artisan::call("optimize");
        $evolutions = ChEvolution::all();
        foreach ($evolutions as $evolution) {
            $base64_str = substr($evolution->signature, strpos($evolution->signature, ",")+1);

            //decode base64 string
            $image = base64_decode($base64_str);
            Storage::disk('public')->put('signatures/'.$evolution->id.'.png', $image);
            $evolution->signature = sprintf('%s.png', $evolution->id);
            //print($evolution->signature);
            $evolution->save();
        }
        print('clear');
    }
}