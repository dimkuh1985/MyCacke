<?php
	require_once('sys/config/db_config.php');

	class DbProvider {
		protected $db_conn;

		public function __construct() {
			$this->db_conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
		}

		public function execute_dml($sql) {//для вставки, корректировки и удаления
			$this->db_conn->query($sql);
		}

		public function execute_select($sql) {
			$res_arr = [];
			$res = $this->db_conn->query($sql);
			while ($row = $res->fetch_assoc()) { //вытаскивает из массива по рядно
//$row['id'], ['login'], ... ,['ststus']
				$res_arr[] = $row;
			}
			return $res_arr;
		}

	}