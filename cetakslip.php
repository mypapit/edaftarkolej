<?php
  require('session.php');
require('connect.php');



$result = verifykolej($link,$_SESSION['studentno']);


if ( mysqli_num_rows($result) < 1)  {
		header("Location: maaf.php");
			
}
  $row=mysqli_fetch_assoc($result);
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
	<link href="css/breadcrumb.css" rel="stylesheet"/>
  
  
  
	<!--     Fonts and icons     -->
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
	<link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
    <link href="assets/css/demo.css" rel="stylesheet" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">
</script>

  
  </head>
  
  
  <body onLoad="alert('Perhatian: Sila cetak slip ini dan bawa ke Pejabat Kolej untuk urusan daftar masuk kolej')">
  
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
            
            <li class="completed"><a href="javascript:void(0);"><strong>LANGKAH 3 :</strong><br /> Aku Janji Daftar Masuk Kolej</a></li>
            
            <li class="active"><a href="javascript:void(0);"><strong>LANGKAH 4 :</strong><br /> Cetakan Slip (TAMAT)</a></li>



		</ul>
	</div>
</div>



                            <div class="header">
  <h4 class="title">CETAKAN SLIP</h4>
  </div>
  <div class="NoPelajar">
  <p>

<table class="kolej" border="0" style="width:100%">
  <tr>
    <td><?php echo $row['sesi']?></td>
    <td align="right"><?php echo $row['kolej']?></td>
  </tr>
</table>
</p>
</div>
                            
     
    <p>&nbsp;</p>
                            
                           <table border="1" style="width:100%">
  <tbody>
    <tr>
      <td><strong>No Pelajar</strong></td>
      <td><strong>Nama</strong></td>
      <td><strong>Program</strong></td>
      <td><strong>Bilik</strong></td>
      <td><strong>Katil</strong></td>
    </tr>
    <tr>
      <td><?php echo $row['studentno']?>&nbsp;&nbsp;</td>
      <td><?php echo $row['nama']?>&nbsp;&nbsp; </td>
      <td><?php echo $row['kodprogram']?>&nbsp;&nbsp;</td>
      <td><?php echo $row['bilik']?>&nbsp;&nbsp;</td>
      <td><?php echo $row['katil']?>&nbsp;&nbsp;</td>
    </tr>
  </tbody>
</table>
<p>&nbsp;</p>
  
  <p>Adalah dengan ini saya  <strong><?php echo $row['nama']?></strong> 
  mengaku akan mematuhi segala arahan dan peraturan Unit Pengurusan Kolej dan NR (UPKNR serta Universiti Teknologi MARA Perlis. Sekiranya saya didapati melanggar mana-mana peraturan kolej kediaman dan UiTM, saya dengan rela hati bersedia untuk dikenakan denda dan tindakan tatatertib mengikut Akta 174 atau dibuang kolej kediaman atau lain-lain tindakan yang diperuntukkan.</p>
  
  <h4>Pendaftaran Perkakasan Elektrik</h4>
  <?php require("cetakslipperkakasan.php");
  
  $bilpk=0;
  
  ?>
  
  <table border="1" style="width:100%">
  <tbody>
    <tr>
      <td><strong>Bil</strong></td>
      <td><strong>Peralatan</strong></td>
      <td><strong>Kuantiti</strong></td>
    </tr>
    <?php 
		if ($pkhp >0) {
			$bilpk = $bilpk+1;
			
	?>
    <tr>
      <td><?php echo $bilpk;?></td>
      <td>Telefon Bimbit (atau Tablet) dan Pengecas</td>
      <td><div align="center"><?php echo $row['hp'] ?></div></td>
    </tr>
    
    <?php } //end ifpkhp ?>

    <?php 
		if ($pkkomputer >0) {
						$bilpk = $bilpk+1;
	?>
    
     <tr>
      <td><?php echo $bilpk;?></td>
      <td>Komputer/Laptop (termasuk set speaker)</td>
      <td><div align="center"><?php echo $row['komputer'] ?></div></td>
    </tr>
    <?php } //end if pkkomputer ?>
    
     <?php 
		if ($pkseterika >0) {
						$bilpk = $bilpk+1;
	?>
    
     <tr>
      <td><?php echo $bilpk;?></td>
      <td>Seterika</td>
      <td><div align="center"><?php echo $pkseterika ?></div></td>
    </tr>
    <?php } //end if pkseterika ?>
    
     <?php 
		if ($pkkipas >0) {
						$bilpk = $bilpk+1;
	?>
    
     <tr>
      <td><?php echo $bilpk;?></td>
      <td>Kipas Meja</td>
      <td><div align="center"><?php echo $pkkipas ?></div></td>
    </tr>
    <?php } //end if pkkipas ?>
    
     <?php 
		if ($pkradio >0) {
						$bilpk = $bilpk+1;
	?>
    
     <tr>
      <td><?php echo $bilpk;?></td>
      <td>Radio / Pemain Audio (termasuk MP3/MP4)</td>
      <td><div align="center"><?php echo $pkradio ?></div></td>
    </tr>
    <?php } //end if pkradio ?>
    
     <?php 
		if ($pkdryers >0) {
						$bilpk = $bilpk+1;
	?>
    
     <tr>
      <td><?php echo $bilpk;?></td>
      <td>Pengering Rambut</td>
      <td><div align="center"><?php echo $pkdryers ?></div></td>
    </tr>
    <?php } //end if pkdryers ?>
    
      <?php 
		if ($pkother >0) {
						$bilpk = $bilpk+1;
	?>
    
     <tr>
      <td><?php echo $bilpk;?></td>
      <td>Lain-lain</td>
      <td><div align="center"><?php echo $pkother; ?></div></td>
    </tr>
    <?php } //end if pk ?>
        
     <tr>
      <td></td>
      <td><div align="center"><strong>JUMLAH SUMBANGAN(RM)</strong></div></td>
      <td><div align="center"><strong><?php echo (intval($bilpk)*10).".00"; ?></strong></div></td>
    </tr>
    
    

    
  </tbody>
</table>
  
  
  <h4>Pengakuan Penerimaan Bilik</h4>
  <p>Sebarang kerosakkan/kecacatan/kehilangan Perabot dan harta benda UiTM yang didapati dalam bilik kediaman adalah menjadi tanggungjawab saya dan sebarang kerosakan terhadap harta benda tersebut.
  </p>
  
  <p>&nbsp;</p>
 <p>
 Tanda Tangan Pelajar: ______________________  Tarikh:____________________
 </p>
 <p><strong><?php echo $row['nama']?> (<?php echo $row['studentno']?>)<strong></p>
 <p>* Sila bawa slip ini ke kolej semasa pengambilan kunci</p>
 
  
                    <div id="proceed">
<form action="cetakslipreal.php">
  <button type="submit"  class="btn btn-info btn-fill pull-right"><i class="fa fa-print"></i>Cetak Slip</button>
 </form>         
  </div>       
									<div class="clearfix"></div>
  
  
						  </div>
						</div>
					</div>
  
				</div>
			</div>
		</div>
  
		  
  
	</div>
  </div>
  </div>
  
  </div>
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