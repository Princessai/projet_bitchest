<?php

use App\Models\Crypto;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CryptoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

// Route::get('/login', [CryptoController::class, 'listCrypto']);


Route::get('/login', function () {
    return view('Login');
});



Route::get('/wallet', function () {
    return view('pages.wallet');
});

Route::get('/homeadmin', function () {
    return view('pages.homeAdmin');
});

<<<<<<< HEAD
Route::get('/dash', function () {
    return view('layouts.userDashboard');
=======


// Route::get('/Vue', 
Route::get('/Vue', function () {
    return view('Vue');
>>>>>>> 6c99b7c796f96f3d9a8b742785ab44d657a0693b
});