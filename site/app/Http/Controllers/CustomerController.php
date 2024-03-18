<?php

namespace App\Http\Controllers;

use App\Models\Admin;
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

    return redirect('/customer');
  }

  public function delete($id)
  {
    $customer = Customer::find($id);
    $customer->delete();

    return redirect('/customer');
  }

  public function add()
  {
    return view('pages.admin.customerAdd');
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

    $email = $request->email;
    $password = $request->password;
    // $credentials = $request->only('email', 'password');

    // //  dd(Auth::guard('customers')->attempt($credentials));
    // if (Auth()->guard('customers')->attempt($credentials)) {
    //   // Authentication successful
    //   $request->session()->regenerate();
    //   return redirect('/homeCustomer');
    // } else {
    //   // Authentication failed
    //   return redirect()->back()->withErrors(['error' => 'Invalid credentials']);
    // }
    // // Checking if the user exists
    $role = 'customer';
    $user = Customer::where(['email' => $email])->first();

    if (is_null($user)) {
      $user = Admin::where(['email' => $email])->first();

      if (!is_null($user)) {
        $role = "admin";
      }
    }

    if (is_null($user)) {
      return back()->withInput()->withErrors(['email' => 'This email does not exist']);
    } 

    if (Hash::check($password, $user->password)) {

      session([
        'user' => [
          'user_id' => $user->id,
          'email' => $email,
          'role' => $role,
        ]
      ]);

      if ($role == 'customer') {
        return redirect('/homeCustomer');
      } else {
        return redirect('/homeAdmin');
      }

    } else {
      return back()->withInput()->withErrors(['password' => 'Incorrect password']);
    }
  }

  public function logout(Request $request)
  {
    
    $request->session()->forget('user');
    // Auth::guard('customers')->logout();
    return redirect('/login');
  }
}
