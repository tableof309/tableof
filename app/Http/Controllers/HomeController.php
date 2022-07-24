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
     public function site_map()
     {
         return view('frontend.pages.site-map-page');
     }
     public function multiplication_table($id)
     {
            $methodtoread = getMethodToRead();
            $tableof = $id;
            $tableof_str = $tableof;
            switch ($id) {
                case '1':
                        return view('frontend.multiplication.table-of-1',compact('tableof','tableof_str'));           
                    break;
                case '2':
                        return view('frontend.multiplication.table-of-2',compact('tableof','tableof_str'));           
                    break;
                case '3':
                        return view('frontend.multiplication.table-of-3',compact('tableof','tableof_str'));
                    break;
                case '4':
                        return view('frontend.multiplication.table-of-4',compact('tableof','tableof_str'));
                    break;
                case '5':
                        return view('frontend.multiplication.table-of-5',compact('tableof','tableof_str'));
                    break;
                case '6':
                        return view('frontend.multiplication.table-of-6',compact('tableof','tableof_str'));
                    break;
                case '7':
                        return view('frontend.multiplication.table-of-7',compact('tableof','tableof_str'));
                    break;
                case '8':
                        return view('frontend.multiplication.table-of-8',compact('tableof','tableof_str'));
                    break;
                case '9':
                        return view('frontend.multiplication.table-of-9',compact('tableof','tableof_str'));
                    break;
                case '10':
                        return view('frontend.multiplication.table-of-10',compact('tableof','tableof_str'));           
                    break;
                case '11':
                        return view('frontend.multiplication.table-of-11',compact('tableof','tableof_str'));
                    break;
                case '12':
                        return view('frontend.multiplication.table-of-12',compact('tableof','tableof_str'));
                    break;
                case '13':
                        return view('frontend.multiplication.table-of-13',compact('tableof','tableof_str'));
                    break;
                case '14':
                        return view('frontend.multiplication.table-of-14',compact('tableof','tableof_str'));
                    break;
                case '15':
                        return view('frontend.multiplication.table-of-15',compact('tableof','tableof_str'));
                    break;
                case '16':
                        return view('frontend.multiplication.table-of-16',compact('tableof','tableof_str'));
                    break;
                case '17':
                        return view('frontend.multiplication.table-of-17',compact('tableof','tableof_str'));
                    break;
                case '18':
                        return view('frontend.multiplication.table-of-18',compact('tableof','tableof_str'));
                    break;
                case '19':
                        return view('frontend.multiplication.table-of-19',compact('tableof','tableof_str'));
                    break;
                case '20':
                        return view('frontend.multiplication.table-of-20',compact('tableof','tableof_str'));
                    break;
                default:
                    return view('frontend.multiplication.index',compact('tableof','tableof_str'));           
                    break;
            }



         
     }

     public function multiplicationTwoToTwenty($id,$ids)
     {
        $begtableof        = $id;
        $endtableof        = $ids;
        $tableof        = $id;
        $concat  = $id."_".$ids;

        $tableof_str = $id." To ".$ids;
        switch ($concat) {
            case '1_20':
                    return view('frontend.multiplication.tables-1-to-20',compact('tableof','begtableof','endtableof','tableof_str'));
                break;
            case '2_10':
                    return view('frontend.multiplication.tables-2-to-10',compact('tableof','begtableof','endtableof','tableof_str'));
                break;
            case '1_10':
                    return view('frontend.multiplication.tables-1-to-10',compact('tableof','begtableof','endtableof','tableof_str'));
                break;
            case '2_20':
                    return view('frontend.multiplication.tables-2-to-20',compact('tableof','begtableof','endtableof','tableof_str'));
                break;
            case '11_20':
                    return view('frontend.multiplication.tables-11-to-20',compact('tableof','begtableof','endtableof','tableof_str'));
                break;
            default:
                return view('frontend.multiplication.tables-beg-to-end',compact('tableof','begtableof','endtableof','tableof_str'));
                break;
        }
         
     }
}
