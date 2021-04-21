<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function login()
    {
        return view("clients.login");
    }

    /**
     * @return Application|Factory|View
     */
    public function register()
    {
        return view("clients.register");
    }

    /**
     * @return Application|Factory|View
     */
    public function documents()
    {
        return view("clients.documents");
    }
}
