<?php
	require_once('sys/classes/db_provider.php'); 

	class Product extends DbProvider {

		public function add_product($name, $info, $price, $image, $gcount){
			$sql = "INSERT INTO goods (name, info, price, image, gcount)
					VALUES ('$name', '$info', '$price', '$image', '$gcount')";

			$this -> execute_dml($sql);
		}

		public function check_product($name){
			$sql = "SELECT name FROM goods WHERE name='$name'";
			$res_arr= $this->execute_select($sql);
			$N = count($res_arr);
			if ($N == true){
				return false;
			} else {
				return true;
			}
		}

		public function get_all_products_for_moder(){
			$sql = "SELECT name, info, price, gcount FROM goods";
			$res_arr= $this->execute_select($sql);
			return $res_arr;			
			}
		

		public function get_image_from_products_for_moder(){
			$sql = "SELECT image FROM goods";
			$res_arr = $this->execute_select($sql);	
			return $res_arr;
			}

		public function delete_products_for_moder($name){
			$sql = "DELETE FROM goods WHERE name = '$name'";
			$this -> execute_dml($sql);
		}

		public function get_all_goods(){
			$sql = "SELECT * FROM goods";
			$res_arr= $this->execute_select($sql);
			return $res_arr;	
		}		 	
	}

	
?>