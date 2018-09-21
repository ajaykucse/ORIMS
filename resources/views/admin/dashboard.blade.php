<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
	<link rel="icon" type="image/gif/png" href="_/images/url.ico">
	<title>Admin | Dashboard</title>
	 <link href="{{asset('custom-css/style.css')}}" rel="stylesheet" />

	 <link href="{{asset('custom-css/bootstrap.min.css')}}" rel="stylesheet" />
	 <link href="{{asset('custom-css/font-awesome.min.css')}}" rel="stylesheet" />
	 <script src="{{asset('custom-css/bootstrap.min.js')}}"></script>
	 <script src="{{asset('custom-js/jquery.min.js')}}"></script>


 <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

 <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
	@if (Auth::guest())
  		<nav class="navbar navbar-inverse navbar-static-top">
  			<div class="container">
    			<div class="navbar-header">
      				<a class="navbar-brand" href="{{URL::to('')}}">ORIMS</a>
    			</div>
    			<ul class="nav navbar-nav navbar-right">
      				<li><a href="{{URL::to('/signin')}}"><span class="glyphicon glyphicon-log-in"></span> Login </a></li>
       				<li><a href="{{URL::to('/registation')}}"><span class="glyphicon glyphicon-user"></span> Register </a></li>
    			</ul>
  			</div>
		</nav>
	@else(Auth::user())
