<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::get();
        return response()->json(['users' => $users]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LoginRequest $request)
    {
        $validated = $request->validated();

        if (Auth::attempt($validated, $request->remember)) {
            $user = Auth::user();
            return response()->json(['user' => $user, 'message' => 'Kullanıcı oturumu açılabilir. Bilgiler doğrulandı!']);
        }
        return response()->json(['message' => 'bilgiler doğrulanamadı!'], 401);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::find($id);
        if ($user) {
            return response()->json(['user' => $user]);
        } else {
            return response()->json(['message' => 'kullanıcı bulunamadı!']);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
