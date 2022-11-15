<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

use App\Http\Requests\RegisterRequest;
use App\Models\User;

class RegisteredUserController extends Controller
{
//    registra un nuevo usuario en la base de datos
    public function store(RegisterRequest $request)
    {
        User::create($request->validated());
        return to_route('login')->with('status', 'Account created!');
    }
}
