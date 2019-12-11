<?php
session_start();
    if(!isset($_SESSION["reg"])&& !isset($_SESSION["log"])){ 
        header("Location: ../index.php");
    } else {?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900|Material+Icons" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/responsive.css">
	<link rel="stylesheet" href="font/stylesheet.css">
    <title>smm_main</title>
</head>
<body>
	<!-- HEADER_MENu -->
	<header>
		<div class="menu"><img src="images/menuOpen.png" alt="Electrolux_menu"><p class="her">Меню</p></div>
		<div class="logo"></div>
		<div class="exit"><p class="her">Выход</p><img src="images/exit.png" alt="Electrolux_exit"></div>
	</header>
	<div class="menu_overlay"></div>
	<nav>
		<div class="nav_logo">
			<img src="images/menuExit.png" alt="menu_electrolux">
			<div class="menu_logo"></div>
		</div>
    <div class="menu_list">
      <a href="https://t.me/joinchat/AAAAAFIKOO0R9yDWrIwheg"><p>Наш Telegram канал</p></a>
      <p>Связаться с Марком в:</p>
      <div class="sv">
      <a href="https://api.whatsapp.com/send?phone=+79216337697" ><img src="images/vb.png"></a>
      <a href="https://www.instagram.com/business_bond/?hl=ru" ><img src="images/inst.png"></a>
      <a href="https://t.me/business_bond" >	<img src="images/tg.png"></a>
      </div>
    </div>
  </nav>
    <!-- MAIN_main -->
    <main>
      <div class="priv">
        <div class="name_p">
          <h1>Тимур Майсурадзе</h1>
        </div>
        <div class="ava">
          <img src="images/hw.png">
        </div>
        <div class="history">
          <h2>Этапы обучения</h2>
          <ul>
            <li><a href="portal.php">Введение в обучение</a><img src="images/ok.png"></li>
            <li><a href="2.php">Типы продвижения</a><img src="images/ok.png"></li>
            <li><a href="3.php">Таргетированная реклама</a><img src="images/ok.png"></li>
            <li><a href="4.php">Способы работы с клиентами</a><img src="images/ok.png"></li>
            <li><a href="5.php">Массфоловинг</a><img src="images/ok.png"></li>
            <li><a href="6.php">Giveaway</a><img src="images/ok.png"></li>
            <li><a href="7.php">Путь до 20К подписчиков</a><img src="images/ok.png"></li>
            <li><a href="8.php">Вовлеченность подписчиков</a><img src="images/ok.png"></li>
            <li><a href="9.php">Оформление аккаунта</a><img src="images/ok.png"></li>
          </ul>
        </div>
				<div class="home">
					<a href="hw.php"><div class="home_p">
<p>Домашнее задание</p>
<img src="images/1.png">
</div></a>
				</div>
			</div>
			<div class="stud">
				<div class="studing">
					<h1>Домашние задания</h1>
					<p>1) Набрать 1000 лайков (+1000 лайков, если уже есть 1000 ) на каждом новом посте, используя только разрешённые способы продвижения.<br><br>
2) Сделать массфоловинг на коммерческий аккаунт, набрать 2.000 подписчиков за месяц (ставим мои 2 рекомендованных аккаунта + аккаунты по ЦА).<br><br>
3) Вывести ваш аккаунт из теневого бана. Заблокировать всех пользователей (среди ваших подписчиков), у кого больше 1500 подписок + отключиться от всех программ (поменять пароль в инсте ) и забыть про Гивы и накрутку!)<br><br>
4) Настроить таргет и сделать от 2-ух продаж.<br><br>
5) Написать отзыв об обучении.<br><br>

</p></div>
			</div>
		</main>


	<!-- FOOTER -->
	<footer>
		<div class="logo_foot"></div>
	</footer>

<!-- POPUP -->
<div class="main_overlay"></div>
<script src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/js.js"></script>
</body>
</html>
<?php };?>