<body style="font-family:FontAwesome;">
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
							<li><a href="#">Account</a></li>
							<li class="nav-divider"></li>
							<li>
								<a  href="{{URL::to('/profile')}}"><span class="glyphicon glyphicon-user"></span>	Profile 
								</a>
							</li>
							<li class="nav-divider"></li>
							<li><a class="btn btn-info" href="{{URL::to('/logout')}}">
									<span class="glyphicon glyphicon-log-out"></span> Logout
								</a>
							</li>
						</ul>
					</li>

				</ul>

			</div> 
		</div>
	</nav>
	<article class="wrapper" >
	    <aside class="sidebar" class="active">
	    	<br>
	    	<img class="img-responsive img-circle" alt="Smiley face" align="middle" src="/uploads/avatars/{{ ucwords(Auth::user()->avatar) }}" style="display: block;margin-left: auto;margin-right: auto;margin-top: auto; margin-bottom: auto;" />

	        <ul class="sidebar-nav">
	        <br><br><br><br><br><br>
			    <li class="active" ><a href="#dashboard" data-toggle="tab" class="divider" style="border-left:3px solid #d19b3d;"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>

			    <li class="divider"></li> 

			    <li><a href="/dashboard/location"  class="divider"><i class="glyphicon glyphicon-globe"></i> <span  >Countries </span> <li class="divider"></li> </a>

			    <li><a href="/dashboard/cities" target="_blank" class="divider"><i class="glyphicon glyphicon-globe"></i> <span  >Cities </span> <li class="divider"></li> </a>
			     
			  	<li><a href="/dashboard/news" target="_blank"  class="divider"><i class="fa fa-newspaper-o"></i> <span> News</span> <b class="arrow"></b></a></li>
			   
			   	<li class="divider"></li>

			   	<li data-toggle="collapse"  class="collapsed">
                  <a href="#"><i class="fa fa-h-square"></i> Health & Care  <span class="arrow"></span></a>
                </li>  
                <ul class="sub-menu collapse" id="service" type="none">
                   
                <li><a href="/dashboard/hospital" class="divider"><i class="fa fa-hospital-o"></i> <span> Hospital</span> <b class="arrow"></b></a></li>

                <li><a href="#doctor"  data-toggle="tab" class="divider"><i class="fa fa-user-md"></i> <span> Doctor</span> <b class="arrow"></b></a>
			    </li>

			    <li><a href="#doctorapt"  data-toggle="tab" class="divider"><i class="fa fa-stethoscope"></i></i> <span> Doctor Appointment</span> <b class="arrow"></b></a></li>

			    <li><a href="#ambulance"  data-toggle="tab" class="divider"><i class="fa fa-ambulance"></i> <span> Ambulance</span> <b class="arrow"></b></a></li>


                </ul>  


                  	<li class="divider"></li>

			   	<li data-toggle="collapse" data-target="#office" class="collapsed">
                  <a href="#"><i class="fa fa-home"></i> Office  <span class="arrow"></span></a>
                </li>  
                <ul class="sub-menu collapse" id="office" type="none">
                   
                <li><a href="#gov_office"  data-toggle="tab" class="divider"><i class="glyphicon glyphicon-briefcase"></i><span> Gov-Office</span> <b class="arrow"></b></a></li>

			    <li><a href="#nongov_office"  data-toggle="tab" class="divider"><i class="glyphicon glyphicon-home"></i> <span> Non-Gov office</span> <b class="arrow"></b></a></li>


                </ul>  



			    <li><a href="#"  id="showNews" data-toggle="tab" class="divider"><i class="glyphicon glyphicon-shopping-cart"></i> <span> Hotel & Restaurant</span> <b class="arrow"></b></a></li>

			    <li><a href="#news"  data-toggle="tab" class="divider"><i class="glyphicon glyphicon-plane"></i> Travel & Tour</span> <b class="arrow"></b></a></li>

			    <li><a href="#market"  data-toggle="tab" class="divider"><i class="glyphicon glyphicon-shopping-cart"></i> <span> Market</span> <b class="arrow"></b></a></li>

			    <li><a href="#news"  data-toggle="tab" class="divider"><i class="glyphicon glyphicon-transfer"></i> <span> MCC</span> <b class="arrow"></b></a></li>

			    <li><a href="#news"  data-toggle="tab" class="divider"><i class="glyphicon glyphicon-education"></i> <span> Education</span> <b class="arrow"></b></a></li>

				  


			    <li><a href="#configuration" data-toggle="tab" class="divider"><i class="fa fa-cogs"></i> <span> Configuration</span>
			    </a></li>
			    <li class="divider"></li>
			    <li><a href="#users" data-toggle="tab" class="divider"><i class="fa fa-users"></i> <span> Users</span></a></li>
			    <li class="divider"></li>
			    <li><a href="#mail" data-toggle="tab" class="divider"><i class="fa fa-envelope"></i> <span> Mail</span></a></li>
			    <li class="divider"></li>
			     <br/><br/>
			    
		    </ul>
	    </aside>
	    
	    <section class="main">
	        
	        <section class="tab-content">
	            
	           <section class="tab-pane active fade in content" id="dashboard">
	               
	                <div class="row">
	                   
                        <div class="col-xs-6 col-sm-3">
	                        <div class="panel panel-primary">
	                            <div class="panel-body">
	                                <br/><br/><br/><br/>
	                            </div>
	                        </div>
	                    </div>
	                    
	                    <div class="col-xs-6 col-sm-3">
	                        <div class="panel panel-success">
	                            <div class="panel-body">
	                                <br/><br/><br/><br/>
	                            </div>
	                        </div>
	                    </div>
	                    
	                    <div class="col-xs-6 col-sm-3">
	                        <div class="panel panel-danger">
	                            <div class="panel-body">
	                                <br/><br/><br/><br/>
	                            </div>
	                        </div>
	                    </div>
	                    
	                    <div class="col-xs-6 col-sm-3">
	                        <div class="panel panel-warning">
	                            <div class="panel-body">
	                                <br/><br/><br/><br/>
	                            </div>
	                        </div>
	                    </div>
	                  
	                   <div class="col-xs-12 col-sm-9">
	                       <div class="panel panel-default">
	                           <div class="panel-heading">
	                               Facilitates
	                           </div>
	                           <div class="panel-body">
	                               This layout uses tabs to demonstrate what you could do with it. It probably makes more sense to use individual pages/templates in a production app.
	                               <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
	                           </div>
	                       </div>
	                   </div>
	       
	                   <div class="col-xs-12 col-sm-3">
	                       <div class="panel panel-default">
	                           <div class="panel-heading">
	                               Operation
	                           </div>
	                           <div class="panel-body">
	                               The sidebar is naturally responsive according to screen width. You can toggle it using the menu button in the topbar. Test it out by increasing/decreasing your screen width and watch it respond.
	                           </div>
	                       </div>
	                       
	                       <div class="panel panel-default">
	                           <div class="panel-heading">
	                               Ajay Kumar Yadav
	                           </div>
	                           <div class="panel-body">
	                               Designed by <a href="https://www.linkedin.com/in/ajay-kumar-yadav-80847a48/" target="_blank">Ajay Kumar Yadav</a></a>
	                           </div>
	                       </div>
	                   </div>
	                   
	               </div>
	               
	           </section>
	           
	           <section class="tab-pane fade" id="configuration">
	               <nav class="subbar">
			            <ul class="nav nav-tabs">
				            <li class="active"><a href="#access" data-toggle="tab"><i class="fa fa-code"></i> <span>System</span></a></li>
				            <li><a href="#roles" data-toggle="tab"><i class="fa fa-user"></i> <span>Roles</span></a></li>
			            </ul>
		            </nav>
		            
		            <section class="tab-content content">
		                
		                <section class="tab-pane active fade in" id="access">
		                    
                            <div class="row">
                                <div class="col-xs-12">
	                                <div class="panel panel-default">
	                                    <div class="panel-heading">
	                                        Something
	                                    </div>
	                                    <div class="panel-body">
	                                        <br/><br/><br/><br/>
	                                    </div>
	                                </div>
	                            </div>
	                            
	                            <div class="col-xs-12 col-sm-4">
	                                <div class="panel panel-default">
	                                    <div class="panel-heading">
	                                        Something
	                                    </div>
	                                    <div class="panel-body">
	                                        <br/><br/><br/><br/>
	                                    </div>
	                                </div>
	                            </div>
	                            
	                            <div class="col-xs-12 col-sm-4">
	                                <div class="panel panel-default">
	                                    <div class="panel-heading">
	                                        Something
	                                    </div>
	                                    <div class="panel-body">
	                                        <br/><br/><br/><br/>
	                                    </div>
	                                </div>
	                            </div>
	                            
	                            <div class="col-xs-12 col-sm-4">
	                                <div class="panel panel-default">
	                                    <div class="panel-heading">
	                                        Something
	                                    </div>
	                                    <div class="panel-body">
	                                        <br/><br/><br/><br/>
	                                    </div>
	                                </div>
	                            </div>
                            </div>
		                    
		                </section>
		                
		                <section class="tab-pane fade" id="roles">
		                    
		                    <div class="row">
                                <div class="col-xs-12 col-sm-8 col-md-9">
	                                <div class="panel panel-default">
	                                    <div class="panel-heading">
	                                        Something
	                                    </div>
	                                    <div class="panel-body">
	                                        <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
	                                    </div>
	                                </div>
	                            </div>
	                            
	                            <div class="hidden-xs col-sm-4 col-md-3">
	                                <div class="panel panel-default">
	                                    <div class="panel-heading">
	                                        Something
	                                    </div>
	                                    <div class="panel-body">
	                                        <br/><br/><br/>
	                                    </div>
	                                </div>
	                                
	                                <div class="panel panel-default">
	                                    <div class="panel-heading">
	                                        Something
	                                    </div>
	                                    <div class="panel-body">
	                                        <br/><br/><br/>
	                                    </div>
	                                </div>
	                            </div>
	                       </div>
		                </section>
		                
		            </section>
		            
	           </section>
	           
	           <section class="tab-pane fade" id="users">
	               
	           </section>
	           
	           <section class="tab-pane fade" id="mail">
	               
	           </section>
	            <section class="tab-pane fade" id="location" >
	            <br/><br/><br/>
	            	@include('admin.region.location')
	            	<!-- @yield('main_content') -->
	           </section>
	            <section class="tab-pane fade" id="news" >
	            <br/><br/><br/>
	            	@include('admin.news.news') 
	            	 
	           </section>
	           <section class="tab-pane fade" id="hospital" >
	            <br/><br/><br/>
	            	@include('admin.health-care.hospital.hospital')  	 
	           </section>
	        	 
	            <section class="tab-pane fade" id="doctor" >
	            	<br/><br/><br/>
	            	@include('admin.health-care.doctor.doctor')  	 
	           </section>


	            <section class="tab-pane fade" id="doctorapt" >
	            	<br/><br/><br/>
	            	@include('admin.health-care.doctor-appointment.doctor-appointment')  	 
		        </section>

		        <section class="tab-pane fade" id="ambulance" >
	            	<br/><br/><br/>
	            	@include('admin.health-care.ambulance.ambulance')  	 
	           	</section>



	            <section class="tab-pane fade" id="market" >
	            	<br/><br/><br/>
	            	@include('admin.market.market')  	 
	           </section>
	           <section class="tab-pane fade" id="gov_office" >
	            	<br/><br/><br/>
	            	@include('admin.office.gov_office.gov_office')  	 
	           </section>
	           
	            <section class="tab-pane fade" id="nongov_office" >
	            	<br/><br/><br/>
	            	@include('admin.office.non_gov_office.NonGovOffice')  	 
	           </section>
	        </section>
	         
	    </section>
	</article>
		<script type="text/javascript">
		$(".wrapper").toggleClass("toggled");
   		$(".sidebar-toggle").click(function(e) {
   		e.preventDefault();
   		$(".wrapper").toggleClass("toggled"); 
});
	</script>
</body>
@endif 
</html>

 