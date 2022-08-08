<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;


class SessionController extends Controller
{

   public function accessSessionData(Request $request) {
      return $request;
     
   }
   public function storeSessionData(Request $request) {
      $request->session()->put('user',$request->email);
      return;
      echo "Data has been added to session";
   }
   public function deleteSessionData(Request $request) {
      $request->session()->forget($request->email);
      echo "Data has been removed from session.";
   }
}

