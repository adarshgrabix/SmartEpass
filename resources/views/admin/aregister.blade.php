<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title> Admin Register</title>
	<link rel="stylesheet" href="assets/styles/style.min.css">

	<!-- Waves Effect -->
	<link rel="stylesheet" href="assets/plugin/waves/waves.min.css">

</head>

<body>

<div id="single-wrapper">
	<form action="/adminsignup" method="POST" class="frm-single">
	  {{ csrf_field() }}
		<div class="inside">
			 <center><img height="100px" width="100px" src="assets/images/police2.jpg" alt=""></img></center>
			<div class="title"><strong>Smart E pass</strong></div>
			<!-- /.title -->
			<div class="frm-title"><strong>ADMIN Registration</strong></div>
			@foreach( $errors->all() as $message )
         
		        <span class="text-danger"> {{ $message }} </span> <br>
                 @endforeach
			<!-- /.frm-title -->
			<div class="frm-input"><input type="text" name="name" placeholder="Name" class="frm-inp"><i class="fa fa-user frm-ico"></i></div>
			<div class="frm-input"><input type="email" name="email" placeholder="Email" class="frm-inp"><i class="fa fa-envelope frm-ico"></i></div>
			<!-- /.frm-input -->
			<div class="frm-input"><input type="password" name="password" placeholder="Password" class="frm-inp"><i class="fa fa-user frm-ico"></i></div>
			<!-- /.frm-input -->
			<div class="frm-input"><input type="integer" name="mobile" placeholder="Mobile" class="frm-inp"><i class="fa fa-lock frm-ico"></i></div>
			
			<button type="submit" class="frm-submit">Register<i class="fa fa-arrow-circle-right"></i></button>
			
			<!-- /.row -->
			<a href="/login" class="a-link"><i class="fa fa-sign-in"></i>Already have account? Login.</a>
			
			<!-- /.footer -->
		</div>
		<!-- .inside -->
	</form>
	<!-- /.frm-single -->
</div><!--/#single-wrapper -->

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="assets/script/html5shiv.min.js"></script>
		<script src="assets/script/respond.min.js"></script>
	<![endif]-->
	<!-- 
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="assets/scripts/jquery.min.js"></script>
	<script src="assets/scripts/modernizr.min.js"></script>
	<script src="assets/plugin/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/plugin/nprogress/nprogress.js"></script>
	<script src="assets/plugin/waves/waves.min.js"></script>

	<script src="assets/scripts/main.min.js"></script>
</body>
</html>