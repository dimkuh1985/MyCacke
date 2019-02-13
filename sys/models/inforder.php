<?php
	require_once('sys/classes/db_provider.php'); 

	class Inforder extends DbProvider {
		
		public function get_info_about_orders(){
			$sql = "SELECT user, SUM(price) as 'price' FROM orders GROUP by user";
			$res_arr= $this->execute_select($sql);
			return $res_arr;
		}	

		public function delete_from_orders($user){
			$sql = "DELETE * FROM orders WHERE user = '$user'";
			$this -> execute_dml($sql);
		} 			
	}	
?>