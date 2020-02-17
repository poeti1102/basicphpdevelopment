<?php
	for($num = 1 ; $num <= 100 ; $num++)
	{
		switch ($num) {
			case (($num % 3) == 0) && (($num % 5) == 0) : 
				echo "Number $num ::: PowerRanger<br/>"; break;
			case (($num % 3) == 0) : 
				echo "Number $num ::: Power<br/>"; break;
			case (($num % 5) == 0) : 
				echo "Number $num ::: Ranger<br/>"; break;
			default : 
				echo "Number $num <br/>";
		}
	}
?>