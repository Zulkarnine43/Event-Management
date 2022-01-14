<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cholo Jai</title>

    
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    
    <!-- Font Awesome JS -->
    <script defer src="{{asset('js/solid.js')}}" crossorigin="anonymous"></script>
    <script defer src="{{asset('js/fontawesome.js')}}" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }} ">

    @yield('css')


</head>

<body class='bg-secondary'>
    <div class="container">
        <div class="row">
            
            <section class="col-12">
                {{-- Header start --}}
                <div class="header-top-area-start">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="header-top-left">
                                    <a href="/">Cholo Jai</a>
                                    <a href="#"> Apps Download</a>
                                    <a href="#"> Home</a>
                                    <a href="#"> Venues</a>
                                    <a href="#"> About</a>
                                    @if(session('slogin'))
                                        <a href="{{ route('my-account') }}"> {{session('sxname')}}</a>
                                    @else
                                        <a href="{{ route('my-account') }}"> My Account</a>
                                    @endif

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Header end --}}



                @yield('content')


                <!--Footer area start-->
                <footer class="footer-area-start">
                    <!--Footer content area start-->
                    <div class="footer-content-area-start">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-9 mb-sm-5">
                                    <div class="logo-area">
                                        <a href="index">
                                            <h5><span>Cholo Jai Event Management</span></h5>
                                        </a>
                                    </div>
                                </div>
                                <!--Single footer widget footer menu start-->
                                <div class="col-md-3">

                                    <h5 class="text-info">Get In Touch</h5>
                                    <ul class="footer-menu-touch">
                                        <li><i class="fa fa-map-marker mr-2"></i> Mirpur 13, Dhaka-1216</li>
                                        <li><i class="fa fa-envelope mr-2"></i>dipu@cholo.com</li>
                                        <li><i class="fa fa-phone-square"></i> 016111111111</li>

                                        <li><i class="fa fa-twitter mr-2"></i>Demo twitter</li>
                                    </ul>
                                </div>
                                <!--Single footer widget footer menu end-->
                            </div>
                        </div>
                    </div>
                    <!--Footer content area end-->

                    <!--Footer bottom area start-->
                    <div class="footer-bootom-area-start text-center">
                        <p>&copy; {{ date('Y') }} , All rights reserved Dipu Chakma and ......</a>

                    </div>
                    <!--Footer bottom area end-->
                </footer>
                <!--Footer area end-->

            </section>
        </div>
    </div>

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    @yield('js')

</body>

</html>
