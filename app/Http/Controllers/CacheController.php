<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Artisan;

/**
 * Class CacheController
 * @package App\Http\Controllers
 */
class CacheController extends Controller
{
    public function index() {
        Artisan::call("optimize");
        print('clear');
    }
}