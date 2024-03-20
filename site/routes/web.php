<?php

use App\Http\Controllers\UserProfileController;
use App\Models\Crypto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CryptoController;
use App\Http\Controllers\CustomerController;
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

//? home
Route::get('/', function () {
    return view('index');
});

//? Login
Route::get('/login', function () {
    return view('Login');
})->name('login');
Route::post('/login', [CustomerController::class, 'login']);

//? Logout
Route::get('/logout', [CustomerController::class, 'logout'])->name('logout');



//? customer routes

Route::prefix('customer')->middleware('auth:customers')->group(function () {

    Route::post('/updateself/traitement', [UserProfileController::class, 'update_self_traitement'])->name('updateself');

    Route::get('/dashboard', function (Request $request) {

        return view('pages.customer.homeCustomer');
    })->name('dashboard.customer');

    // Route::get('/marche', function (Request $request) {

    Route::get('/courcrypto/{crypto_id}', [CryptoController::class, 'courCrypto'])->name('cours.crypto.customer');

    Route::get('/all-crypto', [CryptoController::class, 'listCrypto'])->name('list.crypto.customer');

    Route::get('/profile', function () {
        return view('pages.profile');
    })->name('profil.customer');

    Route::post('/transaction/{crypto_id}', [CryptoController::class, 'transaction'])->name('transaction');

    
});



//? Admin routes
Route::prefix('admin')->middleware('auth:admins')->group(function () {
    Route::get('/dashboard', [CryptoController::class, 'listCrypto'])->name('dashboard.admin');

    Route::get('/customers-list', [CustomerController::class, 'list'])->name('list.customers');

    Route::get('/deposit-customer/{id}', [CustomerController::class, 'deposit'])->name('deposit.customer');

    Route::get('/modify-customer/{id}', [CustomerController::class, 'update'])->name('modify.customer');

    Route::post('/update/traitement', [CustomerController::class, 'update_traitement'])->name('update.treatment');

    Route::get('/delete-customer/{id}', [CustomerController::class, 'delete'])->name('delete.customer');

    Route::get('/add-customer', [CustomerController::class, 'add'])->name('add.customer');
    Route::post('/add-customer', [CustomerController::class, 'create'])->name('create.customer');

    Route::get('/add-crypto', [CryptoController::class, 'addcrypto'])->name('addcrypto');

    Route::get('/view-customer/{id}', [CustomerController::class, 'view'])->name('view.customer');

    Route::get('/courcrypto/{crypto_id}', [CryptoController::class, 'courCrypto'])->name('cours.crypto.admin');

    Route::get('/all-crypto', [CryptoController::class, 'listCrypto'])->name('list.crypto.admin');

    Route::get('/profile', function () {
        return view('pages.profile');
    })->name('profil.admin');
    

});









// Route::middleware(['isconnected'])->group(function () {
//     Route::get('/homeCustomer', function (Request $request) {
//         return view('pages.customer.homeCustomer');
//     });

//     Route::get('/marche', [CryptoController::class, 'listCrypto']);

//     Route::get('/courcrypto/{crypto_id}', [CryptoController::class, 'courCrypto']);

//     Route::post('/transaction', [CryptoController::class, 'transaction']);
// });
// Route::middleware(['isadmin', 'isconnected'])->group(function () {
// });