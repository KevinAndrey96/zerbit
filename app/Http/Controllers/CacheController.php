<?php

namespace App\Http\Controllers;

use App\Models\ChEvolution;
use App\Models\ChPsychotherapeuticAssessment;
use App\Models\ClinicalHistory;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Artisan;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Spatie\Permission\PermissionRegistrar;
use Symfony\Component\Process\Process;

/**
 * Class CacheController
 * @package App\Http\Controllers
 */
class CacheController extends Controller
{
    public function index() {
        //$process = new Process(['cp', 'repositories/zerbit3/storage/app/public/signatures/1.png portal.zerbit.co/storage/1.png']);

        //$process->run();
        Artisan::call("optimize");
        app('cache')
            ->store(config('permission.cache.store') != 'default' ? config('permission.cache.store') : null)
            ->forget(config('permission.cache.key'));
        app()->make(PermissionRegistrar::class)->forgetCachedPermissions();
        /*$evolutions = ChEvolution::all();
        foreach ($evolutions as $evolution) {
            $base64_str = substr($evolution->signature, strpos($evolution->signature, ",")+1);

            //decode base64 string
            $image = base64_decode($base64_str);
            Storage::disk('public')->put('signatures/'.$evolution->id.'.png', $image);
            $evolution->signature = sprintf('%s.png', $evolution->id);
            //print($evolution->signature);
            $evolution->save();
        }*/
        print('clear');
    }
}