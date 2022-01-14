<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    @yield('meta')

    <title>Cholo Jai Admin</title>
    
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    
    <!-- Font Awesome JS -->
    <script defer src="{{asset('js/solid.js')}}" crossorigin="anonymous"></script>
    <script defer src="{{asset('js/fontawesome.js')}}" crossorigin="anonymous"></script>
    @yield('css')
    <link rel="stylesheet" href="{{ asset('css/admin/admin_panel.css') }}">


</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <img class="babui-logo" src="{{ asset('images/biz/Cholo Jai.png') }}" alt="logo">
        <ul class="nav navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#"><img class="rounded-circle user-img"
                        src="{{ asset('images/user/noimage.jpg') }}" alt="user-img">{{session('zuserfullname')}}</a>
            </li>
        </ul>
    </nav>
    <div class="wrapper">
        <!-- Sidebar Holder -->
        <nav id="sidebar">
            <a class="nav-link" href="#"><img class="rounded-circle user-img"
                    src="{{ asset('images/user/noimage.jpg') }}" alt="user-img">{{session('zuserfullname')}}</a>
            <small class="ml-5"><i class="fas fa-circle  mr-2 text-success"></i>Online</small>

            <ul class="list-unstyled components left-side-bar"> 
                <li class="active">
                    <a href="#dashboard" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-home"></i> Orders</a>
                    <ul class="collapse list-unstyled" id="dashboard">
                        <li>
                            <a href="{{ route('show-order') }}"><i class="fas fa-circle"></i> Show Orders</a>
                        </li>
                    </ul>
                </li>

                <li class="active">
                    <a href="#create-event" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-calendar-alt"></i> Create Events</a>
                    <ul class="collapse list-unstyled" id="create-event">
                        <li>
                            <a href=" {{ route('create-natok') }}"><i class="fas fa-circle"></i> create Natok</a>
                        </li>
                        <li>
                            <a href=" {{ route('create-concert') }}"><i class="fas fa-circle"></i> create Concert</a>
                        </li>
                        <li>
                            <a href=" {{ route('create-fashion') }}"><i class="fas fa-circle"></i> create Fashion</a>
                        </li>
                        <li>
                            <a href="{{ route('create-internation') }}"><i class="fas fa-circle"></i> create Internation Convo</a>
                        </li>
                    </ul>
                </li>

                <li class="active">
                    <a href="#upcoming" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-calendar-plus"></i> Upcoming Event List</a>
                    <ul class="collapse list-unstyled" id="upcoming">
                        <li>
                            <a href=" {{ route('natok-list') }}"><i class="fas fa-circle"></i> Show Natok</a>
                        </li>
                        <li>
                            <a href=" {{ route('concert-list') }}"><i class="fas fa-circle"></i> Show Concert</a>
                        </li>
                        <li>
                            <a href="{{ route('fashion-list') }}"><i class="fas fa-circle"></i> Show Fashion</a>
                        </li>
                        <li>
                            <a href="{{ route('internation-list') }}"><i class="fas fa-circle"></i> Show Internation Convo</a>
                        </li>
                        
                    </ul>
                </li>
                <li class="active">
                    <a href="#setting" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-user"></i> Message Box</a>
                    <ul class="collapse list-unstyled" id="setting">
                        <li>
                            <a href="{{ route('message-list') }}"><i class="fas fa-circle"></i>Messages</a>
                        </li>
                        
                    </ul>
                </li>

                <li class="active">
                    <a href="#setting" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-user"></i> Setting</a>
                    <ul class="collapse list-unstyled" id="setting">
                        <li>
                            <a href="admin-logout"><i class="fas fa-circle"></i> Logout</a>
                        </li>
                        
                    </ul>
                </li>

            </ul>
        </nav>

        <!-- Page Content Holder -->
        <div id="content">
            {{-- Here will fit main content --}}
            <div class="main_content">
                @yield('main_content')
            </div>

        </div>
    </div>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    {{-- this js --}}
    @yield('js')


</body>

</html>
