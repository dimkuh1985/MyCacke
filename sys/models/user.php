<?php
	require_once('sys/classes/db_provider.php'); //подключаем бд-провайдер

	class User extends DbProvider{

		public function add_user($login, $passw, $email, $regdate, $status){
			$sql = "INSERT INTO users (login, passw, email, regdate, status)
					VALUES ('$login', '$passw', '$email', '$regdate', '$status')";

			$this -> execute_dml($sql);
		}

		public function check_login($login){
			$sql = "SELECT login FROM users WHERE login='$login'";
			$res_arr = $this->execute_select($sql);
			$N = count($res_arr);
			if ($N == true){
				return false;
			} else {
				return true;
			}
			
		}

		public function check_account($login, $passw){
			$sql = "SELECT login, passw FROM users WHERE login='$login' AND passw='$passw'";
			$res_arr = $this->execute_select($sql);
			$N = count($res_arr);
			if ($N>0){
				return true;
			} eLse {
				return false;
			}

		}

	}