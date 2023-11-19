<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Models\Client;
use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('about');
});

Route::get('/main', function () {
    return view('main');
})->name('main');

// login page
Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', [ClientController::class, 'login'])->name('login');

// registration page
Route::get('/register', function () {
    return view('register');
})->name('register');

Route::post('register', [ClientController::class, 'store'])->name('register');


