<h2> Share On Us</h2>
<ul class="nav social-media">
   <li><a href="#" rel="noopener noreferrer" onclick="window.open('https://www.facebook.com/sharer.php?u='+ encodeURIComponent(document.location.href) +'&t=' + encodeURIComponent(document.title), 'sharer','toolbar=0,status=0,width=700,height=500,resizable=yes,scrollbars=yes');return false;"  data-bs-toggle="tooltip" data-bs-placement="top" title="Share On Facebook" > <img src="{{asset('images/facebook.jpg')}}"  alt="tableof facebook"></a></li>
   <li><a href="#" rel="noopener noreferrer" onclick="window.open('https://twitter.com/intent/tweet?text=Reading%20about%20this:%20'+encodeURIComponent(document.title)+'%20-%20' + encodeURIComponent(document.location.href), 'sharer','toolbar=0,status=0,width=700,height=500,resizable=yes,scrollbars=yes');return false;" data-bs-toggle="tooltip" data-bs-placement="top" title="Share On twitter" > <img src="{{asset('images/twitter.jpg')}}" alt="tableof twitter"></a></li>
   <li><a href="#" rel="noopener noreferrer"  onclick="var script = document.createElement('script');script.setAttribute('type','text/javascript');script.setAttribute('src', 'https://assets.pinterest.com/js/pinmarklet.js');document.getElementsByTagName('head')[0].appendChild(script);return false" data-bs-toggle="tooltip" data-bs-placement="top" title="Share On Pinterest" > <img src="{{asset('images/insta.jpg')}}" alt="tableof instagram" ></a></li>
   <li><a href="#"  rel="noopener noreferrer" onclick="window.open('https://api.whatsapp.com/send?text='+encodeURIComponent(document.location.href), 'sharer','toolbar=0,status=0,width=700,height=500,resizable=yes,scrollbars=yes');return false;" data-bs-toggle="tooltip" data-bs-placement="top" title="Share On WhatsApp" > <img src="{{asset('images/insta.jpg')}}" alt="tableof instagram" ></a></li>

   <li><a href="#" rel="noopener noreferrer"  onclick="window.open('https://www.facebook.com/dialog/send?app_id=105693265587426&link='+encodeURIComponent(document.location.href)+'&redirect_uri='+encodeURIComponent(document.location.href), 'sharer','toolbar=0,status=0,width=850,height=500,resizable=yes,scrollbars=yes');return false;" data-bs-toggle="tooltip" data-bs-placement="top" title="Share On Massenger" > <img src="{{asset('images/insta.jpg')}}" alt="tableof instagram" ></a></li>
   <li><a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Share On instagram" > <img src="{{asset('images/insta.jpg')}}" alt="tableof instagram" ></a></li>
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