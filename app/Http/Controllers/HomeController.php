<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\models\User;

class HomeController extends Controller
{
    //
    public function redir(){
      $usertype=Auth::user()->usertype;
      if($usertype=='1'){
          return View('admin.home'); 
      }
      else{
        return View('User.home');
      }

    }
}
