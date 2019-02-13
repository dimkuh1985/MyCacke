<h2>Выход</h2>
<?php
	session_destroy();
	header('Location: index.php?id=main');
?>