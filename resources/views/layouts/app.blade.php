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
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>


    <!--Google Ads-->
    <script data-ad-client="ca-pub-8016621065567450" async
            src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <!--End Google Ads-->


    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
        (function () {
            var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/5f8607eb2901b92076932338/default';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->
    <style>
        .site-footer {
            padding: 45px 0 20px;
            font-size: 15px;
            line-height: 24px;
        }

        .site-footer hr {
            border-top-color: #bbb;
            opacity: 0.5
        }

        .site-footer hr.small {
            margin: 20px 0
        }

        .site-footer h6 {
            color: #fff;
            font-size: 16px;
            text-transform: uppercase;
            margin-top: 5px;
            letter-spacing: 2px
        }

        .site-footer a {
            color: #737373;
        }

        .site-footer a:hover {
            color: #3366cc;
            text-decoration: none;
        }

        .footer-links {
            padding-left: 0;
            list-style: none
        }

        .footer-links li {
            display: block
        }

        .footer-links a {
            color: #737373
        }

        .footer-links a:active, .footer-links a:focus, .footer-links a:hover {
            color: #3366cc;
            text-decoration: none;
        }

        .footer-links.inline li {
            display: inline-block
        }

        .site-footer .social-icons {
            text-align: right
        }

        .site-footer .social-icons a {
            width: 40px;
            height: 40px;
            line-height: 40px;
            margin-left: 6px;
            margin-right: 0;
            border-radius: 100%;
            background-color: #33353d
        }

        .copyright-text {
            margin: 0
        }

        @media (max-width: 991px) {
            .site-footer [class^=col-] {
                margin-bottom: 30px
            }
        }

        @media (max-width: 767px) {
            .site-footer {
                padding-bottom: 0
            }

            .site-footer .copyright-text, .site-footer .social-icons {
                text-align: center
            }
        }

        .social-icons {
            padding-left: 0;
            margin-bottom: 0;
            list-style: none
        }

        .social-icons li {
            display: inline-block;
            margin-bottom: 4px
        }

        .social-icons li.title {
            margin-right: 15px;
            text-transform: uppercase;
            color: #96a2b2;
            font-weight: 700;
            font-size: 13px
        }

        .social-icons a {
            background-color: #eceeef;
            color: #818a91;
            font-size: 16px;
            display: inline-block;
            line-height: 44px;
            width: 44px;
            height: 44px;
            text-align: center;
            margin-right: 8px;
            border-radius: 100%;
            -webkit-transition: all .2s linear;
            -o-transition: all .2s linear;
            transition: all .2s linear
        }

        .social-icons a:active, .social-icons a:focus, .social-icons a:hover {
            color: #fff;
            background-color: #29aafe
        }

        .social-icons.size-sm a {
            line-height: 34px;
            height: 34px;
            width: 34px;
            font-size: 14px
        }

        .social-icons a.facebook:hover {
            background-color: #3b5998
        }

        .social-icons a.twitter:hover {
            background-color: #00aced
        }

        .social-icons a.linkedin:hover {
            background-color: #007bb6
        }

        .social-icons a.dribbble:hover {
            background-color: #ea4c89
        }

        @media (max-width: 767px) {
            .social-icons li.title {
                display: block;
                margin-right: 0;
                font-weight: 600
            }
        }


        /*    background color*/
        body {
            background: #BBD2C5;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #536976, #BBD2C5);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #536976, #BBD2C5); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */



        }

        div.card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            text-align: center;
        }
    </style>
</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">

            <a class="navbar-brand" href="{{ url('/') }}">UnitsConverter |
                <img src="images/logos/zesco.png" class="rounded-circle" style="height: 50px;">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
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
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
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
    <!-- Site footer -->
    <footer class="site-footer">
        <br/>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <h2 class="lead text-left" style=" color: white;">About</h2>
                    <p class="text-justify" style=" color: white;">A simple units converter to help residential households to easily predict
                        the units or amount of money
                        needed to be allocated in a months on electricity, thus no more guess work trying to figure out
                        how many units x Kwacha will buy. And the best part, its Free!
                        Feedback is highly appreciated. Contact us for more solutions like this and more.
                    </p>
                </div>
            </div>
            <hr>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-6 col-xs-12">
                    <p class="copyright-text" style=" color: white;">© 2020 Copyright:
                        <a href="https://danielngandu.com/" style="color: blue;"> Daniel Ng`andu & Jethro Mwanza</a>
                    </p>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    {{-- version: iteration number.day.month.year--}}
                    <p>Version 2.14.10.2020</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer -->
</div>
<script>
    $(document).ready(function () {

        //populate clients details
        $("#amount").on('keyup', function () {
            var amount = $("#amount").val();
            var vat = 0.00;
            var excise = 0.00;
            var totalTax = 0.00;
            var amountAfterTax = 0.00;
            var units = 0.00;
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
                url: '/getUnits1/' + amount,
                dataType: 'json',
                success: function (data) {

                    // console.log(data.units)
                    //populate field with units
                    $('#units').val(data.units1);
                }
            });


        });


        //2nd purchase
        $("#v-pills-2ndpurchase-tab").on('shown.bs.tab', function () {
            $("#amount2").on('keyup', function () {
                var amount = $("#amount2").val();
                var vat = 0.00;
                var excise = 0.00;
                var totalTax = 0.00;
                var amountAfterTax = 0.00;
                var units = 0.00;
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
                    url: '/getUnits2/' + amount,
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
        $("#v-pills-3rdpluspurchase-tab").on('shown.bs.tab', function () {
            $("#amount3").on('keyup', function () {
                var amount = $("#amount3").val();
                var vat = 0.00;
                var excise = 0.00;
                var totalTax = 0.00;
                var amountAfterTax = 0.00;
                var units = 0.00;
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
                    url: '/getUnits3/' + amount,
                    dataType: 'json',
                    success: function (data) {

                        // console.log(data.units)
                        //populate field with units
                        $('#units3').val(data.units3);
                    }
                });

            });

        });


        $("#unitstokwacha-tab").on('shown.bs.tab', function () {
            // alert("Hello");
            $("#units1").on('keyup', function () {
                // alert("Hello");
                var units = $("#units1").val();
                //get repsonse after calculation from server side
                $.ajax({
                    type: 'GET',
                    url: '/getAmount/' + units,
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
