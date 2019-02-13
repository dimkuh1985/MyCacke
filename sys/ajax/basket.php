<?php
	session_start();

	$good_id = $_REQUEST['id']; // по вторичному ключу
	$price = $_REQUEST['price'];
	$user = $_SESSION['user'];

	date_default_timezone_set('Europe/Kiev'); //часовая зона
	$order_date = date('Y-m-d H:i:s');
	$status = "Ожиание оплаты";

	require_once('../models/order.php');
	$order_model = new Order();
	$order_model->add_order($user, $good_id, $order_date, $price, $status);

	$count = $order_model->get_count($user);
	$cost = $order_model->get_cost($user); 

	echo($count.' - '.$cost);