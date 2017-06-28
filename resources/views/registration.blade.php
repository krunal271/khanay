<!DOCTYPE html>
<html>
<head>
	<title>Khanay</title>
	<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
	<link href="{{ asset('css/custom.css') }}" rel="stylesheet" type="text/css"/>
</head>
<body>
	<div class="header">
	    <div>
	      <img src="{{asset('images/logo1.png')}}"/>
	    </div>
	    <div class="logo">
    		 <h3>
    		  	<a href="{{ url('/')}}">Sign In</a>
    		 </h3>  
    	</div>        
	<div class="middle">	
		 <div class="row">
			 <div class="panel2">     
		            <div class="col-sm-6">
		                <div class="panel panel-default">
		            		 <div class="panel-heading">
		                            <h4><b>Sign Up</b></h4>
		                  	</div>
						    <div class="panel-body">
						    	<div>
						    	<form action="{{ url('SignUp')}}" method="post">
			                  		<div class="form-group">  
			                  		{{ csrf_field() }}
			                  		    <label class="">First Name </label>
										<input type="text" name="userName" class="form-control">
									</div>
									<!-- <div class="form-group">  
			                  		    <label class="">Last Name </label>
										<input type="text" name="lName" class="form-control">
									</div> -->
									<div class="form-group">  
			                  		    <label class="">Email Id </label>
										<input type="text" name="emailId" class="form-control">
									</div>
									<div class="form-group">
										<label>Password </label>
										<input type="Password" name="userPassword" class="form-control">
									</div>
									<!-- <div class="form-group">  
			                  		    <label class="">Confirm Password </label>
										<input type="Password" name="cPassword" class="form-control">
									</div>								
									<div class="form-group">
										<label>Gender </label>&nbsp;
										<label class="radio-inline"><input type="radio" name="gender" >Male </label>
										<label class="radio-inline"><input type="radio" name="gender" >Female </label>
									</div>-->	
									<div class="form-group">
										<center><input type="submit" value="Sign Up" class="btn btn-success"></center>
									</div>
								</form>
								</div>
		               		</div>
		                </div>
		            </div>                 
		        </div>
		  </div>
	</div>
	<div class="footer">
		
	</div>

	<script src="{{ asset('js/bootstrap.js') }}" type="text/javascript"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}" type="text/javascript"></script>

</body>
</html>