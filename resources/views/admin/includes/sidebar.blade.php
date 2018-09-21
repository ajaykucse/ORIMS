<br>
<img class="img-responsive img-circle" alt="Smiley face" align="middle" src="/uploads/avatars/{{ ucwords(Auth::user()->avatar) }}" style="display: block;margin-left: auto;margin-right: auto;margin-top: auto; margin-bottom: auto;" />

<ul class="sidebar-nav">
    <br><br><br><br><br><br>
    <li class="active" >
        <a href="/dashboard" class="divider" style="border-left:3px solid #d19b3d;">
            <i class="fa fa-dashboard"></i>
             <span>Dashboard</span>
        </a>
    </li>
    <li class="divider"></li>
    <li>
        <a href="/dashboard/location" class="divider">
            <i class="glyphicon glyphicon-globe"></i>
            <span  >Countries </span> 
            <li class="divider"></li> 
        </a>
    </li>
    <li>
        <a href="/dashboard/cities" class="divider">
            <i class="glyphicon glyphicon-globe"></i> 
            <span  >Cities </span> 
            <li class="divider"></li> 
        </a>
    </li>
    <li>
        <a href="/dashboard/news" target="_blank"  class="divider">
            <i class="fa fa-newspaper-o"></i> 
            <span> News</span><b class="arrow"></b>
        </a>
    </li>
    <li class="divider"></li>
    <li data-toggle="collapse" data-target="#service" class="collapsed">
        <a href="#">
            <i class="fa fa-h-square"></i>   
            <span class="arrow">Health & Care</span>
        </a>
    </li>
    <ul class="sub-menu collapse" id="service" type="none">
        <li>
            <a href="/dashboard/hospital" class="divider">
                <i class="fa fa-hospital-o"></i> 
                <span> Hospital</span><b class="arrow"></b>
            </a>
        </li>
        <li>
            <a href="/dashboard/doctor" class="divider">
                <i class="fa fa-user-md"></i>
                <span> Doctor</span><b class="arrow"></b>
            </a>
        </li>
        <li>
            <a href="/dashboard/docAppoint" class="divider">
                <i class="fa fa-stethoscope"></i>
                <span>Appointment</span><b class="arrow"></b>
            </a>
        </li>
        <li>
            <a href="/dashboard/ambulance" class="divider">
                <i class="fa fa-ambulance"></i>
                <span> Ambulance</span><b class="arrow"></b>
            </a>
        </li>
        <li>
            <a href="/dashboard/bloodBank" class="divider">
                <i class="fa fa-bank"></i>
                <span>Blood Bank</span><b class="arrow"></b>
            </a>
        </li>
        <li>
            <a href="/dashboard/bloodgroup" class="divider">
                <i class="fa fa-tint"></i>
                <span>Blood Group</span><b class="arrow"></b>
            </a>
        </li>
    </ul>
    <li class="divider"></li>
    <li data-toggle="collapse" data-target="#office" class="collapsed">
        <a href="#">
            <i class="fa fa-home"></i>   
            <span class="arrow">Office</span>
        </a>
    </li>
    <ul class="sub-menu collapse" id="office" type="none">
        <li>
            <a href="#gov_office"  data-toggle="tab" class="divider">
                <i class="glyphicon glyphicon-briefcase"></i>
                <span> Gov-Office</span><b class="arrow"></b>
            </a>
        </li>
        <li>
            <a href="#nongov_office"  data-toggle="tab" class="divider">
                <i class="glyphicon glyphicon-home"></i>
                <span> Non-Gov office</span><b class="arrow"></b>
            </a>
        </li>
    </ul>
    <li>
        <a href="#"  id="showNews" data-toggle="tab" class="divider">
            <i class="glyphicon glyphicon-shopping-cart"></i> 
            <span> Hotel & Restaurant</span><b class="arrow"></b>
        </a>
    </li>
    <li>
        <a href="#news"  data-toggle="tab" class="divider">
            <i class="glyphicon glyphicon-plane"></i> 
            <span>Travel & Tour</span><b class="arrow"></b>
        </a>
    </li>
    <li>
        <a href="#market"  data-toggle="tab" class="divider">
            <i class="glyphicon glyphicon-shopping-cart"></i>
            <span>Market</span><b class="arrow"></b>
        </a>
    </li>
    <li>
        <a href="#news"  data-toggle="tab" class="divider">
            <i class="glyphicon glyphicon-transfer"></i>
            <span>MCC</span><b class="arrow"></b>
        </a>
    </li>
    <li>
        <a href="#news"  data-toggle="tab" class="divider">
            <i class="glyphicon glyphicon-education"></i> 
            <span> Education</span><b class="arrow"></b>
        </a>
    </li>
    <li>
        <a href="#configuration" data-toggle="tab" class="divider">
            <i class="fa fa-cogs"></i> 
            <span>Configuration</span>
        </a>
    </li>
    <li class="divider"></li>
    <li>
        <a href="#users" data-toggle="tab" class="divider">
            <i class="fa fa-users"></i>
            <span> Users</span>
        </a>
    </li>
    <li class="divider"></li>
    <li>
        <a href="#mail" data-toggle="tab" class="divider">
            <i class="fa fa-envelope"></i> 
            <span> Mail</span>
        </a>
    </li>
    <li class="divider"></li>
    <br/><br/>

</ul>