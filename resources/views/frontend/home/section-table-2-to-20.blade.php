<div class="row">
    <h1>Table 1 to 20</h1>
</div>

<div class="row">
    <div class="col-md-12">
            @php
                $tableof = 1;
            @endphp
         @for ($i =1; $i <=4; $i++)

            <ul class="tables-row">
                @for ($j =1; $j <=5; $j++)
                <li><a href="{{url('/')}}/multiplication-tables/table-of-{{$tableof}}"> Table of {{$tableof}}</a></li>
                @php
                    $tableof+= 1;
                @endphp
                @endfor  
            </ul>     
                
        @endfor  
         

        <ul class="tables-row">
        <li><a href="{{url('/')}}/multiplication-tables/tables-of-2-to-10">Table of 2 to 10</a></li>
        <li><a href="{{url('/')}}/multiplication-tables/tables-of-2-to-20">Table of 2 to 20</a></li>
        <li><a href="{{url('/')}}/multiplication-tables/tables-of-11-to-20">Table of 11 to 20</a></li>
        </ul>
    </div>
</div>
