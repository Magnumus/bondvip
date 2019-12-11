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
          <img src="images/team.png">
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
            <li><a href="7.php"style="font-weight: 700;text-decoration: underline;">Путь до 20К подписчиков</a><img src="images/ok.png"></li>
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
					<h1>Путь до 20К подписчиков</h1>
					<p>

1) Выбираете нишу:
<br>
Посмотрите, что уже представлено на рынке. Если предложений очень много - ниша высоконкурентная, пробиться будет сложно. Если предложений очень мало - скорее всего нет спроса или там минимальная прибыль.
<br><br>
2) Определяете целевую аудиторию (ЦА):
<br>
Мама в декрете/ женщины 20-45 лет со средним и средним+ доходом - это НЕ ЦА. Копайте глубже! Вы должны чётко представлять, какие потребности людей решаете, какие у них желания/страхи/сомнения/стремления.
<br><br>
3) Оцениваете конкурентов:
<br>
Сильные/слабые стороны, чего не хватает, как продвигаются и т.д.
<br><br>
4) Думаете, чем будет отличаться:
<br>
Чем больше вы будете НЕ похожи на всех остальных - тем лучше. Память у пользователяей Инстаграм как у золотой рыбки! Нужно сразу запоминаться.
<br><br>
5) Создаёте аккаунт, привязываете его к ФБ и номеру телефона, включаете двухфакторную аутентификацию. Придумываете лёгкий ник, запоминающийся аватар, продающую шапку профиля.
<br><br>
6) Продумываете выигрышную визуальную концепцию. Она должна:
<br><br>
• преподносить вас/товар/услугу в самом выигрышном свете
<br>
• легко создаваться и поддерживаться на постоянной основе
<br>
• не являться клоном конкурентов
<br><br>
7) Пишете классные (!) тексты:
<br>
Долой капитана Очевидность, банальные темы, прописные истины и натянутость. Мы в соцсети, люди хотят испытывать эмоции и видеть реального человека!
<br>Если не умеете фотографировать/писать посты - делегируйте. За небольшую плату эту часть работы сделают профессионалы. Напр, в моем Закрытом Клубе найдёте резюме с ценами 70+ фотографов и 50+ копирайтеров.
<br><br>
8) Публикуете 10-15 (а лучше 20-30) продуманных постов. Дальше регулярный постинг - минимум 5-6 постов в неделю.
<br><br>
9) Подключаете stories. Там публикуете все, что не влазит или не подходит. Обязательно используйте видеоформат.
<br><br>
10) Начинаете заниматься продвижением.
<br><br>
(ЕСЛИ АККАУНТ НЕ КОММЕРЧЕСКИЙ, ТО ТАК)
<br><br>
• Реклама у блогеров
<br>
• Таргет на свою ЦА, иногда на своих подписчиков
<br>
• Постоянные ВП
<br>
• Созывайте друзей, знакомых
<br>
• Вручную лайкайте, подписывайтесь на ЦА
<br>
• Используйте теги, гео
<br><br>
Так вы будете честно развиваться, это важно, если вы хотите сильный личный бренд, например в виде SMM специалиста
<br><br>
Если вы коммерческий аккаунт, то тут и массфол и гивы
<br><br>
Все, лишь бы клиент поверил, что вы - проверенный магазин/услуга
<br><br>
11) Постоянно развивайтесь, придумывайте что-то новое, без этого никуда
<br><br>
У меня до выполнения цели в 20.000 подписчиков ушло 45 дней
<br><br>
Желаю каждому из вас удачи
<br><br>
Верю, что у вас все получится
<br><br>

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