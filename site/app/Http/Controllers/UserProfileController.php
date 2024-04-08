<?php


namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Admin;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Middleware\IsAdmin;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;



class UserProfileController extends Controller
{

  public function update_self_traitement(Request $request)
  {

    $user = Auth::user();
    // dd($user);
    $userTable = $user->getTable();

    $rules = [
      'firstname' => 'required|string',
      'lastname' => 'required|string',
      'email' => "required|email:rfc,dns",
      'password' => [
        'required',

        function (string $attribute,  $value, $fail) use ($user) {

          $check = Hash::check($value, $user->password);

          if ($check == false) {
            $fail("The {$attribute} is invalid.");
          }
        }
      ]
    ];



    if ($user->email != $request->email) {
      $rules['email'] .= "|unique:$userTable";
    }
    $validator = Validator::make($request->all(), $rules);

    if ($validator->fails()) {
      return back()->withErrors($validator)
        ->withInput();
    }


    // dd($validator->safe()->except(["email"]));
    if ($user->isAdmin() == FALSE) {
      $customerRules = [
        'age' => 'required',
      ];
      $rules += $customerRules;
    }



    // $request->validate($rules);


    // $oldPassword =  $request->password;

    // $hash = $user->password;


    // if ($check == FALSE) {
    //   return redirect()->back()->with('error', 'incorrect password');
    // } else {
    //   if (($request->input('new-password') != NULL) && ($request->input('confirm-new-password') != NULL)) {
    //     if ($request->input('new-password') == $request->input('confirm-new-password')) {
    //       $user->password = Hash::make($request->input('new-password'));
    //     } else {
    //       return redirect()->back()->with('error', 'put the same password please');
    //     }
    //   }
    // }

    // $user->firstname =$request->input('firstname');
    // $user->lastname = $request->input('lastname');
    // $user->age = $request->input('age');
    // $user->email = $request->input('email');


    // dd($request->validated());
    if ($user->email == $request->email) {
      $validatedInput = $validator->safe()->except(["email", 'password']);
    } else {
      $validatedInput = $validator->safe()->except(['password']);
    }
    // dd($user->update($validatedInput));
    $user->update($validatedInput);

    if ($user->isAdmin()) {

      return redirect()->route('profil.admin');
    }
    return redirect()->route('profil.customer');
  }

  public function update_password(Request $request)

  {
    $user = Auth::user();

    $guard = Auth::getDefaultDriver();

    $request->validate([
      "password" => "required|current_password:$guard",
      "new-password" => ['required', Password::min(8)
        ->letters()
        ->symbols()],
      "confirm-new-password" => "required|same:new-password",
    ]);

    $user->password = Hash::make($request->input('new-password'));
    $user->save();

    return back()->with('success', true);
  }
}
