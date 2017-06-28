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
	</div>	
	<div class="middle">
		<div class="container">
			<div class="row">
				@section('body')
					@show('')
			</div>
		</div>
	</div>
	<div class="footer">
		
	</div>

	<script src="{{ asset('js/bootstrap.js') }}" type="text/javascript"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}" type="text/javascript"></script>
</body>
</html>