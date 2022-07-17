@extends('frontend.layouts.home')
@section('meta_title')
table of {{$begtableof }} to {{$endtableof }}  | Learn Multiplication Table of {{$begtableof }} to {{$endtableof }}  Maths | from {{$begtableof }} to {{$endtableof }} Times Table
@endsection('meta_title')
@section('meta_keyword')
table of {{$begtableof }} to {{$endtableof }}, {{$begtableof }} to {{$endtableof }} times table, {{$begtableof }} to {{$endtableof }} multiplication table, {{$begtableof }} to {{$endtableof }} table, {{$begtableof }}th to {{$endtableof }}th table maths, {{$begtableof }}th to {{$endtableof }}th table @endsection('meta_keyword')
@section('meta_description')
Come and learn your multiplication table of {{$begtableof }} to {{$endtableof }}. Learn Table from  {{$begtableof }} to {{$endtableof }} and memorize on your fingertips. Understand the tricks to learn  {{$begtableof }} to {{$endtableof }} table in an easy way at  table-of.com
@endsection('meta_description')
@section('content')
<div class="container inner-page-wrap">
<div class="row">
   <div class="col-md-8">
      <h1>Tables {{$begtableof }} to {{$endtableof }}</h1>
      <div class="col-md-12">
         <div class="row">
            <p><strong>Tables {{$begtableof }} to {{$endtableof }}</strong> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
            </p>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged..</p>
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
                        <h2>Maths Tables {{$begtableof }} to {{$endtableof }} Tricks</h2>
                     </div>
                     <div class="card-body">
                        <div class="row p-0">
                            
                           <div class="col-sm-12">
                              <ul>
                                 <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
                                 <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</li>
                                 <li>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</li>
                                 <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
                                 <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</li>
                                 <li>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</li>
                                  
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <h2>Multiplication Table of {{$tableof}} chart</h2>
            <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged Table of {{$tableof}} chart.</p>
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
               <h2> Table of 
                  <select id="game_table">

                      @for ($i =$begtableof; $i <=$endtableof; $i++)
                        @if($i==1)
                           @php
                              $tableof = $i;
                           @endphp

                        @endif

                     <option value="{{$i}}">{{$i}}</option>
                      @endfor
                  </select>
                practice game online</h2>
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

      $("#game_table").on('change',function(){
            var valuefirst = $(this).val();
            $('.tableNum').text(valuefirst);
         });
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