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
     public function multiplication_table($id)
     {
            $methodtoread = getMethodToRead();
            //dd($methodtoread);
            $tableof = $id;
         return view('frontend.multiplication.index',compact('tableof'));
     }
     public function multiplicationTwoToTwenty($id,$ids)
     {


         
            /*$methodtoread   = getMethodToRead();*/
            $tableof        = $id;
         return view('frontend.multiplication.table-two-to-twenty',compact('tableof'));
     }
}
