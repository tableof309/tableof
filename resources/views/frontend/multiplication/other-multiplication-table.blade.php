<h2> Follow Us</h2>
<ul class="nav social-media">
   <li><a href="#"> <img src="{{asset('images/facebook.jpg')}}" alt="tableof facebook"></a></li>
   <li><a href="#"> <img src="{{asset('images/twitter.jpg')}}" alt="tableof twitter"></a></li>
   <li><a href="#"> <img src="{{asset('images/insta.jpg')}}" alt="tableof instagram" ></a></li>
</ul>
<h2>Learn other Multiplication tables below</h2>
<ul class="nav other-tables">
   @for ($i =1; $i <=20; $i++)
   @if($i!=$tableof)
   <li><a href="{{url('/')}}/multiplication-tables/table-of-{{$i}}"> Table of {{$i}}</a></li>
   @endif
   @endfor
   <li><a href="{{url('/')}}/multiplication-tables/tables-of-1-to-10">Table of 1 to 10</a></li>
   <li><a href="{{url('/')}}/multiplication-tables/tables-of-2-to-20">Table of 2 to 20</a></li>
   <li><a href="{{url('/')}}/multiplication-tables/tables-of-11-to-20">Table of 11 to 20</a></li>
</ul>