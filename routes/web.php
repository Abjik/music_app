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
    return view('welcome');
});

Route::get('/main', function () {
    return view('main');
})->name('main');

Route::get('/login', function () {
    return view('login');
})->name('login');

// Route::get('/login', [ClientController::class, 'getUser'])->name('login');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::post('register', [ClientController::class, 'store'])->name('register');

Route::get('client/add', function () {
    DB::table('client')->insert([
        'name' => 'Test',
        'email' => 'test@mail.ru',
        'password' => '123'
    ]);
});
