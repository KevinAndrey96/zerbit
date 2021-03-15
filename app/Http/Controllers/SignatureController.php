<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Psy\Util\Json;

class SignatureController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        return view("signatures.index");
    }

    /**
     * @param User $user
     * @return View
     */
    public function show(User $user): View
    {
        return view("signatures.show", ["user" => $user]);
    }

    /**
     * @param User $user
     * @return View
     */
    public function create(User $user): View
    {
        return view("signatures.create", ["user" => $user]);
    }

    /**
     * @param User $user
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(User $user, Request $request): JsonResponse
    {
        $user->signature = $request->input('signature');
        $user->save();
        return response()->json(["data" => "Firma actualizada correctamente"]);
    }

    /**
     * @param User $user
     * @return View
     */
    public function createLabSample(User $user): View
    {
        return view("signatures.create", ["user" => $user]);
    }
}
