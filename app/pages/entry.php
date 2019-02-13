<?php
	if (empty($_POST['submit'])){
?>

<form id="form2" action="#" method="post" class="form-signin" role="form">
    <h2 class="form-signin-heading">Вход</h2>

    	<p>
        <label for="login" class="sr-only">Логин</label>
        <input type="text" id="login" name="login" class="form-control" placeholder="Логин" required autofocus>
   		</p>
		<p>
        <label for="pass1" class="sr-only">Пароль</label>
        <input type="password" id="pass1" name="pass1" class="form-control" placeholder="Пароль" required>
    	</p>
		
        <p>
        <input type="submit" id="submit" name="submit" class="btn btn-lg btn-primary btn-block" type="submit" value="ВайтивАйти"/>
    	</p>
</form>
<style>
	#form2{
		width: 50%;
		margin: auto;
	}
</style>

<?php
	} else{

		$login = $_POST['login'];
		$pass1 = $_POST['pass1'];	

		$login = htmlspecialchars($login); //блокирует работу тегов
		$pass1 = htmlspecialchars($pass1);
		$passw = md5($pass1); 
		

		require_once('sys/models/user.php');

		$model = new User();

		if ($model->check_account($login,$passw)){
			echo ('<h3>Авторизация успешна</h3>');
			$_SESSION['user'] = $login; // записывает в ссесию юзера
			header('Location: index.php?id=main'); //перенапревление пример http://bing.com
			
		} else{
			echo ('<h3>Логин или Пароль не найдены</h3>');

		}
		
		/*echo('login = '.$login.'<br>');
		echo('pass1 = '.$pass1. '<br>');
		echo('pass2 = '.$pass2. '<br>');
		echo('email = '.$email. '<br>');*/ // проверка
	}
?>