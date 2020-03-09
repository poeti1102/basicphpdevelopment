<?php
	/*
	/	add,sub,multiply,division
	/	$num1,$num2
	/	$total -> echo
	/	
	/	$operator = 'add','sub','multiply','divide'
	/	switch,ifelse
	/	add(),sub(),multiply(),divide()
	/
	/
	*/

	function add($num1,$num2)
	{
		return $num1 + $num2;
	}

	function sub($num1,$num2)
	{
		return $num1 - $num2;
	}

	function multiply($num1,$num2)
	{
		return $num1 * $num2;
	}

	function divide($num1,$num2)
	{
		return $num1 / $num2;
	}

	$number1 = 45;
	$number2 = 30;
	$total = 0;

	$operator = 'sub';
	switch($operator)
	{
		case 'add' :
			$total = add($number1 , $number2);
			echo $total;
			break;
		case 'sub' :
			$total = sub($number1 , $number2);
			echo $total;
			break;
		case 'multiply' :
			$total = multiply($number1 , $number2);
			echo $total;
			break;
		case 'divide' :
			$total = divide($number1 , $number2);
			echo $total;
			break;	
	}
?>