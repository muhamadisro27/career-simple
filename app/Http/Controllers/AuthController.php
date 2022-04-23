<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\AuthService;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;

class AuthController extends Controller
{
    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
    }

    public function loginForm()
    {
        return view('pages.auth.login');
    }

    public function login(LoginRequest $request)
    {
        // return redirect('/profile')->with();
    }

    public function registerForm()
    {
        return view('pages.auth.register');
    }

    public function register(RegisterRequest $request)
    {
        $response = $this->authService->register($request->all());

        return redirect('/profile')->with($response['status'], $response['message']);
    }

    public function logout()
    {
        auth()->logout();
 
        request()->session()->invalidate();
 
        request()->session()->regenerateToken();
 
        return redirect('/');
    }
}
