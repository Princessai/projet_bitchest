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

$user = Auth::user();


$rules = [
  'firstname' => 'required|string',
        'lastname' => 'required|string',
 'email' => 'required|email:rfc,dns',
 'password' => 'required',
];

     if ($user->isAdmin() == FALSE  ) {
      $customerRules = [
          'age' => 'required',
      ];
      $rules += $customerRules ; 

     }



      $request->validate($rules);


  $oldPassword =  $request->password;

$hash = $user->password ;


 $check = Hash::check($oldPassword,$hash);

    if($check == FALSE){
     return redirect()->back()->with('error', 'incorrect password');
      } else {
         if(($request->input('new-password') !=NULL) and ($request->input('confirm-new-password') !=NULL)){
           if ($request->input('new-password') == $request->input('confirm-new-password')){
            $user->password = Hash::make($request->input('new-password')) ;
           } else {
            return redirect()->back()->with('error' , 'put the same password please');
           }
         } 
    }

      // $user->firstname =$request->input('firstname');
      // $user->lastname = $request->input('lastname');
      // $user->age = $request->input('age');
      // $user->email = $request->input('email');
      
  
      $user->update($request->all()); 
  
          return redirect()->route('profil.customer');
    }


  }
//     public function update_self_traitement_admin(Request $request)
//     {
//       $request->validate([
//         'firstname' => 'required|string',
//         'lastname' => 'required|string',
//         'email' => 'required|email:rfc,dns',
//         'password' => 'required',
  
//       ]);
  
//       $user_id = Customer::find(Auth::user()->id);
//       $oldPassword = Hash::make($request->password);
    
//         if($oldPassword !== $user_id->password){
//          return redirect()->back()->with('error', 'incorrect password');
//           } else {
//              if(($request->input('new-password') !=NULL) and ($request->input('confirm-new-password') !=NULL)){
//                if ($request->input('new-password') == $request->input('confirm-new-password')){
//                 $user_id->password = $request->input('new-password');
//                } else {
//                 return redirect()->back()->with('error' , 'put the same password please');
//                }
//              } 
//         }
      
//         $user_id->firstname = $request->firstname ;
//         $user_id->lastname = $request->lastname ;
//       $user_id->email = $request->email ;
       
//       $user_id->update(); 
  
//           return redirect()->route('dashboard.admin');
//     }

// }