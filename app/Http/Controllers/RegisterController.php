<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'min:3', 'max:255'],
            'email' => ['email:dns', 'required', 'unique:users'],
            'password' => ['required', 'min:8', 'max:255']
        ]);
        
        User::create($validated);
        
        return redirect('/login');

        
    }
}
