@extends('frontend.layouts.home')
@section('meta_title','Best online Multiplication Table Learning Portal here With Table-of')
@section('meta_keyword','multiplication table, table of 1, table of 2, table game, multiplication table game, table of 3, table 4, table of 5, table of 6, table of 7, table of 8, table of 9, table of 10')
@section('meta_description','Come and learn your multiplication tables. Improve with the set of plan, the temprory test, multiplication games, printable worksheets with Interesting way')
@section('content')
<style type="text/css">
   .sitemaps a {
    color: #000000;
    
}
.sitemaps a:hover {
    color: #e6b440;
}
</style>
<section class="container-fluid">
   <div class="container">
      <div class="row pt-4 pb-4">
         <div class="col-sm-12 sitemaps">
         <h2>Site Map</h2>
         <hr>
         <h3>Table of 1 to 20</h3>
         <p class="mb-1">
            @for ($i =1; $i <=20; $i++)
               <a href="{{url('/')}}/multiplication-tables/table-of-{{$i}}"> Table of {{$i}}</a>
            @endfor
         </p>
         <h3>Table of 2 to 10</h3>
         <p class="mb-1">
            @for ($i =2; $i <=10; $i++)
               <a href="{{url('/')}}/multiplication-tables/table-of-{{$i}}"> Table of {{$i}}</a>
            @endfor
         </p>
         <h3>Table of 2 to 20</h3>
         <p class="mb-1">
            @for ($i =2; $i <=20; $i++)
               <a href="{{url('/')}}/multiplication-tables/table-of-{{$i}}"> Table of {{$i}}</a>
            @endfor
         </p>
         <h3>Table of 11 to 20</h3>
         <p class="mb-1">
            @for ($i =11; $i <=20; $i++)
               <a href="{{url('/')}}/multiplication-tables/table-of-{{$i}}"> Table of {{$i}}</a>
            @endfor
         </p>
         <h3>Table of 20 to 1000+</h3>
         <p class="mb-1">
            @for ($i =22; $i <=10001; $i++)
               <a href="{{url('/')}}/multiplication-tables/table-of-{{$i}}"> Table of {{$i}}</a>
            @endfor
         </p>
      </div>
      </div>
   </div>
</section>
@endsection('content')