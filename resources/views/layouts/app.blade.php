<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Home | ZescoUnitsConverter</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

{{--    //add Jquery--}}
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>


    <!--Google Ads-->
<script data-ad-client="ca-pub-8016621065567450" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!--End Google Ads-->


<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5f8607eb2901b92076932338/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">

                <a class="navbar-brand" href="{{ url('/') }}">UnitsConverter |
                    <img src="images/logos/zesco.png" class="rounded-circle" style="height: 50px;">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="#">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="#">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
        <!-- Footer -->
        <footer class="page-footer font-small bg-transparent">

            <!-- Copyright -->
            <div class="footer-copyright text-center py-3 fixed-bottom">© 2020 Copyright:
                <a href="https://danielngandu.com/"> Daniel Ng`andu & Jethro Mwanza</a>
            </div>
            <!-- Copyright -->

        </footer>
        <!-- Footer -->
    </div>
    <script>
        $(document).ready(function() {

            //populate clients details
            $("#amount").on('keyup',function () {
                var amount = $("#amount").val();
                var vat = 0.00;
                var excise = 0.00;
                var totalTax =0.00;
                var amountAfterTax =0.00;
                var units =0.00;
                //calculate tax here
                vat = amount * 0.16;
                excise = amount * 0.03;
                totalTax = vat + excise;
                amountAfterTax = amount - totalTax;
                //populate fields
                $('#vat').val(vat);
                $('#excise').val(excise);
                $('#totalTax').val(totalTax);
                $('#amountAfterTax').val(amountAfterTax);
                //get repsonse after calculation from server side
                $.ajax({
                    type: 'GET',
                    url: '/getUnits1/'+amount,
                    dataType: 'json',
                    success: function (data) {

                    // console.log(data.units)
                        //populate field with units
                        $('#units').val(data.units1);
                    }
                });



            });


            //2nd purchase
            $("#v-pills-2ndpurchase-tab").on('shown.bs.tab',function () {
                $("#amount2").on('keyup',function () {
                    var amount = $("#amount2").val();
                    var vat = 0.00;
                    var excise = 0.00;
                    var totalTax =0.00;
                    var amountAfterTax =0.00;
                    var units =0.00;
                    //calculate tax here
                    vat = amount * 0.16;
                    excise = amount * 0.03;
                    totalTax = vat + excise;
                    amountAfterTax = amount - totalTax;
                    //populate fields
                    $('#vat2').val(vat);
                    $('#excise2').val(excise);
                    $('#totalTax2').val(totalTax);
                    $('#amountAfterTax2').val(amountAfterTax);
                    //get repsonse after calculation from server side
                    $.ajax({
                        type: 'GET',
                        url: '/getUnits2/'+amount,
                        dataType: 'json',
                        success: function (data) {

                            // console.log(data.units)
                            //populate field with units
                            $('#units2').val(data.units2);
                        }
                    });

                });

            });

            //3 or more purchases
            $("#v-pills-3rdpluspurchase-tab").on('shown.bs.tab',function () {
                $("#amount3").on('keyup',function () {
                    var amount = $("#amount3").val();
                    var vat = 0.00;
                    var excise = 0.00;
                    var totalTax =0.00;
                    var amountAfterTax =0.00;
                    var units =0.00;
                    //calculate tax here
                    vat = amount * 0.16;
                    excise = amount * 0.03;
                    totalTax = vat + excise;
                    amountAfterTax = amount - totalTax;
                    //populate fields
                    $('#vat3').val(vat);
                    $('#excise3').val(excise);
                    $('#totalTax3').val(totalTax);
                    $('#amountAfterTax3').val(amountAfterTax);
                    //get repsonse after calculation from server side
                    $.ajax({
                        type: 'GET',
                        url: '/getUnits3/'+amount,
                        dataType: 'json',
                        success: function (data) {

                            // console.log(data.units)
                            //populate field with units
                            $('#units3').val(data.units3);
                        }
                    });

                });

            });



            $("#unitstokwacha-tab").on('shown.bs.tab',function () {
                // alert("Hello");
                $("#units1").on('keyup',function () {
                    // alert("Hello");
                    var units = $("#units1").val();
                    //get repsonse after calculation from server side
                    $.ajax({
                        type: 'GET',
                        url: '/getAmount/'+units,
                        dataType: 'json',
                        success: function (data) {
                            //populate field with units
                            $('#expectedamount').val(data.amount);
                        }
                    });



                });

            });

        });


    </script>

</body>
{{--Developed by: Daniel Ng`andu--}}
</html>
