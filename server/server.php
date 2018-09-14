<?php 

	include_once("class/cal.class.php");
	$calculadora = new calcBasic ();
	if (isset($_POST['n1'])) {
		$n1 = $_POST['n1'];
		$n2 = $_POST['n2'];
	}else if (isset($_POST['t'])) {
		$t = $_POST['t'];
	}
	if (isset($_POST['op'])) {
		$op = $_POST['op'];		
		Switch ($op){
			case 'soma':
				$r = $calculadora -> soma($n1,$n2); 
				echo "$n1  +  $n2  = ";
			break;
			case 'sub':
				$r = $calculadora -> sub($n1,$n2); 
				echo "$n1  -  $n2  = ";
			break;
			case 'div':
				$r = $calculadora -> div($n1,$n2); 
				echo "$n1  /  $n2  = ";
			break;
			case 'mult':
				$r = $calculadora -> mult($n1,$n2); 
				echo "$n1  *  $n2  = ";
			break;
			
			default:
				$r = "Error";
				break;		
		}		 
		echo $r;
	}
	
?>