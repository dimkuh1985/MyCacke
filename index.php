<?php
	session_start();
	require_once('sys/classes/page.php');
	
	$page = new Page();
	$page->load();