<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("auth.login");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $userAttributes = $request->validate([
            "email" => ['required', 'email'],
            "password" => ['required', Password::min(6)]
        ]);

        if (! Auth::attempt($userAttributes)) {
            throw ValidationException::withMessages([
                "credentials" => "sorry invalid credentials"
            ]);
        }

        request()->session()->regenerate();

        return redirect('');
    }


    public function destroy()
    {
        Auth::logout();

        return redirect('/');
    }
}
