<?php 
	class formulas
	{
		//Calor latente
		function latente_one($f1,$f2)
		{
			return $f1 / $f2; 
		}
		function latente_two($f1,$f2)
		{
			return $f1 / $f2; 
		}
		function latente_three($f1,$f2)
		{
			return $f1 * $f2; 
		}
		
		//Calor sensivel
		function especific_one($x,$y,$z,$z1)
		{
			return $x * $y * ($z1-$z);
		}
		function especific_two($x,$y,$z,$z1)
		{
			return $x / ($y*($z1-$z));
		}
		function especific_three($x,$y,$z,$z1) //calcular T final
		{
			return ($x / ($y * $z)) + $z1;
		}
		function especific_four($x,$y,$z,$z1) //calcular T inicial
		{
			return (-1*($x / ($y * $z)) - $z1);
		}
	}
?>
