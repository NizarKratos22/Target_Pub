<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class admincontroller extends Controller
{
    public function profile(){
        return view('profile.show');
   }
   public function logout(){
       return view('profile.logout');  
     }
     public function dashboard(){
         return view('dashboard');
     }

}
