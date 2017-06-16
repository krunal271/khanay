<html>
<head>
	<title>Sign In</title>
	<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
		<link href="{{ asset('css/custom.css') }}" rel="stylesheet" type="text/css"/>
	<script src="{{ asset('js/bootstrap.js') }}" type="text/javascript"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}" type="text/javascript"></script>
</head>
<body>
	<div class="container">

		<form class="form-horizontal">
			<div class="form-group">
				<label>UserName </label>
				<input type="text" name="uName" class="form-control">
			</div>
			<div class="form-group">
				<label>Password </label>
				<input type="Password" name="uPassword" class="form-control">
			</div>
			<div class="form-group">
				<input type="submit" value="Log In" name="login" class="btn btn-success">
			</div>
		</form>
	</div>
</body>
</html>