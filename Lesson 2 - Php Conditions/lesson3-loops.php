<?php
	// While Loop
	$num = 1;
	while ($num <= 10)
	{
		echo "Number : {$num} <br/>";
		$num = $num + 1;
	}

	// Do-While Loop
	$num = 11;
	do {
			echo "Number : {$num} <br/>";
			$num++;
		} while($num <= 10);

	// For Loop
	for($num = 1; $num <= 10 ; $num += 2){
		echo "Number : $num <br/>";
	}

	// ForEach Loop
	$names = ['Mg Mg','Tun Tun','Kyaw Kyaw'];
	foreach($names as $name)
	{
		echo $name . "<br/>";
	}
?>