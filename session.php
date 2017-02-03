<?php

//session.php
session_start();


if (  isset($_SESSION['logged']) && isset($_SESSION['studentno']) ) {
		
	
	
} else {

			header('Location: index.php');
			exit;
	

}



?>
