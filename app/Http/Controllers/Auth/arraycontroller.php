<?php

namespace App\Http\Controllers;

class arrraycontroller extends Controller
{
   public function_construct()
   {
   		$this->middlaware('auth');
   }

   public function index(){

   	return view('array');
   }
}
