<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class HomeController extends BaseController
{
    
    public function index()
     {
         return view('frontend.home.index');
     }
     public function multiplication_table($tableof,$id)
     {
            $methodtoread = getMethodToRead();
            //dd($methodtoread);
            $tableof = $id;
         return view('frontend.multiplication.index',compact('tableof'));
     }
     public function multiplicationTwoToTwenty()
     {
            /*$methodtoread   = getMethodToRead();*/
            $tableof        = 2;
         return view('frontend.multiplication.table-2-to-20',compact('tableof'));
     }
}
