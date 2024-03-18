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

Route::get('/', function () {
    return view('index');
});

// Route::get('/login', [CryptoController::class, 'listCrypto']);


Route::get('/login', function () {
    return view('Login');
})->name('login');
Route::post('/login', [CustomerController::class, 'login']);



<<<<<<< HEAD
Route::get('/wallet', function () {
    return view('pages.customer.wallet');
});
=======
>>>>>>> 48eb2ae83679065859da1da76c9e11aad2ae3a05



Route::get('/profile', function () {
    return view('pages.profile');
});

Route::get('/marche', [CryptoController::class, 'listCrypto']);

Route::get('/courcrypto/{crypto_id}', [CryptoController::class, 'courCrypto']);

Route::post('/transaction/{customer_id}', [CryptoController::class, 'transaction']);





Route::get('/customer', [CustomerController::class, 'list']);

Route::get('/update-customer/{id}', [CustomerController::class, 'update']);

Route::post('/update/traitement', [CustomerController::class, 'update_traitement']);

Route::get('/delete-customer/{id}', [CustomerController::class, 'delete']);

Route::get('/add', [CustomerController::class, 'add']);

Route::get('/view-customer/{id}', [CustomerController::class, 'view']);

Route::get('/logout', [CustomerController::class, 'logout']);


Route::group(['middleware' => ['auth:customers'] ], function(){    

    Route::get('/homeCustomer', function (Request $request) {
       
        return view('pages.customer.homeCustomer');
    });
    Route::get('/wallet', function () {
        return view('pages.customer.wallet');
    });

});

Route::group(['middleware' => ['auth:admins'] ], function(){    
    Route::get('/homeAdmin', function () {
        return view('pages.admin.homeAdmin');
    });
    
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
