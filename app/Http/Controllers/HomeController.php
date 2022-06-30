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
    public function about_us()
     {
         return view('frontend.pages.about-us-page');
     }
     public function disclaimer()
     {
         return view('frontend.pages.disclaimer-page');
     }
     public function contact_us()
     {
         return view('frontend.pages.contact-us-page');
     }
     public function privacy_policy()
     {
         return view('frontend.pages.privacy-policy-page');
     }
     public function terms_and_conditions()
     {
         return view('frontend.pages.terms-and-conditions-page');
     }
     public function test_quiz()
     {
         return view('frontend.pages.test-quiz-page');
     }
     public function multiplication_table($id)
     {
            $methodtoread = getMethodToRead();
            $tableof = $id;

            switch ($id) {
                case '1':
                        return view('frontend.multiplication.table-of-1',compact('tableof'));           
                    break;
                case '2':
                        return view('frontend.multiplication.table-of-2',compact('tableof'));           
                    break;
                case '3':
                        return view('frontend.multiplication.table-of-3',compact('tableof'));
                    break;
                case '4':
                        return view('frontend.multiplication.table-of-4',compact('tableof'));
                    break;
                case '5':
                        return view('frontend.multiplication.table-of-5',compact('tableof'));
                    break;
                case '6':
                        return view('frontend.multiplication.table-of-6',compact('tableof'));
                    break;
                case '7':
                        return view('frontend.multiplication.table-of-7',compact('tableof'));
                    break;
                case '8':
                        return view('frontend.multiplication.table-of-8',compact('tableof'));
                    break;
                case '9':
                        return view('frontend.multiplication.table-of-9',compact('tableof'));
                    break;
                case '10':
                        return view('frontend.multiplication.table-of-10',compact('tableof'));           
                    break;
                case '11':
                        return view('frontend.multiplication.table-of-11',compact('tableof'));
                    break;
                case '12':
                        return view('frontend.multiplication.table-of-12',compact('tableof'));
                    break;
                case '13':
                        return view('frontend.multiplication.table-of-13',compact('tableof'));
                    break;
                case '14':
                        return view('frontend.multiplication.table-of-14',compact('tableof'));
                    break;
                case '15':
                        return view('frontend.multiplication.table-of-15',compact('tableof'));
                    break;
                case '16':
                        return view('frontend.multiplication.table-of-16',compact('tableof'));
                    break;
                case '17':
                        return view('frontend.multiplication.table-of-17',compact('tableof'));
                    break;
                case '18':
                        return view('frontend.multiplication.table-of-18',compact('tableof'));
                    break;
                case '19':
                        return view('frontend.multiplication.table-of-19',compact('tableof'));
                    break;
                case '20':
                        return view('frontend.multiplication.table-of-20',compact('tableof'));
                    break;
                default:
                    return view('frontend.multiplication.index',compact('tableof'));           
                    break;
            }



         
     }

     public function multiplicationTwoToTwenty($id,$ids)
     {
        $begtableof        = $id;
        $endtableof        = $ids;
        $tableof        = $id;
        $concat  = $id."_".$ids;
        switch ($concat) {
            case '2_10':
                    return view('frontend.multiplication.tables-2-to-10',compact('tableof','begtableof','endtableof'));
                break;
            case '2_20':
                    return view('frontend.multiplication.tables-2-to-20',compact('tableof','begtableof','endtableof'));
                break;
            case '11_20':
                    return view('frontend.multiplication.tables-11-to-20',compact('tableof','begtableof','endtableof'));
                break;
            default:
                return view('frontend.multiplication.tables-beg-to-end',compact('tableof','begtableof','endtableof'));
                break;
        }
         
     }
}
