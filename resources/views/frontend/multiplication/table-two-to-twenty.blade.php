@extends('frontend.layouts.home')
@section('title','Home')
@section('content')
<div class="container inner-page-wrap">
<div class="row">
   <div class="col-md-8">
      <h1>Tables 2 to 20</h1>
      <div class="col-md-12">
         <div class="row">
            <p><strong>Tables 2 to 20</strong> make multiplication extremely effortless and increases your problem-solving abilities. Even with the availability of calculators, memorizing the multiplication tables from 2 to 20 still remains an extremely powerful tool. Therefore, if you want to reduce your stress while doing math calculations of multiplication, fractions, ratios, and division you must recognize the numbers in the multiplication tables.</p>
            <p>So, here is the solution for you. In this mini-lesson, you will learn multiplication tables from 2 to 20. Along with these multiplication tables, you will be provided all sorts of tips and tricks for quick and easy calculations. We have also provided printable multiplication tables 2 to 20 to assist students in prioritizing and planning their revision.</p>
            @for ($m =1; $m <=20; $m+=5)
               @php
                  $fromTable = ($m==1)?2:$m;
                  $toTable   =  $m+4;
               @endphp
               <h2>Tables from {{$fromTable}} to {{$toTable}}</h2>
               <div class="table-responsive tablefortable">
                  <table class="table table-hover table-bordered ">
                     <tbody>
                        @for ($i =0; $i <=10; $i++)
                           @if($i==0)
                           <tr>
                              @for ($j =$fromTable; $j <=$toTable; $j++)
                              <td>Table of {{$j}}</td>
                              @endfor
                              </tr>
                              @else
                              <tr>
                              @for ($k =$fromTable; $k <=$toTable; $k++)
                              <td>{{$k}} × {{$i}} = {{$k*$i}}</td>
                              @endfor
                           </tr>
                           @endif
                        @endfor
                     </tbody>
                  </table>
               </div>
            @endfor
            <div class="row ">
               <div class="col-sm-12">
                  <div class="card p-0">
                     <div class="card-header">
                        <h2>Maths Tables 2 to 20 Tricks</h2>
                     </div>
                     <div class="card-body">
                        <div class="row p-0">
                            
                           <div class="col-sm-12">
                              <ul>
                                 <li>Every number in multiplication table 2 to 20 is a whole number.</li>
                                 <li>Table of 2 follows the pattern of 2, 4, 6, 8, 0 at one's digit place.</li>
                                 <li>In the table of 5, the last digit of the multiples is either 0 or 5.</li>
                                 <li>Multiplying an even number by 6 gives the same even number as the last digit in the product. For example, 6 × 4 = 24 , 6 × 6 = 36 , 6 x 8 = 48.</li>
                                 <li>You can also refer to the 16 times tables and 18 times table to get the 17 times table. In the 18 times table, we subtract natural numbers (1 to 10) from the multiples of 18 and in the 16 times table, we add natural numbers (1-10) to the multiples of 16 to get the 17 times table.</li>
                                 <li>Table of 19 has a pattern for every ten multiples. Write the 1st 10 odd numbers in a sequence in the ten's place. Now from the reverse side, start writing the numbers from 0 to 9 in the unit's place.</li>
                                 <li>To memorize the 20 times table, you need to memorize the 2 times table. Add 0 to the unit's place in the multiples of 2 to obtain the multiples of 20.</li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <h2>Multiplication Table of {{$tableof}} chart</h2>
            <p>Students would find this {{$tableof}} table chart interesting to read and learn. Student can download complete free online Table of {{$tableof}} chart.</p>
            <p></p>
            <a href="{{asset('storage/jn4riL9N3ayIdWNCZke7o1MOn57isSKRjJUYM4g8.jpg')}}">
               <img src="{{asset('storage/jn4riL9N3ayIdWNCZke7o1MOn57isSKRjJUYM4g8.jpg')}}" width="750" height="469">
               <figcaption class="attachment__caption attachment__caption--edited">Free download Table of {{$tableof}} Chart</figcaption>
            </a>
            <p></p>
            <h2>How to read &amp; write {{$tableof}} Times Table</h2>
            <div class="table-responsive">
               <table class="table table-bordered  write-method text-center table-hover">
                  <thead>
                     <tr>
                        <th style="font-size:18px"> Method to read</th>
                        <th style="font-size:18px"> Method to write</th>
                     </tr>
                  </thead>
                  <tbody style="border:0;">
                     @php
                     $methodtoread = getMethodToRead();
                     @endphp
                     @for ($i =1; $i <=10; $i++)
                     <tr>
                        <td>{{$tableof}} × {{$methodtoread[$i]}}s are {{$tableof*$i}}</td>
                        <td>{{$tableof}} × {{$i}} = {{$tableof*($i)}}</td>
                     </tr>
                     @endfor
                  </tbody>
               </table>
            </div>
            <div class="coplet-table table-responsive">
               <table class="table-bordered">
                  <thead>
                     <tr>
                        <th>{{$tableof}} Table</th>
                        <th>How many are there?</th>
                     </tr>
                  </thead>
                  <tbody>
                     @for ($i =1; $i <=10; $i++)
                     <tr>
                        <td>{{$tableof}} × {{$i}} = {{$tableof*$i}}</td>
                        <td>
                           @for($j =1; $j <=$i; $j++)
                           {{ ($j==1) ? '' : '+' }} {{$tableof}}
                           @endfor
                           ={{$tableof*$i}}
                        </td>
                     </tr>
                     @endfor
                  </tbody>
               </table>
            </div>

            <div class="row ">
               <div class="col-sm-12">
                  <div class="card p-0">
                     <div class="card-header">
                        <h2>Find More Maths Tables</h2>
                     </div>
                     <div class="card-body">
                        <div class="row p-0">
                           @for ($i =1; $i <=20; $i++)
                           @if($i != $tableof)
                           <div class="col-sm-4">
                              <a class="btn btn-link" href="{{url('/')}}/multiplication-tables/table-of/{{$i}}"> Table of {{$i}}</a>
                           </div>
                           @endif
                           @endfor
                           <div class="col-sm-4">
                              <a class="btn btn-link" href="{{url('/')}}/multiplication-tables/tables-of-2-to-10">Table of 2 to 10</a>
                           </div>
                           <div class="col-sm-4">
                              <a class="btn btn-link" href="{{url('/')}}/multiplication-tables/tables-of-2-to-20">Table of 2 to 20</a>
                           </div>
                           <div class="col-sm-4">
                              <a class="btn btn-link" href="{{url('/')}}/multiplication-tables/tables-of-1-to-20">Table of 1 to 20</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row table-test-wrap">
               <h2> Table of {{$tableof}} practice game online</h2>
               <div class="col-md-6">
                  <ul>
                     @for ($i =1; $i <=5; $i++)
                     <li class="row clear">
                        <label class="col-1-2">
                        <span class="tableNum">  {{$tableof}}</span> x <span class="numb"> {{$i}}</span> =
                        </label>
                        <div class="col-1-2 tableinput">
                           <input type="number" class="getNumb">
                        </div>
                     </li>
                     @endfor
                  </ul>
               </div>
               <div class="col-md-6">
                  <ul>
                     @for ($i =6; $i <=10; $i++)
                     <li class="row clear">
                        <label class="col-1-2">
                        <span class="tableNum"> {{$tableof}}</span> x <span class="numb"> {{$i}}</span> =
                        </label>
                        <div class="col-1-2 tableinput">
                           <input type="number" class="getNumb">
                        </div>
                     </li>
                     @endfor
                  </ul>
               </div>
               <div class="col-md-12">
                  <div class="row table-result">
                     You got <span class="tottle-num"> 0</span>/<span class="tottle-que">10</span> Questions.
                  </div>
                  <div class="row form-btn-wrap">
                     <a class="check-ans-reset" href="{{url('/')}}">More Quiz</a>
                     <button class="check-ans-reset"> Reset</button>
                     <button class="check-ans"> Submit Answer</button>
                  </div>
               </div>
            </div>
         </div>
         <div class="disclaimer-all-page">
            <h3> Disclaimer </h3>
            <p class="mb-1">
               While every effort has been done in developing this calculator, we are not accountable for any
               incidental or consequential damages arising from
               the use of the calculator tools on our web site. These tools serve to visitors as a free
               calculator tool. Please use at your own risk.
               The calculations provided are just a guide. You are advised to speak to a professional financial
               advisor before taking any financial decision. 
            </p>
         </div>
      </div>
      </div>
      <div class="col-md-4">
         @include('frontend.multiplication.other-multiplication-table')
      </div>
   </div>
