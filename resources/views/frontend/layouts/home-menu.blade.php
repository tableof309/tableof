<section class="container-fluid header-top">
    <div class="container">
        <div class="col-md-12">
            <div class="row">
                <nav class="navbar navbar-expand-lg navbar-light ">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="{{url('/')}}"><img src="{{asset('images/tableof-logo.png')}}" style="width: 100px;" alt="Table of"/></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                            <div class="navbar-nav">

                                <li class="nav-item">
                                    <a class="active" href="{{url('/')}}">Home</a>
                                </li>
                                
                                <li class="nav-item dropdown">
                                    
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Table 1 to 20
                                      </a>
                                      <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

                                         @php
                                            $tableof1 = 1;
                                        @endphp
                                     @for ($i =1; $i <=4; $i++)

                                        
                                            @for ($j =1; $j <=5; $j++)
                                            <li><a class="dropdown-item" href="{{url('/')}}/multiplication-tables/table-of-{{$tableof1}}"> Table of {{$tableof1}}</a></li>
                                            
                                            @php
                                                $tableof1+= 1;
                                            @endphp
                                            @endfor  
                                        @endfor

                                         
                                    </ul>
                                    
                                </li>
                                
                                <li class="nav-item">
                                    <a class=" " href="{{url('/')}}/multiplication-tables/tables-of-2-to-10">Table of 2 to 10 </a>
                                </li>
                                <li class="nav-item">
                                    <a class=" " href="{{url('/')}}/multiplication-tables/tables-of-2-to-20">Table of 2 to 20 </a>
                                </li>
                                <li class="nav-item">
                                    <a class=" " href="{{url('/')}}/multiplication-tables/tables-of-11-to-20">Table of 11 to 20 </a>
                                </li>
                                <li class="nav-item">
                                    <a class=" " href="{{url('/')}}/about-us">About </a>
                                </li>
                                <li class="nav-item">
                                    <a class=" " href="{{url('/')}}/contact-us">Contact </a>
                                </li>

                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>

        @include('frontend.layouts.home-search')

    </div>
</section>