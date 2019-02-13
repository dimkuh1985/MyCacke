<?php
	if (empty($_POST['submit'])){
?>

<form id="form1" action="#" method="post" class="form-signin" role="form">
    <h2 class="form-signin-heading">Регистрация</h2>

    	<p>
        <label for="login" class="sr-only">Логин</label>
        <input type="text" id="login" name="login" class="form-control" placeholder="Логин" required autofocus>
   		</p>
		<p>
        <label for="pass1" class="sr-only">Пароль</label>
        <input type="password" id="pass1" name="pass1" class="form-control" placeholder="Пароль" required>
    	</p>

		<p>
        <label for="pass2" class="sr-only">Повтор</label>
        <input type="password" id="pass2" name="pass2" class="form-control" placeholder="Повтор" required>
    	</p>
		<p>
        <label for="email" class="sr-only">e-mail</label>
        <input type="email" id="email" name="email" class="form-control" placeholder="email" required>
    	</p>

        <p>
        <input type="submit" id="submit" name="submit" class="btn btn-lg btn-primary btn-block" type="submit" value="Отпарвить"/>
    	</p>
</form>
<style>
	#form1{
		width: 50%;
		margin: auto;
	}
</style>

<?php
	} else{

		$login = $_POST['login'];
		$pass1 = $_POST['pass1'];
		$pass2 = $_POST['pass2'];
		$email = $_POST['email'];

		//валидация отложена



		$login = htmlspecialchars($login); //блокирует работу тегов
		$pass1 = htmlspecialchars($pass1);
		$pass2 = htmlspecialchars($pass2);
		$email = htmlspecialchars($email);


		require_once('sys/models/user.php');
		$model = new User();
		if($model->check_login($login)) {
		//проверка занятости логина

			$passw = md5($pass1); //зашифровка пароля
			date_default_timezone_set('Europe/Kiev'); //часовая зона
			$regdate = date('Y-m-d H:i:s'); //дата регистрации
			$status = 'norm';
			$model->add_user($login, $passw, $email, $regdate, $status);			

		echo ('<h3>Регистрация завершена<h3>');

		} else {
			echo('<h3>Логин занят!<h3>');
		}

		/*echo('login = '.$login.'<br>');
		echo('pass1 = '.$pass1. '<br>');
		echo('pass2 = '.$pass2. '<br>');
		echo('email = '.$email. '<br>');*/
	}
?>