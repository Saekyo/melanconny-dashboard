<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $response = Http::post('https://ready-dove-seemingly.ngrok-free.app/api/login', [
            'email' => $request->email,
            'password' => $request->password,
        ]);

        $response_data = $response->json();
        if ($response_data['status'] == 200) {
            $token = $response_data['data']['token'];
            // Simpan token ke session
            Session::put('api_token', $token);
            // Redirect ke home view
            return redirect()->route('category');
        }

        return back()->withErrors(['message' => 'Invalid credentials']);

    }
}
