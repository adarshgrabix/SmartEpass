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
	<link rel="stylesheet" href="assets/styles/style.min.css">
	
	<!-- Material Design Icon -->
	<link rel="stylesheet" href="assets/fonts/material-design/css/materialdesignicons.css">

	<!-- mCustomScrollbar -->
	<link rel="stylesheet" href="assets/plugin/mCustomScrollbar/jquery.mCustomScrollbar.min.css">

	<!-- Waves Effect -->
	<link rel="stylesheet" href="assets/plugin/waves/waves.min.css">

	<!-- Sweet Alert -->
	<link rel="stylesheet" href="assets/plugin/sweet-alert/sweetalert.css">
	
	<!-- Morris Chart -->
	<link rel="stylesheet" href="assets/plugin/chart/morris/morris.css">

	<!-- FullCalendar -->
	<link rel="stylesheet" href="assets/plugin/fullcalendar/fullcalendar.min.css">
	<link rel="stylesheet" href="assets/plugin/fullcalendar/fullcalendar.print.css" media='print'>

</head>

<body>
<div class="main-menu">
	<header class="header">
		<a href="index.html" class="logo"><i class="ico mdi mdi-cube-outline"></i>Smart E-Pass</a>
		<button type="button" class="button-close fa fa-times js__menu_close"></button>
		<div class="user">
			<a href="#" class="avatar"><img src="assets/images/police2.jpg" alt=""><span class="status online"></span></a>
			<h5 class="name"><a href="profile.html">Smart Cell</a></h5>
			<h5 class="position">Ayodhya</h5>
			<!-- /.name -->
			
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
					<a class="waves-effect" href="index.html"><i class="menu-icon mdi mdi-view-dashboard"></i><span>Apply</span></a>
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
						
						<center><img height="280px" width="200px" src="assets/images/epass.png" alt=""></img>
						<div class="title"><strong>केवल अयोध्या के लिए</strong></div>
						
					</center>

					<center>	<h3 class="box-title"><strong>ई पास आवेदन फार्म</strong></h3></center><br>
					<p class="text-danger">सभी  डेटा  भरना  अनिवार्य है|</p>
						<!-- /.box-title -->
						<div class="card-content">

							<form method="POST" action="/addnewpass"  enctype="multipart/form-data">
							 {{ csrf_field() }}
							 
							 
							
								<div class="row small-spacing">
								
								
									
									<div class="col-lg-3 col-xs-10">
										<div class="form-group ">
											<label for="exampleInputEmail1">नाम</label>
											<input type="text" name="Name" class="form-control" id="exampleInputEmail1" placeholder="नाम">
										</div>
									</div>
									<div class="col-lg-4 col-xs-10">
										<div class="form-group ">
											<label for="exampleInputEmail1">माता-पिता / पति / पत्नी का नाम</label>
											<input type="text" name="Parents_Name" class="form-control" id="exampleInputEmail1" placeholder="माता-पिता / पति / पत्नी का नाम">
										</div>
									</div>

									<div class="col-lg-2 col-xs-10">
										<div class="form-group ">
											<label for="exampleInputEmail1">आयु</label>
											<input type="text" name="Age" class="form-control" id="exampleInputEmail1" placeholder="आयु">
										</div>
									</div>
									<div class="col-lg-3 col-xs-10">
										<div class="form-group">
											<label for="exampleInputFile">आवेदक फोटो</label>
											<input type="file" name="photo" id="exampleInputFile">
											<p class="help-block">फोटो अपलोड करें</p>
										</div>
									</div>

								</div><hr>
								<div class="row small-spacing">
									<div class="col-lg-4 col-xs-10">
										<div class="form-group ">
											<label for="exampleInputEmail1">Mobile/मोबाइल</label>
											<input type="text" name="Mobile" class="form-control" id="exampleInputEmail1" placeholder="मोबाइल">
										</div>
									</div>
									<div class="col-lg-4 col-xs-10">
										<div class="form-group ">
											<label for="exampleInputEmail1">Email/ईमेल</label>
											<input type="email" name="Email" class="form-control" id="exampleInputEmail1" placeholder="ईमेल">
										</div>
									</div>
									

									<div class="col-lg-4 col-xs-10">
										<div class="form-group ">
											<label for="exampleInputEmail1">Address/पता</label>
											<textarea type="text" name="Address" class="form-control" id="exampleInputEmail1" placeholder="पता"></textarea>
										</div>
									</div>

								</div>



                   <hr>
								<div class="row small-spacing">
									
									<div class="col-lg-4 col-xs-10">
										<div class="form-group ">
											<label for="exampleInputEmail1">Destination/गंतव्य</label>
											<input type="text" name="Distination" class="form-control" id="exampleInputEmail1" >
										</div>
									</div>
                                    
									<div class="col-lg-4 col-xs-10">
										<div class="form-group ">
											<label for="exampleInputEmail1">Pass Date/पास की तारीख</label>
											<input type="text" name="passdate" class="form-control" id="exampleInputEmail1" required>
										</div>
									</div> 
									
									<div class="col-lg-4 col-xs-10">
										<div class="form-group ">
											<label for="exampleInputEmail1">Time Interval/समय अंतराल</label>
											<input type="text" name="Interval" class="form-control" id="exampleInputEmail1" >
										</div>
									</div>
                                      <div class="col-lg-4 col-xs-10">
										<div class="form-group ">
									<label for="exampleInputEmail1">Essential Service/आवश्यक सेवा</label>
									<select id="choose" name="Service_Type" class="form-control" required>
									 <option value="">प्रकार चुनें</option>
									 <option value="अनाज">अनाज</option>
									 <option value="गल्ला">गल्ला</option>
									 <option value="किराना">किराना</option>
									 <option value="जनरल स्टोर">जनरल स्टोर</option>
									 <option value="दूध">दूध</option>
									 <option value="सब्जी">सब्जी</option>
									 <option value="फल">फल</option>
									 <option value="दवाई">दवाई</option>
									 <option value="पैथोलॉजी लैब">पैथोलॉजी लैब</option>
									 <option value="रसोई गैस">रसोई गैस</option>
									 <option value="पैट्रोल पैम्प">पैट्रोल पैम्प</option>
									 <option value="CNG स्टेशन">CNG स्टेशन</option>
									 <option value="ट्रांसपोर्ट">ट्रांसपोर्ट</option>
									 <option value="लॉजिस्टिक्स">लॉजिस्टिक्स</option>
									 <option value="कूरियर">कूरियर</option>
									 <option value="वेयर हाउस">वेयर हाउस</option>
									 <option value="कोल्ड स्टोरेज">कोल्ड स्टोरेज</option>
									 

								   </select>
								</div>
									</div>

									<div class="col-lg-3 col-xs-10">
										<div class="form-group ">
									<label for="exampleInputEmail1">Thana/ आपका थाना</label>
									<select id="choose" name="Thana" class="form-control" required>
									 <option value=""> चुनें</option>
									 <option value="अनाज">कैण्ट</option>
									 <option value="कोतवाली नगर">कोतवाली नगर</option>
									 <option value="कोतवाली अयोध्या">कोतवाली अयोध्या</option>
									 <option value="आर.जे.बी.">आर.जे.बी.</option>
									 <option value="पूराकलन्दर">पूराकलन्दर</option>
									 <option value="इनायतनगर">इनायतनगर</option>
									 <option value="कुमारगंज">कुमारगंज</option>
									 <option value="खण्डासा">खण्डासा</option>
									 <option value="कोतवाली बीकापुर">कोतवाली बीकापुर</option>
									 <option value="तारुन">तारुन</option>
									 <option value="हैदरगंज">हैदरगंज</option>
									 <option value="कोतवाली रुदौली">कोतवाली रुदौली</option>
									 <option value="पटरंगा">पटरंगा</option>
									 <option value="मवई ">मवई </option>
									 <option value="रौनाही">रौनाही</option>
									 <option value="गोंसाईगंज">गोंसाईगंज</option>
									 <option value="महाराजगंज">महाराजगंज</option>
									 

								   </select>
								</div>
									</div>
                                     <div class="col-lg-3 col-xs-10">
										<div class="form-group "><br>
											<button type="submit" class="btn btn-primary btn-sm waves-effect waves-light">Submit Form</button>
										</div>
									</div>
									
									<div class="col-lg-2 col-xs-10">
										<div class="form-group "><br>
											<button type="reset" class="btn btn-primary btn-sm waves-effect waves-light">Clear</button>
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