</div>
@endsection
@section('pagespecificscripts')
<script>
   $(document).ready(function(){
          $(".getNumb").keyup(function(event) {
              if (event.keyCode === 13) {
                  $(".check-ans").click();
              }
          });
          let tottlerow = $('.getNumb').length;
          $(".tottle-que").html(tottlerow);
   
          $('.check-ans').click(function(){
   
              $('.table-test-wrap li').each(function(){
                  const self=$(this)
                  let tableN = parseInt (self.find('.tableNum').text());
                  let numb1 = parseInt (self.find('.numb').text())
                  let answer = parseInt (self.find('.getNumb').val());
                  //    quest = tableN*numb1;
   
                  if(tableN*numb1 == answer){
                      self.find(".tableinput").removeClass('wrong-table');
                      self.find(".tableinput").addClass('right-table');
   
                  }
                  else {
                      self.find(".tableinput").removeClass('right-table');
                      self.find(".tableinput").addClass('wrong-table');
                      // $(this).find(".wrong-table").html(quest);
   
                  }
   
   
   
              });
   
              let clsslength = $('.right-table').length;
              $(".tottle-num").html(clsslength);
              //  alert(clsslength);
              let tottlerow = $('.getNumb').length;
              $(".tottle-que").html(tottlerow);
   
   
          });
   
          $("button.check-ans-reset").click(function(){
              $('.getNumb').val(' ');
              $(".tableinput").removeClass('right-table');
              $(".tableinput").removeClass('wrong-table');
              $('.tottle-num').html('0');
   
          });
      })
</script>
@endsection('pagespecificscripts')