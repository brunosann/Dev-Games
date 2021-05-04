<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
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
}
