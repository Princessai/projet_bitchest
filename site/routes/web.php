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


Route::get('/dashwallet', function () {
    return view('pages.wallet');
});

Route::get('/profile', function () {
    return view('pages.profile');
});

Route::get('/marche', [CryptoController::class,'listCrypto']);

Route::get('/courcrypto/{crypto_id}', [CryptoController::class,'courCrypto']);

Route::post('/transaction/{customer_id}', [CryptoController::class,'transaction']);


// Route::get('/Vue', 
Route::get('/Vue', function () {
    return view('Vue');
});
