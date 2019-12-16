<?php 
	$dsn =  'mysql:host=localhost;dbname=libmanagement';
	$username = 'root';
	$pass ='';

	// hien thi ma utf8
	$options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");

	try {
		$db = new PDO($dsn,$username,$pass,$options);
		// echo 'connect seccussful';
	}catch(pdoException $e){
		$error_message = $e->getMessage();
		echo 'Error Connecting to Database'.$error_message;
	}

 ?>