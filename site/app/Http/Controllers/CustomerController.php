<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\View\View;

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

  

}
