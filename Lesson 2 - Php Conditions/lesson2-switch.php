<?php
	$mark = 20;

	switch($mark)
	{
		case($mark >= 80) : echo "Pass with credits!!!";break;
		case($mark >= 40 && $mark < 80) : echo "Pass";break;
		case($mark < 40) : echo "Failed! Try Again!";break;
	}
?>