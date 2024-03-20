<?php 


namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Admin;
use App\Models\Customer;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;



class UserProfileController extends Controller {

    public function update_self_traitement(Request $request)
    {
      $validationRule = ['firstname', 'lastname', 'email'];
      $request->validate([
        'firstname' => 'required|string',
        'lastname' => 'required|string',
        'age' => 'required|numeric',
        'email' => 'required|email:rfc,dns',
        'password' => 'required',
  
      ]);
  
      $user_id = Auth::user()->id;
      
    $customer = Customer::find($user_id);
      $customer->firstname = $request->firstname ?? $customer->firstname;
      $customer->lastname = $request->lastname ?? $customer->lastname;
      $customer->age = $request->age ?? $customer->age;
      $customer->email = $request->email ?? $customer->email;
          $customer->password = Hash::make($request->password); 
  
  
          $customer->update(); 
  
          return redirect()->route('profil.customer');
    }



    // public function update_self_traitement_admin(Request $request)
    // {
    //   $request->validate([
    //     'firstname' => 'required|string',
    //     'lastname' => 'required|string',
    //     'email' => 'required|email:rfc,dns',
    //     'password' => 'required',
  
    //   ]);
  
    //   $user_id = Auth::user()->id;
      
    // $customer = Admin::find($user_id);
    //   $customer->firstname = $request->firstname ?? $customer->firstname;
    //   $customer->lastname = $request->lastname ?? $customer->lastname;
    //   $customer->email = $request->email ?? $customer->email;
    //       $customer->password = Hash::make($request->password); 
  
  
    //       $customer->update(); 
  
    //       return redirect()->route('dashboard.admin');
    // }







}