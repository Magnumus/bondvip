<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/123.css">
    <link rel="stylesheet" href="css/fontello.css">
    <link rel="stylesheet" href="css/fontello-codes.css">
    <link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/respons.css">
	<link rel="stylesheet" href="font/stylesheet.css">
    <title>Smm_enter</title>
</head>
<body>
	<main>
		<div class="logo"></div>
		<?php
    if($_SESSION["reg"]){ 
        echo '<h1 style="color:#b6b5bf;">'.$_SESSION["name"].', вы успешно зарегистрированы, можете перейти на <a href="_portal/portal.php" > главную страницу</a></h1>';
    } else if($_SESSION["log"]){ 
        echo '<h1 style="color:#b6b5bf;">Вы успешно авторизировались, можете перейти на <a href="_portal/portal.php" > главную страницу</a></h1>';
        echo $_SESSION["name"];
    } else { ?>
		<div class="form">
			<form method="post">
				<input type="text" name="r_name" id="name" size="15" maxlength="30" value="Иванов Иван" required placeholder="Имя Фамилия">
				<input type="email" name="r_mail"  id="email" size="30" required placeholder="E-mail">
				<input type="password" name="r_pass"  id="pass" minlength="8" required placeholder="Пароль">
				<input type="password" name="r_pass1"  id="pass" class="pass1" value="addsqqqww" minlength="8" required placeholder="Введите пароль еще раз">
					<div class=" enter"><input type="submit" class="enter_p" name="r_submit" value="Регистрация"></div>

				<div class="enter_e enter">
					<input type="submit" class="enter_p" name="l_submit" value="Войти">
				</div>
				<p class="pas_rec">Восстановить пароль</p>
				<p class="reg">Уже зарегистрированы? Войти</p>
				<p class="rec_r">Нет аккаунта? Зарегистрироваться</p>
				<p class="rec">Заполните пожалуйста все поля</p>
			</form>
			 <?php
        //Подключаемся к базе данных
    $connect = mysqli_connect("localhost", "root","","bond");
        //Регистрируемся по нажатии на кнопку если пароли совпадают
    if(isset($_POST["r_submit"])){
        $name = $_POST["r_name"];
        $email = $_POST["r_mail"];
        $pass = $_POST["r_pass"];
        $pass1 = $_POST["r_pass1"];
        $qr =  mysqli_query($connect, "SELECT id, password FROM users WHERE email='".$email."'");
        
        if(mysqli_num_rows($qr)>0){
            echo "<p style='color: red;'>Такой пользователь уже существует</p>";
        } else {
        if($pass == $pass1){
            $pass = password_hash($pass1, PASSWORD_DEFAULT);
            $count = 0;
            $q = mysqli_query($connect, "INSERT INTO users VALUES (null, '$name', '$email', '$pass', '$count')");
            $_SESSION["reg"] = true;
            $_SESSION["name"] = $name;
             echo "<meta http-equiv='refresh' content='0'>";
            //Если пароли не совпадают выводим ошибку
        } else {
            echo "<p style='color: red;'>Пароли не совпадают</p>";
        }
    }
    }
    
    if(isset($_POST["l_submit"])){
        $login = $_POST["r_mail"];
        $pass = $_POST["r_pass"];
        $qr =  mysqli_query($connect, "SELECT password FROM users WHERE email='".$login."'");
        $qre =  mysqli_query($connect, "SELECT fullName FROM users WHERE email='".$login."'");
        $name = mysqli_fetch_row($qre);
        $_SESSION["name"] = $name[0];
        if(mysqli_num_rows($qr) == 0){
            echo "<p style='color: red;'>Такого пользователя не существует</p>";
        } else {
            $ps = mysqli_fetch_row($qr);
            if(password_verify($pass, $ps[0])){
                $_SESSION['log'] = true;
                echo "<meta http-equiv='refresh' content='0'>";
            } else {
                echo "<p style='color: red;'>Неправильный пароль</p>";
            }
        }
    }}?>
		</div>
	</main>
<script src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/js.js"></script>
</body>
</html>