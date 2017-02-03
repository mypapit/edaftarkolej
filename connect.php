<?php



$link=mysqli_connect('127.0.0.1','dummy','dummy','untuktesting');

function verifylogin ($link,$nokp, $studentno) {

	$result=mysqli_query($link,"SELECT studentid,nokp FROM daftarkolej WHERE nokp like '$nokp' AND studentid like '$studentno'");
	//$result=mysqli_query($link,"SELECT * WHERE nokp like '$nokp' AND studentid like '$studentno'");
	
	return mysqli_num_rows($result);
	
	
}

function verifykolej($link,$studentno) {
	//$result = mysqli_query($link, "SELECT nama,kolej,bilik,katil,studentno,kodprogram,sesi from katilkolej WHERE studentno LIKE '$studentno'");
	
	
	$result = mysqli_query($link, "SELECT * from katilkolej WHERE studentno LIKE '$studentno'");
	
	return $result;
	
}

function updateperkakasan($link,$studentno,$hp,$komputer,$seterika,$kipas,$radio,$dryers,$other) {
	$result = mysqli_query($link,"UPDATE katilkolej SET hp = '$hp',  komputer  = '$komputer',  seterika  = '$seterika',  kipas  = '$kipas',  radio  = '$radio',  dryers  = '$dryers',  other  = '$other' WHERE  katilkolej.studentno  = $studentno");	
	
	if ($result === FALSE) {
    return FALSE;
	}
		else if ($result === TRUE) {
			return TRUE;
	}
	
	return FALSE;
}


//$_SESSION['studentno']='2015897564';
?>
