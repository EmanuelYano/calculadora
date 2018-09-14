<?php 
	
	class calcConvert
	{
		
		function cCpF($t)
		{
			return $t * 1.8 + 32;
		}
		function cFpC($t)
		{
			return $t - 32 / 1.8;
		}
	}


 ?>