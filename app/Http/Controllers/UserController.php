<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class UserController extends Controller
{
   public function dashboard() {

   	return view ('backend.index');
   }

   public function login() {
   	return view ('frontend.login');
   }

   public function logout() {
      Auth::logout();

      return redirect() -> route('home') -> withSuccess('Logout Success');
   }

   public function register() {
   	return view ('frontend.register');
   }

      public function registerPost(Request $request) {
   		$request -> validate([
   			'name' => 'required',
   			'email' => 'required|email|unique:users',
   			'ic' => 'required|unique:users',
   			'password' => 'required'

   		   ],   
            [
   				'name.required' => 'Sila masukkan nama',
   				'email.email' => 'Masukkan email yang sah',
   				'email.unique' => 'Email sudah wujud'
   		    ]);


               //nama class = $user
               //name object = User()
                $user = new User();
                $user -> name = $request -> name;
                $user -> email = $request -> email;
                $user -> ic = $request -> ic;
                $user -> password = bcrypt($request -> password);
                $user -> save();

                return back() -> with('success', 'Successfully register');
                //ada satu session nama success namanya succesfully register guna with statement
                //success tu kena nama sama dekat function alert.blade
    }

         public function loginPost(Request $request){
            $request -> validate([
               'email' => 'required',
               'password' => 'required'
            ]);

            $credentials = $request -> only('email', 'password');
            if (Auth::attempt($credentials)) {
               //Authentication passed..
               return redirect() -> route('user.dashboard');
            } else {
               return back() -> withError('Login failed.');
            }

         }

}
