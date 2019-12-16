<?php 
	class Account{
		private $user_name, $password;

		public function __construct($user_name,$password){
			$this->user_name = $user_name;
			$this->password = $password;
		}

		public function set_user_name($value){
			$this->user_name = $value;
		}
		public function set_password($value){
			$this->user_name = $value;
		}

		public function get_user_name(){
			return $this->user_name;
		}
		public function get_password(){
			return $this->user_name;
		}
	}

	class AccountDB{
		public static function get_all_account(){
			global $accounts;
			
			$list_users = array();
			foreach ($accounts as $key => $value) {
				$user = new Account($value['user_name'],$value['password']);
				$list_users[] = $user;
			}

			return $list_users;
		}

		public static function check_user($user_name, $password){
			global $accounts;
			$result = false;
			foreach ($accounts as $key => $value) {
				if($value['user_name']==$user_name && $value['password']==$password){
					$result = true;
					break;
				}
			}
			return $result;
		}
	}

 ?>