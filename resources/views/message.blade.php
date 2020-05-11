<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Message</title>

	<!-- Main Styles -->
	<link rel="stylesheet" href="/assets/styles/style.min.css">
	
	<!-- Material Design Icon -->
	<link rel="stylesheet" href="/assets/fonts/material-design/css/materialdesignicons.css">

	<!-- mCustomScrollbar -->
	<link rel="stylesheet" href="/assets/plugin/mCustomScrollbar/jquery.mCustomScrollbar.min.css">

	<!-- Waves Effect -->
	<link rel="stylesheet" href="/assets/plugin/waves/waves.min.css">

	<!-- Sweet Alert -->
	<link rel="stylesheet" href="/assets/plugin/sweet-alert/sweetalert.css">
	
	<!-- Morris Chart -->
	<link rel="stylesheet" href="/assets/plugin/chart/morris/morris.css">

	<!-- FullCalendar -->
	<link rel="stylesheet" href="/assets/plugin/fullcalendar/fullcalendar.min.css">
	<link rel="stylesheet" href="/assets/plugin/fullcalendar/fullcalendar.print.css" media='print'>

</head>

<body>
<div class="main-menu">
	<header class="header">
		<a href=/" class="logo"><i class="ico mdi mdi-cube-outline"></i>Smart E-Pass</a>
		<button type="button" class="button-close fa fa-times js__menu_close"></button>
		<div class="user">
			<a href="#" class="avatar"><img src="/assets/images/police2.jpg" alt=""><span class="status online"></span></a>
			<h5 class="name"><a href="profile.html">Smart Cell</a></h5>
			<h5 class="position">Ayodhya</h5>
			<!-- /.name -->
			<div class="control-wrap js__drop_down">
				<i class="fa fa-caret-down js__drop_down_button"></i>
				<div class="control-list">
					<div class="control-item"><a href="profile.html"><i class="fa fa-user"></i> Profile</a></div>
					<div class="control-item"><a href="#"><i class="fa fa-gear"></i> Settings</a></div>
					<div class="control-item"><a href="#"><i class="fa fa-sign-out"></i> Log out</a></div>
				</div>
				<!-- /.control-list -->
			</div>
			<!-- /.control-wrap -->
		</div>
		<!-- /.user -->
	</header>
	<!-- /.header -->
	<div class="content">

		<div class="navigation">
			<h5 class="title">Navigation</h5>
			<!-- /.title -->
			<ul class="menu js__accordion">
				<li class="current">
					<a class="waves-effect" href="/"><i class="menu-icon mdi mdi-view-dashboard"></i><span>Apply</span></a>
				</li>
				
				
				
			</ul>
			
		</div>
		<!-- /.navigation -->
	</div>
	<!-- /.content -->
</div>
<!-- /.main-menu -->

<div class="fixed-navbar">
	<div class="pull-left">
		<button type="button" class="menu-mobile-button glyphicon glyphicon-menu-hamburger js__menu_mobile"></button>
		<h1 class="page-title">Smart Cell Ayodhya</h1>
		<!-- /.page-title -->
	</div>
	

</div>
<!-- /.fixed-navbar -->


<!-- /#notification-popup -->


<!-- /#message-popup -->
<div id="wrapper">
		<div class="main-content">
         <center>
			<div class="row small-spacing">
				<div class="col-lg-10 col-xs-12"><center>
					<div class="box-content card white">
						<br>
						<center><h3><font color="red"><strong>Ayodhya Police</strong></font></h3>
	                           <h4><font color="blue"><b>#AyodhyaFights Corona</b></font></h4><br>
						<div class="title"><strong>प्रिय  {{$name}}, E-Pass के लिए आपका अनुरोध सफलतापूर्वक बनाया गया है|<br> स्मार्ट सेल अयोध्या जल्द ही सत्यापन के लिए आपसे संपर्क करेगा</strong></div>
						<h4> <font color="red"><strong>आपका E-Pass अनुरोध आईडी है :    {{$rid}}</strong></font></h4>
					</center>

					<center>	<h3 class="box-title"><strong>वेरिफिकेशन के बाद आपको अपना ईमेल आईडी पर E-Pass मिलेगा</strong></h3></center><br>
					<h4> <font color="red"><strong>जागरूक रहें, सुरक्षित रहें। </strong></font></h4>
                  <h3 ><font color="blue"><strong>स्मार्ट सेल, जनपद अयोध्या</strong></font></h3>
						<!-- /.box-title -->
						<div class="card-content">

							

						</div>
						<!-- /.card-content -->
					</div>
					</center>
				</div>
			</div>
			</center>
					<!-- /.box-content -->
				</div>
			</div><!--/#wrapper -->
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
	<script src="assets/plugin/mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="assets/plugin/nprogress/nprogress.js"></script>
	<script src="assets/plugin/sweet-alert/sweetalert.min.js"></script>
	<script src="assets/plugin/waves/waves.min.js"></script>

	

	<script src="assets/scripts/main.min.js"></script>
</body>
</html>