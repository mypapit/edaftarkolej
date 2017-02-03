<?php
require('session.php');
require('connect.php');
  
  $result=verifykolej($link,$_SESSION['studentno']);
  
  
  $row = mysqli_fetch_assoc($result);
  
  ?>
  
  
  <!doctype html>
  <html lang="en">
  <head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  
	<title>Sistem Pendaftaran Kolej</title>
  
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
	<meta name="viewport" content="width=device-width" />
  
  
	<!-- Bootstrap core CSS     -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
  
	<!-- Animation library for notifications   -->
	<link href="assets/css/animate.min.css" rel="stylesheet"/>
  
	<!--  Light Bootstrap Table core CSS    -->
	<link href="assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>
  
  
	<!--  CSS for Demo Purpose, don't include it in your project     -->
	<link href="assets/css/demo.css" rel="stylesheet" />
  
  <link href="css/breadcrumb.css" rel="stylesheet" />
  
	<!--     Fonts and icons     -->
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
	<link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">
</script>

<script>
$(document).ready(function(){
		
		$("#agreex").click(function() {
				
				if ($("#agreex").prop("checked") ) {
							$("#proceed").show(250);		
						
				} else {
				
								$("#proceed").hide(250);
				}
		
			});
		$("#proceed").hide();
		
		
		
		
		


}); 
</script>
  
  </head>
  
  
  <body>
  
  <div class="wrapper">
  
		  <?php require('sidebarmenu.php'); ?>
	
  
  <div class="main-panel">
		<nav class="navbar navbar-default navbar-fixed">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">Dashboard</a>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav navbar-left">
						<li>
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<i class="fa fa-dashboard"></i>
							</a>
						</li>
					   
						
					</ul>
  
					<ul class="nav navbar-nav navbar-right">
					  
					   
						<li>
							<a href="logout.php">
								Log out
							</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
  
  
		<div class="content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="card">
                        
                             <!--Breadcrumb -->
                       
                       <div class="container">
	<div class="row">
		<ul class="breadcrumb">
			<li class="completed"><a href="javascript:void(0);"><strong>LANGKAH 1 :</strong><br /> Keputusan Masuk Kolej</a></li>
			<li class="completed"><a href="javascript:void(0);"><strong>LANGKAH 2 :</strong><br /> Daftar Perkakasan Elektrik</a></li>
            
            <li class="active"><a href="javascript:void(0);"><strong>LANGKAH 3 :</strong><br /> Aku Janji Daftar Masuk Kolej</a></li>
            
            <li ><a href="javascript:void(0);"><strong>LANGKAH 4 :</strong><br /> Cetakan Slip (TAMAT)</a></li>



		</ul>
	</div>
</div>
                       
                       <!-- Breadcrumb ends -->
							<div class="header">
								<h4 class="title">AKU JANJI DAFTAR MASUK KOLEJ</h4>
							  
							</div>
							<div class="content">
  <p>Adalah dengan ini saya  <strong><?php echo $row['nama']?> (<?php echo $row['studentno']?>)</strong>
  mengaku akan mematuhi segala arahan dan peraturan Unit Pengurusan Kolej dan NR (UPKNR serta Universiti Teknologi MARA Perlis. Sekiranya saya didapati melanggar mana-mana peraturan kolej kediaman dan UiTM, saya dengan rela hati bersedia untuk dikenakan denda dan tindakan tatatertib mengikut Akta 174 atau dibuang kolej kediaman atau lain-lain tindakan yang diperuntukkan.</p>
  
  <h4>Mengikut Akta 174, seorang Pelajar UiTM dilarang:</h4>
  <ul>
  <li>Memiliki, menyimpan, menjual, mengedar, menghisap rokok dan seumpamanya</li>
  <li>Berpindah bilik tanpa kebenaran pihak pengurusan kolej</li>
  <li>Berkelakuan merosakkan harta benda uitm (vandalisme)</li>
  <li>Berjudi, minum arak, bergaduh, buli, bermain mercun, memiliki senjata berbahaya dan bahan lucah.</li>
  <li>Mengubah atau mengalih kedudukan perabot selain dari Pelan Susunatur perabot bilik</li>
  <li>Membawa peralatan elektrik yang dilarang seperti pembakar roti, rice cooker, water heater, lampu tidur televisyen dan peti ais.</li>
  <li>Tidak menggunakan kunci yang disediakan oleh pengurusan kolej</li>
  <li>Meninggalkan barang-barang persendirian tanpa kebenaran atau tidak dituntut dalam tempoh waktu yang ditetapkan (cth: Basikal, buku, pakaian dan lain-lain barang berharga)</li>
  </ul>
  
  <h4>Pengakuan Penerimaan Bilik</h4>
  <p>Sebarang kerosakkan/kecacatan/kehilangan Perabot dan harta benda UiTM yang didapati dalam bilik kediaman adalah menjadi tanggungjawab saya dan sebarang kerosakan terhadap harta benda tersebut.
  </p>
  
  <div align="center">
  <p><input name="agree" type="checkbox" value="agree" id="agreex"/><label for="agreex"> Saya bersetuju</label>
  </p>
  </div>
  
  <div id="proceed">
  <form action="cetakslip.php">
  <button type="submit" class="btn btn-info btn-fill pull-right">Seterusnya</button>
  </form>           
  </div>                   
									<div class="clearfix"></div>
  
  
							</div>
						</div>
					</div>
  
				</div>
			</div>
		</div>
  
		<footer class="footer">
			<div class="container-fluid">
			   
				<p class="copyright pull-right">
					&copy; 2016 <a href="http://www.perlis.uitm.edu.my/hafiz">Mohammad Hafiz Ismail</a>
				</p>
			</div>
		</footer>
  
  
	</div>
  </div>
  </div>
  
  </body>
  <!--   Core JS Files   -->
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="assets/js/bootstrap-checkbox-radio-switch.js"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>
  </html>