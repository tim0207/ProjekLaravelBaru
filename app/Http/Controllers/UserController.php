<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
   public function index() {

   	 	return 'Hello World';
   }

   public function login() {
   	return view ('frontend.login');
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


}
