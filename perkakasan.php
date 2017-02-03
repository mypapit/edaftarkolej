<?php
require('session.php');
require('connect.php');

if (isset( $_POST['hp']) && isset( $_POST['komputer']) && isset( $_POST['other']) ) {
	
	$studentno = $_SESSION['studentno'];
	$hp = $_POST['hp'];
	$komputer = $_POST['komputer'];
	$seterika = $_POST['seterika'];
	$kipas = $_POST['kipas'];
	$radio = $_POST['radio'];
	$dryers = $_POST['dryers&nbsp;'];
	$other = $_POST['other'];
	
	//echo $hp;
	//echo $komputer;
	$success=updateperkakasan($link,$studentno,$hp,$komputer,$seterika,$kipas,$radio,$dryers,$other);
	
	if ($success == FALSE) {
		die("sux");	
	} else {
		header ('Location: akujanji.php');
			
		
	}
	
}

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
			<li class="active"><a href="javascript:void(0);"><strong>LANGKAH 2 :</strong><br /> Daftar Perkakasan Elektrik</a></li>
            
            <li ><a href="javascript:void(0);"><strong>LANGKAH 3 :</strong><br /> Aku Janji Daftar Masuk Kolej</a></li>
            
            <li ><a href="javascript:void(0);"><strong>LANGKAH 4 :</strong><br /> Cetakan Slip (TAMAT)</a></li>



		</ul>
	</div>
</div>
                       
                       <!-- Breadcrumb ends -->
      
                            <div class="header">
                                <h4 class="title">DAFTAR PERKAKASAN ELEKTRIK</h4>
                                <p>&nbsp;</p>
                             
                                <div class="alert alert-info">
                                <p><strong>MAKLUMAN</strong><br />
                                Setiap peralatan elektrik dikenakan <strong>sumbangan sebanyak RM10.00</strong>. Peralatan yang digunakan mestilah mendapat kelulusan SIRIM atau Jabatan Tenaga. Kegagalan untuk mengisytiharkan peralatan merupakan satu kesalahan dibawah <strong>Peraturan Kolej (Semakan 1991)</strong></p>
                            </div>    
                                <div class="alert alert-danger">
                                <p><strong>PERKAKASAN ELEKTRIK YANG DILARANG</strong>
                                <p>Pembakar roti, Rice cooker,Dawai Pemanas air, Cerek Elektrik, Televisyen dan Peti Sejuk.</p>
                                </div>
      <form method="post" action="perkakasan.php" onSubmit="if(!confirm('Setiap perkakasan akan dicaj RM 10. Adakah anda pasti untuk mendaftar perkakasan yang dinyatakan?')){return false;}">                      
                            <div class="content">
 <div class="content table-responsive table-full-width">
 
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>Bil</th>
                                    	<th>Item</th>
                                    	<th>Unit</th>
                                    	
                                     </thead>
                                    <tbody>
                                        <tr>
                                        	<td>1</td>
                                        	<td>Telefon Bimbit (atau Tablet) dan Pengecas</td>
                                        	<td>
                                            <select name="hp">
                                            <option value="0">0</option>
                                            <option value="1" selected>1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            </select>
                                            
                                            </td>
                                        	
                                        </tr>
                                        <tr>
                                        	<td>3</td>
                                        	<td>Komputer/Laptop (termasuk set speaker)</td>
                                        	<td>
                                            <select name="komputer">
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            </select>
                                            
                                            </td>
                                        </tr>
                                        <tr>
                                        	<td>4</td>
                                        	<td>Seterika</td>
                                        	<td>
                                            <select name="seterika">
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            </select>
                                            
                                            </td>
                                        </tr>
                                        <tr>
                                        	<td>5</td>
                                        	<td>Kipas Meja</td>
                                        	<td>
                                            <select name="kipas">
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            </select>
                                            
                                            </td>
                                        </tr>
                                        <tr>
                                        	<td>6</td>
                                        	<td>Radio atau Pemain MP3/MP4</td>
                                        	<td>
                                            <select name="radio">
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            </select>
                                            
                                            </td>
                                        </tr>
                                        
                                       <tr>
                                        	<td>7</td>
                                        	<td>Pengering Rambut</td>
                                        	<td>
                                            <select name="dryers">
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            </select>
                                            
                                            </td>
                                        </tr>

                                        <tr>
                                        	<td>8</td>
                                        	<td>Alatan Eletrik lain</td>
                                        	<td>
                                            <select name="other">
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            </select>
                                            
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>

                            </div>




 <button type="submit" class="btn btn-info btn-fill pull-right">Seterusnya</button>
</form>
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
                    &copy; 2016 <a href="http://www.creative-tim.com">Mohammad Hafiz bin Ismail</a>
                </p>
            </div>
        </footer>


    </div>
</div>
</div>

</body><!--   Core JS Files   -->
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
