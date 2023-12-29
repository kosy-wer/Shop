<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function authenticate(Request $request)
    {
        Validator::make($request->only('email', 'password'), [
            'email' => 'required|email',
            'password' => 'required|min:8',
        ])->validateWithBag('login');
    }

    // Sisanya kode controller Anda...
}

