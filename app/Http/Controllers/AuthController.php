<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Services\AuthService;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
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

    public function login(Request $request)
    {
       $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
       ]);
       if(Auth::attempt($credentials)) {
           $request->session()->regenerate();
           $user = User::find(auth()->user()->id);
           
           if($user->hasRole('admin')) {
               return redirect()->route('dashboard');
           } else {
               return redirect()->intended('candidate');
           }
        }
        return redirect()->back()->with('loginFailed', 'User doesnt match in our records !');
    }

    public function registerForm()
    {
        return view('pages.auth.register');
    }

    public function register(RegisterRequest $request)
    {
        $response = $this->authService->register($request->all());

        return redirect('profile')->with($response['status'], $response['message']);
    }

    public function logout()
    {
        auth()->logout();
 
        request()->session()->invalidate();
 
        request()->session()->regenerateToken();
 
        return redirect('/');
    }
}
