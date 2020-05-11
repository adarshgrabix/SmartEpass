<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title> Form</title>
	<link rel="stylesheet" href="/assets/styles/style.min.css">

	<!-- Waves Effect -->
	<link rel="stylesheet" href="/assets/plugin/waves/waves.min.css">

</head>

<body>

<div id="single-wrapper">
	<form action="/reject" method="POST" class="frm-single">
	  {{ csrf_field() }}
	  <input type="hidden"  name="rid" value="{{$rid}}">
		<div class="inside">
		   <center><img height="100px" width="100px" src="/assets/images/police2.jpg" alt=""></img></center>
			<div class="title"><strong>SMART E-PASS SYSTEM</strong></div>
			<!-- /.title -->
			<div class="frm-title">Reject Reason/अस्वीकार कारण/Feedback</div><br>
			
			<center>@foreach( $errors->all() as $message )
         
		          <span class="text-danger">{{ $message }}</span>
                 @endforeach</center>
			<!-- /.frm-title -->
			<div class="frm-input"><textarea type="text" rows="4" cols="50" name="reason" placeholder="Reason" class="frm-inp"></textarea><i class="fa fa-user frm-ico"></i></div>
			<!-- /.frm-input -->
			
			<!-- /.frm-input -->
			<div class="clearfix margin-bottom-20">
				<div class="pull-left">
					
				</div>
				<!-- /.pull-left -->
				
				<!-- /.pull-right -->
				
			</div>
			<!-- /.clearfix -->
			<button type="submit" class="frm-submit">Reject<i class="fa fa-arrow-circle-right"></i></button>
			<div class="row small-spacing">
				
				<!-- /.col-sm-12 -->
				
			</div>
			<!-- /.row -->
			
			<div class="frm-footer">Smart Police © 2020.</div>
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
	<script src="/assets/scripts/jquery.min.js"></script>
	<script src="/assets/scripts/modernizr.min.js"></script>
	<script src="/assets/plugin/bootstrap/js/bootstrap.min.js"></script>
	<script src="/assets/plugin/nprogress/nprogress.js"></script>
	<script src="/assets/plugin/waves/waves.min.js"></script>

	<script src="/assets/scripts/main.min.js"></script>
</body>
</html>