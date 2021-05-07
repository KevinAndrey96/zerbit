<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;
use Symfony\Component\HttpFoundation\RedirectResponse;

class UsersController extends Controller
{
    /**
     * @return Application|Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        app()->make(PermissionRegistrar::class)->forgetCachedPermissions();
        $users = User::all();
        return view("users.index",["users" => $users]);
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function create(Request $request)
    {
        $user = User::create([
            'name' => $request->input("name"),
            'document' => $request->input("document"),
            'role' => $request->input("role"),
            'email' => $request->input("email"),
            'signature' => '',
            'password' => Hash::make($request->input("password")),
        ]);
        $role = Role::findByName('admin');
        $user->assignRole($role);
        $user->syncRoles($role);
        return response()->redirectTo('/users');
    }

    /**
     * @param User $user
     * @return Application|Factory|\Illuminate\Contracts\View\View|View|RedirectResponse
     */
    public function edit(User $user): View
    {
        return view("users.edit",["user" => $user]);
    }

    /**
     * @param User $user
     * @return RedirectResponse
     */
    public function destroy(User $user): RedirectResponse
    {
        try {
            $user->delete();
        } catch (Exception $e) { }
        return response()->redirectTo('/users');
    }

    /**
     * @return View
     */
    public function change(): View
    {
        return view("Auth.change");
    }

    /**
     * @param Request $request
     * @return View
     */
    public function changePassword(Request $request)
    {
        if ($request->input('new') == $request->input('new2')) {
            if (Hash::check($request->input('actual'), Auth::user()->password)) {
                Auth::user()->password = Hash::make($request->input('new2'));
                Auth::user()->save();
                return response()->redirectTo('/patients');
            }
        }
        return response()->redirectTo('/users/change-password');
    }
}
