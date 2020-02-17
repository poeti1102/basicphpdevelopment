<?php
	$age1 = 20; // Mg Mg
	$age2 = 115; // Tun Tun

	if($age1 > $age2)
	{
		echo "Mg Mg is older than Tun Tun";
	} else {
		echo "Mg Mg is younger than Tun Tun";
	}

	$password = "123456";
	if($password == "123456")
	{
		echo "Password correct!";
	} else {
		echo "Incorrect Password!";
	}

	$name = array('Mg Mg' , 'Tun Tun', 'Banana');
	$age = [
		'Mg Mg' => 17,
		'Tun Tun' => 45,
		'Banana' => 16
	];

	if( $name[2] == 'Banana' && $age['Banana'] < 17 )
	{
		echo 'Most handsome guy';
	} else {
		echo 'Ugly';
	}

	$mark = 80;

	if($mark >= 80)
	{
		echo "Pass with Credits";
	}
	elseif( $mark >= 40 && $mark < 80)
	{
		echo "Pass!";
	}
	elseif( $mark < 40)
	{
		echo "Failed! Try Again!";
	}

	// == , != , > , < , >= , <=
?>