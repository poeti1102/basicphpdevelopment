<?php
	function hello()
	{
		echo "Hello YDC";
	}

	//hello();

	function greeting($name)
	{
		echo "Hello $name";
	}

	//greeting("Lin Aung");
	//greeting('From Lin Aung');
	// $name = "YDC";

	// greeting($name);

	function add($num1 , $num2)
	{
		// echo $num1 + $num2 ;
		return $num1 + $num2;
	}

	$total = add(12,12);
	print($total);
	
?>