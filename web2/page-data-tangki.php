<!doctype html>
<html lang="en">
<?php
date_default_timezone_set('Asia/Jakarta');
require_once 'DBConnect.php';
require_once 'tangki.php';
$tangki = new Tangki();
$data = $tangki->getAll();
$data = $tangki->getAll();
?>
<head>
	<title>Dashboard | pertamina DPPU Adisucipto</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/vendor/linearicons/style.css">
	<link rel="stylesheet" href="assets/vendor/metisMenu/metisMenu.css">
	<link rel="stylesheet" href="assets/vendor/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css">
	<link rel="stylesheet" type="text/css" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bower_components/datatables.net-buttons-dt/css/buttons.dataTables.min.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/pertamina-minimalis.jpg">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/pertamina-minimalis.jpg">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container-fluid">
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-offcanvas"><i class="lnr lnr-menu"></i></button>
				</div>
				<!-- logo -->
				<div class="navbar-brand">
					<a href="index.php"><img src="assets/img/logo.png" alt="DiffDash Logo" class="img-responsive logo"></a>
				</div>
				<!-- end logo -->
				<div class="navbar-right">
					<!-- search form -->
					<form id="navbar-search" class="navbar-form search-form">
						<input value="" class="form-control" placeholder="Search here..." type="text">
						<button type="button" class="btn btn-default"><i class="fa fa-search"></i></button>
					</form>
					<!-- end search form -->
					
				</div>
			</div>
		</nav>
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		<div id="left-sidebar" class="sidebar">
			<button type="button" class="btn btn-xs btn-link btn-toggle-fullwidth">
				<span class="sr-only">Toggle Fullwidth</span>
				<i class="fa fa-angle-left"></i>
			</button>
			<div class="sidebar-scroll">
				<div class="user-account">
					<img src="assets/img/user.png" class="img-responsive img-circle user-photo" alt="User Profile Picture">
					<div class="dropdown">
						<a href="#" class="dropdown-toggle user-name" data-toggle="dropdown">Hello, <strong>Admin</strong> <i class="fa fa-caret-down"></i></a>
						<ul class="dropdown-menu dropdown-menu-right account">
							<li><a href="#">My Profile</a></li>
							<li><a href="#">Settings</a></li>
							<li class="divider"></li>
							<li><a href="#">Logout</a></li>
						</ul>
					</div>
				</div>
				<nav id="left-sidebar-nav" class="sidebar-nav">
					<ul id="main-menu" class="metismenu">
						<li class="active"><a href="index.php"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
						<li class="">
							<a href="page-data-tangki.php"><i class="lnr lnr lnr-drop"></i> <span>Data Tangki</span></a>
							<!-- <ul aria-expanded="true">
								<li class=""><a href="ui-tabs.html">Tabs</a></li>
								<li class=""><a href="ui-buttons.html">Buttons</a></li>
								<li class=""><a href="ui-bootstrap.html">Bootstrap UI</a></li>
								<li class=""><a href="ui-icons.html"><span>Icons</span></a></li>
							</ul> -->
						</li>
						<li class="">
							<a href="page-data-top.php"><i class="lnr lnr-chart-bars"></i> <span>Topping/Penyaluran</span></a>
							<!-- <ul aria-expanded="true">
								<li class=""><a href="page-profile.html">User Profile</a></li>
								<li class=""><a href="page-login.html">Login</a></li>
								<li class=""><a href="page-register.html">Register</a></li>
								<li class=""><a href="page-lockscreen.html">Lockscreen</a></li>
								<li class=""><a href="page-forgot-password.html">Forgot Password</a></li>
								<li class=""><a href="page-404.html">Page 404</a></li>
								<li class=""><a href="page-500.html">Page 500</a></li>
							</ul> -->
						</li>
						<!-- <li class="">
							<a href="#forms" class="has-arrow" aria-expanded="false"><i class="lnr lnr-pencil"></i> <span>Forms</span></a>
							<ul aria-expanded="true">
								<li class=""><a href="forms-validation.html">Form Validation</a></li>
								<li class=""><a href="forms-advanced.html">Advanced Form Elements</a></li>
								<li class=""><a href="forms-basic.html">Basic Form Elements</a></li>
								<li class=""><a href="forms-dragdropupload.html">Drag &amp; Drop Upload</a></li>
								<li class=""><a href="forms-texteditor.html">Text Editor</a></li>
							</ul>
						</li>
						<li class="">
							<a href="#charts" class="has-arrow" aria-expanded="false"><i class="lnr lnr-chart-bars"></i> <span>Charts</span></a>
							<ul aria-expanded="true">
								<li class=""><a href="charts-chartist.html">Chartist</a></li>
								<li class=""><a href="charts-sparkline.html">Sparkline Chart</a></li>
							</ul>
						</li>
						<li class=""><a href="notifications.html"><i class="lnr lnr-alarm"></i> <span>Notifications</span> <span class="badge bg-danger">15</span></a></li>
						<li class=""><a href="typography.html"><i class="lnr lnr-text-format"></i> <span>Typography</span></a></li> -->
					</ul>
				</nav>
				<!-- <div style="padding: 30px; text-align: center;">
					<h2 style="font-size: 16px; margin-bottom: 15px; font-weight: 700;">Other Similar Template</h2>
					<a href="https://www.themeineed.com/downloads/klorofil-pro-bootstrap-admin-dashboard-template/?utm_source=diffdash&utm_medium=template&utm_campaign=KlorofilPro" target="_blank"><img src="assets/img/klorofilpro.png" class="img-responsive thumbnail" alt=""></a>
					<a href="https://www.themeineed.com/downloads/klorofil-pro-bootstrap-admin-dashboard-template/?utm_source=diffdash&utm_medium=template&utm_campaign=KlorofilPro" target="_blank" class="btn btn-primary">VIEW DEMO</a>
				</div> -->
			</div>
		</div>
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN CONTENT -->
		<div id="main-content">
			<div class="container-fluid">
				<div class="section-heading">
					<h1 class="page-title">Data Tangki</h1>
				</div>
				<div class="row">
					<div class="col-md-12">
						<!-- BOOTSTRAP PROGRESS BARS -->
						<div class="panel-content">
							<!--<h4>Status Tangki</h4> -->
							<div style="height: 200px;">
								<!-- need predefined height -->
								<?php
									if (count($data)):
										foreach ($data as $key => $value):
								?>	
								<div id="tangki-<?php echo $value['id'] ?>" class="progress progress-striped vertical bottom wide" style="width:80px;">
									<div class="progress-bar progress-bar-info" data-transitiongoal="<?php echo $value['pa'] / $value['max_pa']*100 ?>"></div>
									<span class="nama-tangki"><?php echo $value['tank'] ?></span>
								</div>
								
								<?php
									endforeach;
								endif;
								?>
							</div>
						</div>
						<div class="panel-content">
							<h4>Detail Tangki</h4>
							<div class="table-responsive">
								<table id="display-tangki" class="table no-margin">
									<thead>
										<tr>
										<!--<th>id</th> -->
										<th>Tangki</th>
										<th>Pumpable</th>
										<th>Status</th>
										<th>Level</th>
										<th>Max Level</th>
										<th>Max Pumpable</th>
										<th>Upd Terakhir</th>
										</tr>
									</thead>
									<tbody>
										<?php
											if (count($data)):
												foreach ($data as $key => $value):
										?>
											<tr id="detail-tangki-<?php echo $value['id'] ?>"  class="aktiv-<?php echo $value['statusnya'] ?>">
												<!--<td><?php //echo $value['id'] ?></td> -->
												<td><?php echo $value['tank'] ?></td>
												<td><?php echo $value['pa'] ?></td>
												<td><?php echo $value['statusnya'] ?></td>
												<td><?php echo $value['level'] ?></td>
												<td><?php echo $value['max_level'] ?></td>
												<td><?php echo $value['max_pa'] ?></td>
												<td><?php echo $value['time'] ?></td>
											</tr>
										<?php
												endforeach;
											endif;
										?>
									</tbody>
								</table>
							</div>
						</div>
						<div class="panel-content">
							<h4>set aktif topping &amp; adjust deret tank topping</h4>
							<div class="row">
								<div class="col-md-4">
									<form action="">
										<div class="form-group">
											<label for="set-topping-aktif" class="control-label">topping aktif</label>
											<input type="text" id="set-topping-aktif" class="form-control">
											<span class="help-block">9</span>
										</div>
										<input type="submit" class="btn btn-primary" value="save">
										<!-- 
											<div class="form-group">
											<label for="adjust-deret-topping" class="control-label">deret topping</label>
											<input type="text" id="adjust-deret-topping" class="form-control">
											<span class="help-block">9-9-9-9</span>
										</div> 
										<input type="submit" class="btn btn-primary" value="save"> -->
									</form>
								</div>
							</div>
						</div>
						<!-- END BOOTSTRAP PROGRESS BARS -->
					</div>
				</div>
			</div>
		</div>
		<!-- END MAIN CONTENT -->
		<div class="clearfix"></div>
		<footer>
			<p class="copyright">&copy; 2017 <a href="#" target="_blank">Pertamina</a>. All Rights Reserved.</p>
		</footer>
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="assets/vendor/jquery/jquery.min.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/vendor/metisMenu/metisMenu.js"></script>
	<script src="assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/vendor/bootstrap-progressbar/js/bootstrap-progressbar.min.js"></script>
	<script src="assets/scripts/common.js"></script>
	<script>
	$(function() {
		$('#progress-format1 .progress-bar').progressbar({
			display_text: 'fill'
		});

		$('#progress-format2 .progress-bar').progressbar({
			display_text: 'fill',
			use_percentage: false
		});

		$('#progress-custom-format .progress-bar').progressbar({
			display_text: 'fill',
			use_percentage: false,
			amount_format: function(p, t) {
				return p + ' of ' + t;
			}
		});

		$('#progress-striped .progress-bar, #progress-striped-active .progress-bar, #progress-stacked .progress-bar').progressbar({
			display_text: 'fill'
		});

		$('.progress.vertical .progress-bar').progressbar();
		$('.progress.vertical.wide .progress-bar').progressbar({
			display_text: 'fill'
		});

	});
	</script>
	<script type="text/javascript" language="javascript" src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" language="javascript" src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
	
	
	<script type="text/javascript" language="javascript" src="bower_components/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
	<script type="text/javascript" language="javascript" src="bower_components/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
	<script type="text/javascript" language="javascript" src="bower_components/datatables.net-buttons/js/buttons.flash.min.js"></script>
	<script type="text/javascript" language="javascript" src="bower_components/datatables.net-buttons/js/buttons.colVis.min.js"></script>  
	<script type="text/javascript" language="javascript" src="bower_components/datatables.net-buttons/js/buttons.print.min.js"></script> 
	<script type="text/javascript" language="javascript" src="bower_components/datatables.net-buttons/js/buttons.html5.min.js"></script>
	<script type="text/javascript" language="javascript" src="http://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
	<script type="text/javascript" language="javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
	
	
	<script>
		$(document).ready(function() {
			$('#display-tangki').dataTable({
				dom: 'Bfrtip',
				buttons: [
					'copyHtml5',
					'excelHtml5',
					'csvHtml5',
					{
						extend: 'pdfHtml5',
						download: 'open',
						message: 'PDF created by PDFMake with Buttons for DataTables.'
					}
				]
			});
		});

	</script>
</body>

</html>
