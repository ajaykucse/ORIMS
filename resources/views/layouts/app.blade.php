<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/gif/png" href="_/images/url.ico">
    <!-- CSRF Token -->
    <title>Admin|Profile</title>
    <!-- Styles -->
    <link href="{{asset('custom-css/style.css')}}" rel="stylesheet" />
     <link href="{{asset('custom-css/bootstrap.min.css')}}" rel="stylesheet" />
     <link href="{{asset('custom-css/font-awesome.min.css')}}" rel="stylesheet" />
     <script src="{{asset('custom-css/bootstrap.min.js')}}"></script>
     <script src="{{asset('custom-js/jquery.min.js')}}"></script>
    <!-- Scripts -->
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-inverse navbar-static-top">
            <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="{{URL::to('')}}"">
                        ORIMS
                </a>
                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    
                </div>
                <a class="navbar-brand" href="{{URL::to('/dashboard')}}"">
                         Home 
                </a>
                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{URL::to('/signin')}}"><i class="fa fa-btn fa-sign-out"></i> Login </a></li>
                            <li><a href="{{URL::to('/registation')}}"><i class="fa fa-btn fa-user"></i> Register </a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="position:relative; padding-left:50px;">
                                    <img src="/uploads/avatars/{{ Auth::user()->avatar }}" style="width:32px; height:32px; position:absolute; top:10px; left:10px; border-radius:50%">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{URL::to('/profile')}}"><i class="fa fa-btn fa-user"></i> Profile </a>
                                    </li>         
                                    <li>
                                        <a href="{{URL::to('/logout')}}"><i class="fa fa-btn fa-sign-out"></i> Logout </a>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}" ></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}" ></script>
</body>
</html>
