@extends('frontend.layouts.home')
@section('meta_title')
Table of {{$tableof }} | Multiplication Table for {{$tableof }}  Maths | {{$tableof }} Times Table
@endsection('meta_title')
@section('meta_keyword')
table of {{$tableof }}, {{$tableof }} times table, {{$tableof }} multiplication table, {{$tableof }} table, {{$tableof }}th table maths, {{$tableof }}th table @endsection('meta_keyword')
@section('meta_description')
Come and learn your multiplication table of {{$tableof }} . Learn Table of  {{$tableof }} and memorize on your fingertips. Understand the tricks to learn  {{$tableof }} table in an easy way at  table-of.com
@endsection('meta_description')
@section('content')
<div class="container inner-page-wrap">
<div class="row">
   <div class="col-md-8">
      <h1>Table of {{$tableof}}</h1>
      <div class="col-md-12">
         <div class="row">
            <p><strong>The Table of {{$tableof}}</strong>. Here we have explain {{$tableof}} times table for easy way calculation in Maths. Multiplication Table of 12 for teaching kids the concept of multiplication.</p>
            <h2>{{$tableof}} Times Table up to 20</h2>
            <div class="table-responsive tablefortable">
               <table class="table table-hover table-bordered ">
                  <tbody>
                     <tr>
                        <td colspan="100"><strong>{{$tableof}} Times table </strong></td>
                     </tr>
                     @for ($i =1; $i <=10; $i++)
                     <tr>
                        @for($j=0;$j<=1;$j++)
                        <td>{{$tableof}} × {{$i+($j*10)}} = {{$tableof*($i+($j*10))}}</td>
                        @endfor
<!--                         <td>{{$tableof}} × {{$i+10}} = {{$tableof*($i+10)}}</td>
 -->                     </tr>
                     @endfor
                  </tbody>
               </table>
            </div>
            <h2>{{$tableof}} Times Table up to 50</h2>
            <div class="table-responsive tablefortable">
               <table class="table table-hover table-bordered ">
                  <tbody>
                     <tr>
                        <td colspan="100"><strong>{{$tableof}} Times table </strong></td>
                     </tr>
                     @for ($i =1; $i <=10; $i++)
                     <tr>
                         @for($j=0;$j<=4;$j++)
                        <td>{{$tableof}} × {{$i+($j*10)}} = {{$tableof*($i+($j*10))}}</td>
                        @endfor
                     </tr>
                     @endfor
                  </tbody>
               </table>
            </div>
            <h2>Multiplication Table of {{$tableof}} Concept</h2>
            <p>{{$tableof}} Table: Multiplication tables help students/kids solve mathematical problems effortlessly. It is essential for students from classes 6 to 12 to learn and practice multiplication tables from 1-12. On this page, we have provided students with the multiplication table of {{$tableof}}  up to 50. Students who are in search of {{$tableof}}  Table can refer to this page.</p>
            <h2>Multiplication Table of {{$tableof}} chart</h2>
            <a href="{{asset('storage/table-of-'.$tableof.'.png')}}" download="table-of-{{$tableof}}.png">
               <img src="{{asset('storage/table-of-'.$tableof.'.png')}}" class="img-fluid img-thumbnail" alt="table of {{$tableof}} "/>
               <figcaption class="attachment__caption attachment__caption--edited">Free download Table of {{$tableof}} Chart</figcaption>
            </a>
            <p></p>
            <div class="row">
               <div class="col-sm-12  col-xs-12">
               <div >
                  Now we will learn how to do forward counting and backward counting by {{$tableof}}’s.
               </div>
               
               </div>
            </div>
            <br>
            <div class="row">
               <div class="col-sm-12  col-xs-12">
               <div >
                  <span style="font-weight: 800;color: #218128;">Forward counting by {{$tableof}}’s: </span>  
                  @for ($i =0; $i <=25; $i++)
                   {{$tableof*$i}},
                        
                     @endfor ……
               </div>
               
               </div>
            </div>
            <br>
            <div class="row">
               <div class="col-sm-12  col-xs-12">
               <div >
                  <span style="font-weight: 800;color: #218128;">Backward counting by {{$tableof}}’s: </span>  
                  @for ($i =25; $i >=0; $i--)
                   {{$tableof*$i}},
                        
                     @endfor ……
               </div>
               
               </div>
            </div>
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
                              <a class="btn btn-link" href="{{url('/')}}/multiplication-tables/table-of-{{$i}}"> Table of {{$i}}</a>
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
            <div class="row">
               <div class="col-sm-12  col-xs-12">
               <div >
                  <a class=" text-xs-center next-prev-button float-start" href="{{url('/')}}/multiplication-tables/table-of-{{$tableof-1}}">Previous&nbsp;Table</a>   
               </div>
               <div >
                  <a class="text-xs-center next-prev-button float-end" href="{{url('/')}}/multiplication-tables/table-of-{{$tableof+1}}">Next&nbsp;Table</a>   
               </div>
               </div>
            </div>
         </div>
         @include('frontend.pages.disclaimer')
      </div>
      </div>
      <div class="col-md-4">
         @include('frontend.multiplication.other-multiplication-table')
      </div>
   </div>
</div>
@endsection
@section('pagespecificscripts')
<script  defer>
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