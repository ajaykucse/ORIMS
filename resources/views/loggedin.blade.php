
@extends('layout')

@section('content')
<div class="container">
<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-info"> 
				<div class="panel-heading"><h4 style="color: #029F5B;">Login</h4></div>
  					<div class="panel-body">
    					<form class="form-horizontal" action="/login_check" method="post">
    						<input type="hidden" name="_token" value="{{csrf_token()}}">
    							<div class="form-group ">
    								<div class="col-md-6 col-md-offset-4">
    									<div class="input-group">
    										<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
    									
      									<input type="email" class="form-control" name="email" id="email" placeholder="Email" value="{{ old('email') }}" required autofocus>
										@if ($errors->has('email'))<p>{{ $errors->first('email') }}</p>@endif
									@if ($errors->has('email'))
                                    	<span class="help-block">
                                        	<strong>{{ $errors->first('email') }}</strong>
                                    	</span>
                                	@endif
                                	</div>
									</div>	
    							</div>
    							<div class="form-group">
    								<div class="col-md-6 col-md-offset-4">
    									<div class="input-group">
    										<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
      									<input type="password" class="form-control" name="password" id="password" placeholder="Password" required>

      									@if($errors->has('password')) <p>{{$errors->first('password')}}</p>@endif
      									@if ($errors->has('password'))
                                    		<span class="help-block">
                                        		<strong>{{ $errors->first('password') }}</strong>
                                   		 </span>
                                		@endif
                                		</div>
      								</div>
    							</div>
    							<div class="form-group">
                            		<div class="col-md-6 col-md-offset-4">
                                		<div class="checkbox">
                                    		<label>
                                        		<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>   Remember Me
                                    			</label>
                                    		 
                                		</div>
                            		</div>
                        		</div>
    							<div class="form-group">
                            		<div class="col-md-8 col-md-offset-4">
                                		<button type="submit" class="btn btn-info">LOG IN</button>
                                        
                                		  <a class="btn btn-link" href="{{URL::to('/forgot-password')}}">Forgot Your Password?		</a>
                        				 		
                            		</div>
                        		</div>
                        	 
  						</form>
  					</div>
  			</div>
		</div>
</div>
</div>
<style type="text/css">
	.panel-body{
	border-color: #ccc;
	-webkit-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
	-moz-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
	box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
	}
</style>
@endsection