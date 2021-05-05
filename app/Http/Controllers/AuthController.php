<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(RegisterRequest $request)
    {
        $dataUser = $request->only('name', 'email');
        $password = $request->input('password');
        $dataUser['password'] = Hash::make($password);
        User::create($dataUser);

        Auth::attempt(['email' => $dataUser['email'], 'password' => $password]);
        $request->session()->regenerate();
        return redirect()->intended();
    }

    public function login(LoginRequest $request)
    {
        $dataUser = $request->only('email', 'password');
        if (!Auth::attempt($dataUser)) return back()->withErrors(['message' => 'Email e/ou senha incorretos!']);
        $request->session()->regenerate();
        return redirect()->intended();
    }

    public function logout()
    {
        Auth::logout();
        session()->invalidate();
        session()->regenerateToken();
        return redirect('/');
    }
}
