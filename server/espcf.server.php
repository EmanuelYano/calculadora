<?php  

	include_once('class/formulas.class.php');
	$formulas1 = new formulas();

	$x = isset($_POST['g1']) ? $_POST['g1'] : null;
	$y = isset($_POST['g2']) ? $_POST['g2'] : null;
	$z = isset($_POST['g3']) ? $_POST['g3'] : null;
	$z1 = isset($_POST['g3_1']) ? $_POST['g3_1'] : null;
	$conta = isset($_POST['ce1']) ? $_POST['ce1'] : null;
	
	if ($conta == 'l3') {	$conta='l2'; }

	if ($conta != null) {
		switch ($conta) {
		case 'l1':
			$r = $formulas1 -> especific_one($x,$y,$z,$z1);
			echo "$x * $y * ($z1 - $z) = ";
			break;
		case 'l2':
			$r = $formulas1 -> especific_two($x,$y,$z,$z1);
			echo "$x / $y * ($z1-$z) = " ;
			break;
		case 'l5':
			$r = $formulas1 -> especific_three($x,$y,$z,$z1);
			echo "($x / ($y * $z)) + $z1 = ";
			break;		
		case 'l4':
			$r = $formulas1 -> especific_four($x,$y,$z,$z1);
			echo "(-1 *($x / ($y * $z))) = ";
			break;
		}
		echo $r;
	}	
?>

