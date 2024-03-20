<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class authController extends Controller
{
    public function loginIndex()
    {
        return view('Auth/Login');
    }

    public function loginStore(LoginRequest $request)
    {   
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            return to_route('cargo.index');
        }
        return back()->with('message', 'E-posta ya da şifre yanlış.');
    }

    public function logout()
    {
        Auth::logout();
        return to_route('login.index');
    }

    public function registerIndex()
    {
        return view('Auth/Register');
    }

    public function registerStore(RegisterRequest $request)
    {
        $user = User::create($request->validated());
        Auth::login($user);

        return to_route('cargo.index');
    }
}
