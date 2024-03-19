<?php

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

    

    Route::get('/dashboard', function (Request $request) {

        return view('pages.customer.homeCustomer');
    })->name('dashboard.customer');

    Route::get('/wallet', function () {
        return view('pages.customer.wallet');
    })->name('wallet');

    Route::get('/courcrypto/{crypto_id}', [CryptoController::class, 'courCrypto'])->name('cours.crypto');

    Route::get('/all-crypto', [CryptoController::class, 'listCrypto'])->name('list.crypto');

    Route::get('/profile', function () {
        return view('pages.customer.profileCustomer');
    })->name('profil.customer');

    Route::post('/transaction/{customer_id}', [CryptoController::class, 'transaction']);

    
});



//? Admin routes
Route::prefix('admin')->middleware('auth:admins')->group(function () {
    Route::get('/dashboard', function () {
        return view('pages.admin.homeAdmin');
    })->name('dashboard.admin');

    Route::get('/customers-list', [CustomerController::class, 'list'])->name('list.customers');

    Route::get('/modify-customer/{id}', [CustomerController::class, 'update'])->name('modify.customer');

    Route::post('/update/traitement', [CustomerController::class, 'update_traitement'])->name('update.treatment');

    Route::get('/delete-customer/{id}', [CustomerController::class, 'delete'])->name('delete.customer');

    Route::get('/add-customer', [CustomerController::class, 'add'])->name('add.customer');

    Route::get('/view-customer/{id}', [CustomerController::class, 'view'])->name('view.customer');

    Route::get('/courcrypto/{crypto_id}', [CryptoController::class, 'courCrypto'])->name('cours.crypto');

    Route::get('/all-crypto', [CryptoController::class, 'listCrypto'])->name('list.crypto');

    Route::get('/profile', function () {
        return view('pages.profile');
    })->name('profil');
    

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