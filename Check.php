<?php 
		$x=12;
		switch($x)
		{
			case 10:echo " number is equal to 10";    
					break;    
			case 20:echo " number is equal to 20";    
					break;
			default:echo " number is not equal to 10 or 20 ";    				
		}
		// Example of forEach is below
		$a=array("summer","winter","autumn");
		foreach($a as $var)
			echo "Season is $var <br>";
		?>