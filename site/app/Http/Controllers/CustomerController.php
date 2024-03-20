<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Wallet;
use App\Models\Customer;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{


  public function list(): view
  {
    // $customer = Customer::paginate(4);
    $customer = Customer::all();
    return view('pages.admin.customerAdmin', compact('customer'));
  }


  public function deposit($id)
  {
    $customer = Customer::find($id);
    return view('pages.admin.customerDeposit', compact(('customer')));
  }

  public function update($id)
  {
    $customer = Customer::find($id);
    return view('pages.admin.customerUpdate', compact(('customer')));
  }

  public function update_traitement(Request $request)
  {
    $request->validate([
      'firstname' => 'required|string',
      'lastname' => 'required|string',
      'age' => 'required|numeric',
      'email' => 'required|email:rfc,dns',

    ]);

    $customer =  Customer::find($request->id);
    $customer->firstname = $request->firstname;
    $customer->lastname = $request->lastname;
    $customer->age = $request->age;
    $customer->email = $request->email;
    $customer->update();

    return redirect()->route('list.customers');
  }

  public function delete($id)
  {
    $customer = Customer::find($id);
    $customer->delete();

    return redirect()->route('list.customers');
  }

  public function add()
  {
    return view('pages.admin.customerAdd');
  }

  public function create(Request $request)
  {

    // dd(app()->environment());

    $request->validate([
      'firstname' => 'required|string',
      'lastname' => 'required|string',
      'age' => 'required|numeric|gt:15',
      'email' => 'required|email:rfc,dns',
    ]);


    // dd($request->all());


    if (app()->environment() != "production") {
      $wallet = Wallet::create(['solde' => 500]);
    } else {
      $wallet = Wallet::create();
    }

    $wallet_id = $wallet->id;
    // dd($wallet_id);

    $generatedPassword = fake()->password();
    session([
      'generatedPassword' => $generatedPassword,
    ]);

    $customer = Customer::make($request->all());
    $customer->wallet_id = $wallet_id;
    $customer->password = Hash::make($generatedPassword);
    $customer->save();

    return back()->with('success', true);
  }

  public function view($id)
  {
    $customer = Customer::find($id);
    return view('pages.admin.customerView', compact('customer'));
  }

  public function login(Request $request)
  {


    $request->validate([
      'email' => 'required|email:rfc,dns',
      'password' => 'required',

    ]);

    // $email = $request->email;
    // $password = $request->password;
    $credentials = $request->only('email', 'password');

    // var_dump('test');
    $request->session()->invalidate();
    $request->session()->regenerateToken();


    //  dd(Auth::guard('customers')->attempt($credentials));
    if (Auth()->guard('customers')->attempt($credentials)) {
      // Authentication successful
      session([
        'guard' => "customers",
      ]);
      $request->session()->regenerate();
      return redirect()->intended(route('dashboard.customer'));
    } elseif (Auth()->guard('admins')->attempt($credentials)) {
      // admin logged in
      session([
        'guard' => "admins",
      ]);
      $request->session()->regenerate();
      return redirect()->intended(route('dashboard.admin'));
    } else {
      // Authentication failed
      $error = [
        'email' => 'User not found',
      ];
      $user = Customer::where(['email' => $request->email])->first();


      if (is_null($user)) {
        $user = Admin::where(['email' => $request->email])->first();
        if (!is_null($user)) {
          $error = ['password' => 'Wrong password'];
        }
      } else {
        $error = ['password' => 'Wrong password'];
      }


      return redirect()->back()->withErrors($error)->withInput();
    }


    // // Checking if the user exists
    // $role = 'customer';
    // $user = Customer::where(['email' => $email])->first();

    // if (is_null($user)) {
    //   $user = Admin::where(['email' => $email])->first();

    //   if (!is_null($user)) {
    //     $role = "admin";
    //   }
    // }

    // if (is_null($user)) {
    //   return back()->withInput()->withErrors(['email' => 'This email does not exist']);
    // } 

    // if (Hash::check($password, $user->password)) {

    //   session([
    //     'user' => [
    //       'user_id' => $user->id,
    //       'email' => $email,
    //       'role' => $role,
    //     ]
    //   ]);

    //   if ($role == 'customer') {
    //     return redirect('/homeCustomer');
    //   } else {
    //     return redirect('/homeAdmin');
    //   }

    // } else {
    //   return back()->withInput()->withErrors(['password' => 'Incorrect password']);
    // }
  }

  public function logout(Request $request)
  {
    // dd(Auth::user());
    // $guard = $request->session()->get('guard');

    Auth::logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();


    return redirect('/login');
  }
}
