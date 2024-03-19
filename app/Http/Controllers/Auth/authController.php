<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;

class authController extends Controller
{
    public function loginIndex()
    {
        return view('Auth/Login');
    }

    public function registerIndex()
    {
        return view('Auth/Register');
    }

    public function registerStore(RegisterRequest $request)
    {
        dd($request->validated());
    }
}
