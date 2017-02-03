<?php

require('connect.php');
session_start();

if (  isset($_SESSION['logged']) ) {
		
		if ($_SESSION['logged'] == 1) {
		
				header('Location: dashboard.php');
			
		}
	
	
}

if ( isset($_POST['nokp']) && isset($_POST['studentno']) ) {
	
	$nokp = $_POST['nokp'];
	$studentno = $_POST['studentno']; 
	
	$verified=verifylogin($link,$nokp, $studentno);
	
	
	if ($verified) {
		$_SESSION['studentno'] = $studentno;
		$_SESSION['nokp'] = $nokp;
		$_SESSION['studentname'];
		$_SESSION['faculty'];
		$_SESSION['logged']=1;
		
		
		
		header('Location: dashboard.php');
				
	}
		
}



?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
<link rel="stylesheet" type="text/css" href="login.css" />

<link rel="stylesheet" type="text/css" href="css/jquery-ui-1.8.14.custom.css" />
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.min.js"></script>
<title>Sistem Pendaftaran Kolej</title>

<script type="text/javascript">
<?php if (isset($verified) && $verified == 0) { ?>

		
		 $(document).ready(function() {

				  $('#container').text('Invalid Username or Password').addClass('ui-state-error');
  				  $('#container').hide();
				  $('#container').fadeIn(1600);
				  $('#form').effect("shake", { times:6,distance:30 }, 80);
				  
				  // enable vibration support
				navigator.vibrate = navigator.vibrate || navigator.webkitVibrate || navigator.mozVibrate || navigator.msVibrate;

				if (navigator.vibrate) {
					// vibration API supported
					navigator.vibrate(500);
				}
 				
         });

	
<?php }    ?>
</script>

</head>

<body>



<div  class="login-page">

  <div id="form" class="form">
  <p><img src="images/logouitm.jpg" width="207" height="90" />
  <h3>Sistem Daftar Masuk Kolej</h3></p>
   <p id="container"></p>
    <form class="login-form" method="post" action="index.php">
      <input type="text" name="studentno" placeholder="No Pelajar"/>
      <input type="password" name="nokp" placeholder="No MyKAD (961234121234)"/>
      <button>login</button>
      <p class="message">Masalah Sistem? Hubungi <a href="tel:+6049882896">+6049882896</a></p>
	  
    </form>
  </div>
</div>


</body>
</html>
