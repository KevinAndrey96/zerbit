<?php

namespace App\Http\Controllers;

use App\Models\ChEvolution;
use Carbon\Carbon;
use Illuminate\Http\Request;

class EvolutionsController extends Controller
{
    public function store(Request $request)
    {
        $chEvolution = ChEvolution::create(array_merge($request->toArray(), ['evolution_date' => Carbon::now()]));
        return redirect('/generic-signature/evolution/'.$chEvolution->id);
    }
}
