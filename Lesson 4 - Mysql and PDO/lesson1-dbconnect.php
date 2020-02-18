<?php
	$host = 'localhost';
	$db   = 'basicwebdev';
	$user = 'root';
	$pass = '';

	$connection = "mysql:host=$host;dbname=$db;charset=utf8mb4";

	try {
	     $pdo = new PDO($connection, $user, $pass);
	} catch (\PDOException $e) {
	     //
	}
?>