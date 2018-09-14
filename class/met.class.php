<?php  
	
	class metragem
	{
		
		function km_m ($c)
		{
			return $c * 1000;
		}
		function km_cm ($c)
		{
			return $c * 100000;
		}
		function km_mm ($c)
		{
			return $c * 1000000;
		}
		//fim km
		function m_km ($c)
		{
			return $c / 1000;
		}
		function m_cm ($c)
		{
			return $c * 100;
		}
		function m_mm ($c)
		{
			return $c * 1000;
		}
		//fim m
		function mm_km ($c)
		{
			return $c / 10000000;
		}
		function mm_m ($c)
		{
			return $c / 1000;
		}
		function mm_cm ($c)
		{
			return $c / 100;
		}
		//fim mm		
	}
?>