<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

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

    // public function getUser(Request $request){
    //     $client = Client::all();
    //     return view('client.index')->with(['clients' => $client]);
    // }
}
