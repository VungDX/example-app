<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    public function register(Request $request)
    {
        $userCreate = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        return response()->json([
            'code' => 201,
            'data' => $userCreate,
        ], 201);
    }
}
