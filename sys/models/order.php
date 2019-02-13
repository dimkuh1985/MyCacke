<?php
	require_once('sys/classes/db_provider.php'); //для выхода из db_provider.php

	class Order extends DbProvider {

		public function add_order($user, $good_id, $order_date, $price, $status){
			$sql = "INSERT INTO orders (user, good_id, order_date, price, status)
					VALUES ('$user', $good_id, '$order_date', $price, '$status')";

			$this -> execute_dml($sql);
		}		

		public function get_count($user){
			$sql = "SELECT COUNT(id) AS 'count' FROM orders WHERE user='$user'";
			$res_arr= $this->execute_select($sql);
			$count = $res_arr[0]['count'];
			return $count;
		}

		public function get_cost($user){
			$sql = "SELECT SUM(price) AS 'cost' FROM orders WHERE user='$user'";
			$res_arr= $this->execute_select($sql);
			$cost = $res_arr[0]['cost'];
			return $cost;			
		}
		
	}

	
?>