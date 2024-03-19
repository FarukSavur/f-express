<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
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

    public function registerStore(Request $request)
    {
        dd($request->all());
    }
}
