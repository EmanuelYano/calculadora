<?php 

	include_once ('class/calC.class.php');
	$calC = new calcConvert ();

	$t = (isset($_POST['t'])) ? $_POST['t'] : null;
	$temp = (isset($_POST['nt'])) ? $_POST['nt'] : null;
	
	switch ($temp) {
		case 'c':
			$r = $calC -> cCpF($t);
			echo $r;
			break;
		case 'f':
			$r = $calC -> cFpC($t);
			echo $r;
			break;				
	}
	

?>