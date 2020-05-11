<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Admin Panel | E-Malkhana</title>
	
	
	

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

	
	

	

	
</head>


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
				<li >
					<a class="waves-effect" href="/admin"><i class="menu-icon mdi mdi-view-dashboard"></i><span>Panel/पैनल</span></a>
				</li>
				
				<li class="current">
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
<div id="wrapper">
	<div class="main-content">
		<div class="row small-spacing">
			
			<!-- /.col-xs-12 -->
			<div class="col-xs-12">
				<div class="box-content">
					<h4 class="box-title">Pending E-Pass</h4>
				<center>@foreach( $errors->all() as $message )
         
		          <span class="text-danger"><strong>{{ $message }}</strong></span>
                 @endforeach</center><br>
					<!-- /.dropdown js__dropdown -->
					<table id="example-scroll-y" class="table table-striped table-bordered display" style="width:100%">
						<thead>
							<tr>
								<th>S.No</th>
								<th>PASS ID</th>
								<th>NAME</th>
								<th>EMAIL</th>
								<th>MOBILE</th>
								<th>SERVICE</th>
								<th>STATUS</th>
								<th>ACTION</th>
								
								
							</tr>
						</thead>
							<?php $sno= 0; ?>
						<tbody>
						 @foreach ($passdata as $q)
							<tr>
								<td><?php echo ++$sno; ?></td>
								<td>{{$q->rid}}</td>
								<td>{{$q->name}}</td>
								
								<td>{{$q->email}}</td>
								<td>{{$q->mobile}}</td>
								<td>{{$q->service}}</td>
								<td>{{$q->status}}</td>
								<td><a href="/controlpass/{{$q->rid}}"><button type="button" class="btn btn-violet btn-xs waves-effect waves-light">View & Approve</button> </a> <a href="/rejectpass/{{$q->rid}}"><button type="button" class="btn btn-danger btn-xs waves-effect waves-light">Reject</button></td>
								
								
							</tr>
                        @endforeach
						</tbody>
					</table>
				</div>
				<!-- /.box-content -->
			</div>
			
		</div>
	<br>
   <br>
  <br>
<br>  
		<footer class="footer">
			<ul class="list-inline">
				<li>2018 © Smart Police</li>
				
			</ul>
		</footer>
	</div>
	<!-- /.main-content -->
</div><!--/#wrapper -->
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
	<script src="/assets/plugin/mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="/assets/plugin/nprogress/nprogress.js"></script>
	<script src="/assets/plugin/sweet-alert/sweetalert.min.js"></script>
	<script src="/assets/plugin/waves/waves.min.js"></script>

	<!-- Data Tables -->
	<script src="/assets/plugin/datatables/media/js/jquery.dataTables.min.js"></script>
	<script src="/assets/plugin/datatables/media/js/dataTables.bootstrap.min.js"></script>
	<script src="/assets/plugin/datatables/extensions/Responsive/js/dataTables.responsive.min.js"></script>
	<script src="/assets/plugin/datatables/extensions/Responsive/js/responsive.bootstrap.min.js"></script>
	<script src="/assets/scripts/datatables.demo.min.js"></script>

	<script src="/assets/scripts/main.min.js"></script>
</body>
</html>