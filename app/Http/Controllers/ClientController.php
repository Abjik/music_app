<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{

    public function store(Request $request){
        Client::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password
        ]);
        return back();
    }

    public function login(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');
        if (Client::where('email', $credentials['email'])->exists() && Client::where('password', $credentials['password'])->exists()) {
            return redirect()->intended(route('main'));
        }
        return redirect(route('login'))->with("error", "Неверный логин или пароль");
    }
}
