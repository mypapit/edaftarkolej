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
  
	<title>Slip Pendaftaran Kolej - <?php echo $row['studentno']?></title>
  
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
	<meta name="viewport" content="width=device-width" />
  
  
	<!-- Bootstrap core CSS     -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
  
	<!-- Animation library for notifications   -->
	<link href="assets/css/animate.min.css" rel="stylesheet"/>
  
	<!--  Light Bootstrap Table core CSS    -->
	<link href="assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>
  
  
	<!--  CSS for Demo Purpose, don't include it in your project     -->
	
  
  
	<!--     Fonts and icons     -->
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
	<link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
    <link href="assets/css/demo.css" rel="stylesheet" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">
</script>

  
  </head>
  
  
  <body onLoad="window.print()">
<div class="content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="card">
							<div class="header">
	
    							
	
    <div align="right">
<img src="barcode.php?size=26&text=<?php echo $row['studentno']?>" alt="<?php echo $row['studentno']?>" />
    </div>
                        	</div>
							<div class="content">
<table class="kolej" border="0" style="width:100%">
  <tr>
    <td><?php echo $row['sesi']?></td>
    <td align="right"><?php echo $row['kolej']?></td>
  </tr>
</table>
                            
     
    <p>&nbsp;</p>
                            
                           <table border="1" style="width:100%">
  <tbody>
    <tr>
      <td><div align="center"><strong>No Pelajar</strong></div></td>
      <td><div align="center"><strong>Nama</strong></div></td>
      <td><div align="center"><strong>Program</strong></div></td>
      <td><div align="center"><strong>Bilik</strong></div></td>
      <td><div align="center"><strong>Katil</strong></div></td>
    </tr>
    <tr>
      <td><div align="center"><?php echo $row['studentno']?>&nbsp;&nbsp;</div></td>
      <td><div align="center"><?php echo $row['nama']?>&nbsp;&nbsp; </div></td>
      <td><div align="center"><?php echo $row['kodprogram']?>&nbsp;&nbsp;</div></td>
      <td><div align="center"><?php echo $row['bilik']?>&nbsp;&nbsp;</div></td>
      <td><div align="center"><?php echo $row['katil']?>&nbsp;&nbsp;</div></td>
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
      <td><div align="center"><strong>Bil</strong></div></td>
      <td><div align="center"><strong>Peralatan</strong></div></td>
      <td><div align="center"><strong>Kuantiti</strong></div></td>
    </tr>
    <?php 
		if ($pkhp >0) {
			$bilpk = $bilpk+1;
			
	?>
    <tr>
      <td><div align="center"><?php echo $bilpk;?></div></td>
      <td>Telefon Bimbit (atau Tablet) dan Pengecas</td>
      <td><div align="center"><?php echo $row['hp'] ?></div></td>
    </tr>
    
    <?php } //end ifpkhp ?>

    <?php 
		if ($pkkomputer >0) {
						$bilpk = $bilpk+1;
	?>
    
     <tr>
      <td><div align="center"><?php echo $bilpk;?></div></td>
      <td>Komputer/Laptop (termasuk set speaker)</td>
      <td><div align="center"><?php echo $row['komputer'] ?></div></td>
    </tr>
    <?php } //end if pkkomputer ?>
    
     <?php 
		if ($pkseterika >0) {
						$bilpk = $bilpk+1;
	?>
    
     <tr>
      <td><div align="center"><?php echo $bilpk;?></div></td>
      <td>Seterika</td>
      <td><div align="center"><?php echo $pkseterika ?></div></td>
    </tr>
    <?php } //end if pkseterika ?>
    
     <?php 
		if ($pkkipas >0) {
						$bilpk = $bilpk+1;
	?>
    
     <tr>
      <td><div align="center"><?php echo $bilpk;?></div></td>
      <td>Kipas Meja</td>
      <td><div align="center"><?php echo $pkkipas ?></div></td>
    </tr>
    <?php } //end if pkkipas ?>
    
     <?php 
		if ($pkradio >0) {
						$bilpk = $bilpk+1;
	?>
    
     <tr>
      <td><div align="center"><?php echo $bilpk;?></div></td>
      <td>Radio / Pemain Audio (termasuk MP3/MP4)</td>
      <td><div align="center"><?php echo $pkradio ?></div></td>
    </tr>
    <?php } //end if pkradio ?>
    
     <?php 
		if ($pkdryers >0) {
						$bilpk = $bilpk+1;
	?>
    
     <tr>
      <td><div align="center"><?php echo $bilpk;?></div></td>
      <td>Pengering Rambut</td>
      <td><div align="center"><?php echo $pkdryers ?></div></td>
    </tr>
    <?php } //end if pkdryers ?>
    
      <?php 
		if ($pkother >0) {
						$bilpk = $bilpk+1;
	?>
    
     <tr>
      <td><div align="center"><?php echo $bilpk;?></div></td>
      <td>Lain-lain</td>
      <td><div align="center"><?php echo $pkother; ?></div></td>
    </tr>
    <?php } //end if pk ?>
        
     
    
    

    
  </tbody>
</table>
<p>

<div align="right"><strong>JUMLAH SUMBANGAN &nbsp;&nbsp;&nbsp;RM 10.00</strong></div>
  </p>
  
  <h4>Pengakuan Penerimaan Bilik</h4>
  <p>Sebarang kerosakkan/kecacatan/kehilangan Perabot dan harta benda UiTM yang didapati dalam bilik kediaman adalah menjadi tanggungjawab saya dan sebarang kerosakan terhadap harta benda tersebut.
  </p>
  
  <p>&nbsp;</p>
 <p>
 Tanda Tangan Pelajar: ______________________  Tarikh:____________________
 </p>
 <p><strong><?php echo $row['nama']?> (<?php echo $row['studentno']?>)<strong></p>
 <p>* Sila bawa slip ini ke kolej semasa pengambilan kunci</p>
 
  
                   
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
  
  </body>
  </html>