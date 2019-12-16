<?php 
	include ('config/database.php');
	include('model/account_login.php');

	$controller = filter_input(INPUT_POST, 'controller');
	if(empty($controller)){
		$controller = filter_input(INPUT_GET, 'controller');
		if(empty($controller)){
			$controller = 'c_login';
		}
	}

	switch ($controller) {
		case 'c_login':
			include('controller/c_login.php');
			break;
		case 'c_book':
			include('controller/c_book.php');
			break;
		case 'c_student':
			include('controller/c_student.php');	
			break;	
		case 'c_receipts':
			include('controller/c_receipts.php');	
			break;	

		default:
			# code...
			break;
	}

 ?>