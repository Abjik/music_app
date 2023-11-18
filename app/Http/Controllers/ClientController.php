<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{
    public function index(){
        $client = Client::all();
        return view('client.index')->with(['clients' => $client]);
    }

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
    if (Auth::attempt($credentials)) {
        return redirect()->intended(route('main'));
    }
    return redirect(route('login'))->with("error", "Неверный логин или пароль");
    }
}
