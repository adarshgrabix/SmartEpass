<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Home | Smart Quiz</title>

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
		<a href="#" class="logo"><i class="ico mdi mdi-cube-outline"></i>Smart E-Pass</a>
		<button type="button" class="button-close fa fa-times js__menu_close"></button>
		<div class="user">
			<a href="#" class="avatar"><img src="/assets/images/police2.jpg" alt=""><span class="status online"></span></a>
			<h5 class="name">Smart Cell</h5>
			<h5 class="position">ADMIN</h5>
			<h5 class="position"><strong>Ayodhya</strong></h5>
			<!-- /.name -->
			<div class="control-wrap js__drop_down">
				<i class="fa fa-caret-down js__drop_down_button"></i>
				<div class="control-list">
					
				
					<div class="control-item"><a href="/logout"><i class="fa fa-sign-out"></i> Log out</a></div>
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
					<a class="waves-effect" href="/admin"><i class="menu-icon mdi mdi-view-dashboard"></i><span>Panel/पैनल</span></a>
				</li>
				
				<li>
					<a class="waves-effect parent-item " href="/pendingpass"><i class="menu-icon mdi mdi-cube-outline"></i><span>Pending Passes</span></span></a>
					
					<!-- /.sub-menu js__content -->
				</li>
				<li>
					<a class="waves-effect parent-item " href="/apppass"><i class="menu-icon mdi mdi-desktop-mac"></i><span>Approved Passes</span></a>
					
					<!-- /.sub-menu js__content -->
				</li>
				
				<li>
					<a class="waves-effect parent-item " href="/totalepass"><i class="menu-icon mdi mdi-desktop-mac"></i><span>Total E-Pass</span></a>
					
					<!-- /.sub-menu js__content -->
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
		<h1 class="page-title">ADMIN PANEL</h1>
		<!-- /.page-title -->
	</div>
	<!-- /.pull-left -->
	<div class="pull-right">
		
		<!-- /.ico-item -->
		
		<a href="/logout" class="ico-item mdi mdi-logout "></a>
	</div>
	<!-- /.pull-right -->
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
						

					<center>	<h3 class="box-title"><strong>ई पास आवेदन  |  आवेदन  तारीख: {{$pass->rdate}}</strong></h3></center><br>
					<center><img class="avatar" height="140px" width="140px" src="{{$pass->pic}}" alt=""></center><hr><br>
					<h5 class="text-info">{{$pass->mobile}} से  पिछले   कुल आवेदन ::<strong>{{$log}}</strong></h5>
						<!-- /. -->
						<div class="card-content">

							<form method="POST" action="/approvepass">
							 {{ csrf_field() }}
							<input type="hidden"  name="rid" value="{{$pass->rid}}">
								<div class="row small-spacing">
									<div class="col-lg-4 col-xs-10">
										<div class="form-group ">
											<label for="exampleInputEmail1">नाम: <h4 class="text-custom"><strong>{{$pass->name}}</strong></h4></label>
											
										</div>
									</div>
									<div class="col-lg-4 col-xs-10">
										<div class="form-group ">
											<label for="exampleInputEmail1">पिता / पति :<h4 class="text-custom"><strong>{{$pass->parentsname}}</strong></h4></label>
											
										</div>
									</div>

									<div class="col-lg-4 col-xs-10">
										<div class="form-group ">
											<label for="exampleInputEmail1">आयु: <h4 class="text-custom"><strong>{{$pass->age}}</strong></h4></label>
											
										</div>
									</div>

								</div><hr>
								<div class="row small-spacing">
									<div class="col-lg-4 col-xs-10">
										<div class="form-group ">
											<label for="exampleInputEmail1">Mobile/मोबाइल: <h4 class="text-custom"><strong>{{$pass->mobile}}</strong></h4></label>
											
										</div>
									</div>
									<div class="col-lg-4 col-xs-10">
										<div class="form-group ">
											<label for="exampleInputEmail1">Email/ईमेल: <h4 class="text-custom"><strong>{{$pass->email}}</strong></h4></label>
											
										</div>
									</div>
									

									<div class="col-lg-4 col-xs-10">
										<div class="form-group ">
											<label for="exampleInputEmail1">Address/पता: <h4 class="text-custom"><strong>{{$pass->address}}</strong></h4></label>
											
										</div>
									</div>

								</div>



                   <hr>
								<div class="row small-spacing">
									<div class="col-lg-4 col-xs-10">
										<div class="form-group ">
									<label for="exampleInputEmail1">Essential Service/आवश्यक सेवा: <h4 class="text-custom"><strong>{{$pass->service}}</strong></h4></label>
									
								</div>
									</div>
									<div class="col-lg-4 col-xs-10">
										<div class="form-group ">
											<label for="exampleInputEmail1">Destination/गंतव्य: <h4 class="text-custom"><strong>{{$pass->dist}}</strong></h4></label>
											
										</div>
									</div>
									
									
									<div class="col-lg-4 col-xs-10">
										<div class="form-group ">
											<label for="exampleInputEmail1">Thana/थाना: <h4 class="text-custom"><strong>{{$pass->thana}}</strong></h4></label>
											
										</div>
									</div>
									
									
									<div class="col-lg-4 col-xs-10">
										<div class="form-group ">
											<label for="exampleInputEmail1"><p class="text-danger"><strong>Status:  {{$pass->status}}</strong></p></label>
											
										</div>
									</div>

									
                                    <hr>

									<div class="col-lg-4 col-xs-10">
										<div class="form-group ">
											<label for="exampleInputEmail1">Time Interval/समय अंतराल: </label>
											<input type="text" name="timeinterval" class="form-control" placeholder="{{$pass->tinterval}}" value="{{$pass->tinterval}}" id="exampleInputEmail1" required>
										</div>
									</div>
									
									
									<div class="col-lg-4 col-xs-10">
										<div class="form-group ">
											<label for="exampleInputEmail1">Write Comment</label>
											<input type="text" name="comment" class="form-control" id="exampleInputEmail1" required>
										</div>
									</div>
									<HR>
                                     <div class="col-lg-3 col-xs-10">
										<div class="form-group "><br>
											<button type="submit" class="btn btn-primary btn-sm waves-effect waves-light">Approve Pass</button>
										</div>
									</div>
									
									<div class="col-lg-3 col-xs-10">
										<div class="form-group "><br>
											<a href="/rejectpass/{{$pass->rid}}"><button  class="btn btn-primary btn-sm waves-effect waves-light">Reject Pass</button></a>
										</div>
									</div>
                                  <hr>
								</div>


								
							</form>

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
		<script src="/assets/script/html5shiv.min.js"></script>
		<script src="/assets/script/respond.min.js"></script>
	<![endif]-->
	<!-- 
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="/assets/scripts/jquery.min.js"></script>
	<script src="/assets/scripts/modernizr.min.js"></script>
	<script src="/assets/plugin/bootstrap/js/bootstrap.min.js"></script>
	<script src="/assets/plugin/mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="/assets/plugin/nprogress/nprogress.js"></script>
	<script src="/assets/plugin/sweet-alert/sweetalert.min.js"></script>
	<script src="/assets/plugin/waves/waves.min.js"></script>

	

	<script src="/assets/scripts/main.min.js"></script>
</body>
</html>