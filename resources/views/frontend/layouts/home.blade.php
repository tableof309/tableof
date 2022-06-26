
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="images/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon"/>
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('css/customstyle.css')}}" rel="stylesheet">
    <link href="{{asset('css/tableof-responsive.css')}}" rel="stylesheet">
    
    <title>@yield('title') | {{ config('app.name', 'Welcome') }}</title>
    <meta name="description" content="Tableof.net is a unique platform where students find table up to 500 like Table of 2 to 10 &amp; Table of 2 to 20 with example, multiplication table chart &amp; game.">

    <meta name="Language" content="English"/>
    <meta name="Publisher" content="TableOf"/>
    <meta name="distribution" content="LOCAL"/>
    <meta name="page-topic" content="TableOf">
    <META name="YahooSeeker" content="INDEX, FOLLOW">
    <META name="msnbot" content="INDEX, FOLLOW">
    <meta name="googlebot" content="index,follow"/>
    <META name="allow-search" content="yes">
    <META name="expires" content="never">
     <!--Meta Data Structure-->
     <!--googe add veryfi-->
     <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8673849322443357"
     crossorigin="anonymous"></script>
</head>
<body>

    @include('frontend.layouts.home-menu')
    @yield('content')


    

<footer class="container-fluid">
    <div class="container">
        <div class="col-md-12">
            <div class="row">
                <div class="col-sm-6 col-md-4">
                    <h4>TableOf</h4>
                    <div class="footer-logo">
                        <a href="{{url(app()->getLocale())}}">
                           <img src="{{asset('images/tableof-logo.png')}}">
                        </a>
                    </div>

                    <p>
                    Multiplication Tables, or simply Tables, are a tabular representation of the multiplication of numbers. 
                    </p>
                </div>
                <div class="col-sm-6 col-md-4">

                    <h4>QUICK LINKS</h4>
                    <ul class="footer-links">
                        <li>
                         <a href="#">Test/Quiz</a>
                        </li>
                       
                        <li>
                            <a href="#">Contact Us </a>
                        </li>
                        <li>
                            <a href="#">Privacy Policy</a>
                        </li>
                        <li>
                            <a href="#">Terms & Conditions </a>
                        </li>
                        <li>
                            <a href="#">Disclaimer</a>
                        </li>

                    </ul>
                </div>
                <div class="col-sm-6 col-md-4">
                    <h4>PARTNERS</h4>
                    <ul class="footer-links">
                        <li>
                            <a href="{{url(app()->getLocale())}}" target="_blank">www.table-of.com</a>
                        </li>
                        
                    </ul>
                </div>

            </div>
        </div>

        <div class="row">
            <div class="col-md-12 copyright ">
                All rights reserved @ 2021 <a href="{{url(app()->getLocale())}}">www.table-of.com</a>
            </div>
        </div>
    </div>
</footer>

<script src="{{asset('js/jquery.min.js')}}"> </script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>

    <script>
        $(document).ready(function(){

            $('#getvalue').on('input', function() {
                let getvalue = $('#getvalue').val();

                if ( getvalue.length > 0  ) {
                    $('.remove-text').css("display","block");

                }
                else{
                    $('.remove-text').css("display","none");
                    $('.show-table').css('display','none');
                }
                console.log(getvalue);

            });

            $('.remove-text').click(function(){
                $('.show-table').css('display','none');
                $('#getvalue').val('');
                $(this).hide();

            });

            $('#get_table').click(function(){

                let getvalue = $('#getvalue').val();
                var tableData = "";
                //if(num.length == 0){
                if(getvalue==""){
                    alert("Please Number");
                    $('.show-table').css('display','none');
                    return false

                }
                else if(getvalue>500){
                    alert("Number should be less than 500");
                    return false
                }

                $('.show-table').css('display','block');
                $('.table-data tbody').html(' ');
                $('.table-data span').html(getvalue)

                for(var x = 1; x <= 10; x++){
                    $(".table-data tbody").append(
                        ` <tr>
                <td>${getvalue} x ${x}</td>
                <td>=</td>
                <td>${getvalue*x}</td>
                </tr>`
                    );

                }
                x = 1;
                return false
            });
        });
    </script>
    @yield('pagespecificscripts')


</body>
</html>
