<?php
	
	
		
			
				require_once('sys/models/inforder.php');
    			$user = $_POST['user'];
				$del = new Inforder();
				$del->delete_from_order($user);    
			
?>

	

	



