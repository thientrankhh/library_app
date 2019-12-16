<?php 
	include_once('model/account_login.php');
	include_once('model/books.php');
	include_once('model/m_account.php');
	include_once('model/m_categories.php');

	$action = filter_input(INPUT_POST, 'action');
	if(empty($action)){
		$action = filter_input(INPUT_GET, 'action');
		if(empty($action)){
			$action = 'login';
		}
	}

	switch ($action) {
		case 'login':
			// Get cookie
			if(isset($_COOKIE['user_name']) && isset($_COOKIE['password'])){
				$user_name = $_COOKIE['user_name'];
				$password = $_COOKIE['password'];
				//Kiểm tra cookie nếu tồn tại và hợp lệ cho vào hệ thống
				//Ngược lại cho hiện form login
				if(AccountDB::check_user($user_name,$password)){
					include('views/menu_book.php');	
				}else{
					include('views/login/login.php');
				}
			}else{
				include('views/login/login.php');
			}
			break;
		case 'check_login':
			//Get username and password
			$user_name = filter_input(INPUT_POST,'user_name');
			$password = filter_input(INPUT_POST,'password');
			if(AccountDB::check_user($user_name,$password)){
				//save cookies
				$remember_me = filter_input(INPUT_POST, 'remember_me');
				if($remember_me == 'remember_user'){
					$name = 'user_name';
					$value = $user_name;
					setcookie($name,$value,time()+5*24*3600,'/');

					$name = 'password';
					$value = $password;
					setcookie($name,$value,time()+5*24*3600,'/');
				}
				include('views/menu_book.php');	
			}else{
				echo "<h4>user name or password invalid</h4>";
				include('view/login.php');
			}

			break;
		case 'logout':
			$name = 'user_name';
			$value = '';
			setcookie($name,$value,time()-5*24*3600,'/');

			$name = 'password';
			$value = '';
			setcookie($name,$value,time()-5*24*3600,'/');
			include('views/login/login.php');

			break;		
		
		default:
			// code...
			break;
	}


 ?>