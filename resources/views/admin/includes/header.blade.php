<nav class="navbar navbar-inverse navbar-fixed-top" style="background: #2A3F54;color: #ffffff;">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="{{URL::to('')}}" class="navbar-brand">
                <span class="visible-xs">RIC</span>
                <span class="hidden-xs">RI Center</span>
            </a>
            <p class="navbar-text">
                <a href="#" class="sidebar-toggle">
                    <span id="main_icon" class="glyphicon glyphicon-align-justify"></span>
                </a>
            </p>
        </div>
        <div class="navbar-collapse collapse" id="navbar-collapse-main">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a class="navbar-brand" href="{{URL::to('/profile')}}">{{ ucwords(Auth::user()->name) }}</a>
                </li>
                <li>
                    <button class="navbar-btn">
                        <i class="fa fa-bell"></i>
                    </button>
                </li>
                <li class="dropdown">
                    <button class="navbar-btn" data-toggle="dropdown">
                        <img id="circle" src="/uploads/avatars/{{ ucwords(Auth::user()->avatar) }}" class="img-responsive img-circle">
                    </button>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#">Account</a>
                        </li>
                        <li class="nav-divider"></li>
                        <li>
                            <a  href="{{URL::to('/profile')}}">
                                <span class="glyphicon glyphicon-user">Profile</span>
                            </a>
                        </li>
                        <li class="nav-divider"></li>
                        <li>
                            <a class="btn btn-info" href="{{URL::to('/logout')}}">
                                <span class="glyphicon glyphicon-log-out">Logout</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>