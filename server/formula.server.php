<?php  

	include_once('class/formulas.class.php');
	$formulas = new formulas();

	$f1 = isset($_POST['f1']) ? $_POST['f1'] : null;
	$f2 = isset($_POST['f2']) ? $_POST['f2'] : null;
	$conta = isset($_POST['cl1']) ? $_POST['cl1'] : null;
	if ($conta != null) {
		switch ($conta) {
		case 'l1':
			$r = $formulas -> latente_one($f1,$f2);
			break;
		case 'l2':
			$r = $formulas -> latente_two($f1,$f2);
			break;
		case 'l3':
			$r = $formulas -> latente_three($f1,$f2);
			break;
		}
		echo $r;
	}	
?>


