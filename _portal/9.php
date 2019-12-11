<?php
session_start();
    if(!isset($_SESSION["reg"])&& !isset($_SESSION["log"])){ 
        header("Location: ../index.php");
    } else {?><!DOCTYPE html>
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
          <img src="images/acc.png">
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
            <li><a href="9.php"style="font-weight: 700;text-decoration: underline;">Оформление аккаунта</a><img src="images/ok.png"></li>
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
				<div class="vid">
					<video controls>
					  <source src="IMG_5524.mp4" type="video/mp4">
					  Your browser does not support the video tag.
					</video>
				</div>
				<div class="studing">
					<h1>Обучающий модуль 9</h1>
					<p>"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus amaiores alias consequatur aut perferendis doloribus asperiores repellat. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
				</div>
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