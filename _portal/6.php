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
          <img src="images/gift.png">
        </div>
        <div class="history">
          <h2>Этапы обучения</h2>
          <ul>
            <li><a href="portal.php">Введение в обучение</a><img src="images/ok.png"></li>
            <li><a href="2.php">Типы продвижения</a><img src="images/ok.png"></li>
            <li><a href="3.php">Таргетированная реклама</a><img src="images/ok.png"></li>
            <li><a href="4.php">Способы работы с клиентами</a><img src="images/ok.png"></li>
            <li><a href="5.php">Массфоловинг</a><img src="images/ok.png"></li>
            <li><a href="6.php"style="font-weight: 700;text-decoration: underline;">Giveaway</a><img src="images/ok.png"></li>
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
					<h1>Giveaway</h1>
					<p>

Начнём с Базы - что такое Giveaway и зачем он нужен?
<br><br>
Giveaway - это возможность сделать от 1.000 до 120.000 (зависит от блоггера) живых настоящих подписчиков (собственный маленький город) за неделю.<br>
<br>
В среднем, цена за одного подписчика 1₽( 10.000 подписчиков - 10.000₽ )
<br>
Клиенту продаём по 1,5₽ за подписчика
<br><br>
Giveaway - это когда 1,2 или 3 крупных аккаунта (от 1 млн. подписчиков в Инстаграм) у себя делают пост или сторис о том, что можно выиграть 5 айфонов, 500.000 руб. или любые ценные для аудитории призы, если подпишешься на 50 спонсоров.
<br><br>
Механика такая:
<br><br>
1. Спонсоры (это вы - те кто хочет подписчиков) платят деньги
<br>
2. На них покупаются призы и делается оплата блогерам.
<br>
3. Создаётся специальный аккаунт в Инстаграм, где размещаются все условия конкурса, он подписывается на всех спонсоров
<br>
4. Блогеры делают сторис, посты и видео о конкурсе
<br>
5. Люди подписываются на конкурсный аккаунт и на всех спонсоров
<br>
6. Через 7-10 дней в прямом эфире происходит розыгрыш, часть людей (от 20 до 60%) отписывается от спонсоров.
<br>
7. Задача на время конкурса - чтобы людям понравился ваш аккаунт и они к вам привыкли, через какое-то время они станут вашими фанатами и будут покупать ваши Продукты. Чем больше положительных касаний - тем меньше отписка (об этом расскажем позже).
<br><br>
Для кого вообще гивы?
<br><br>
Для тех, кто хочет раскрутить свой личный бренд, продавать рекламу в Инстаграм или для тех, кто хочет продавать свои продукты или услуги в Инстаграм.
<br>
Аудитория тех, кто подписывается за подарки мне не интересна - можете сказать вы. Но идея в том, что ваш продукт должно увидеть как можно большее количество людей в интернете, а уже потом они решают, интересно им или нет. Других доступных по цене способов просто не существует (1-3 рубля за подписчика)! Я проверял :))
<br><br>


Какие советы использовать самому или же давать клиенту, во время гива:
<br><br>
8 читкодов по Giveaway
<br><br>
или
<br><br>
Как подготовить аккаунт к GiveAway и добиться минимального количества отписок?
<br><br>
• Ваша страница должна быть открыта за день до розыгрыша и до самого последнего дня.
<br>
• Переведите аккаунт из личного в бизнес профиль, чтобы следить за статистикой.
<br>
• Описание. Проверьте описание своего профиля. Представьте себя на месте человека, который видит вашу страницу впервые. Важно, чтобы из описания было понятно, кто вы, и по какой причине он должен остаться у вас и следить за вашей жизнью. Если в гиве участвует страница магазина, разместите в описании уникальное торговое предложение (акцию, спеццену, лучший товар).
<br>
• Используйте активную ссылку - там можно разместить ссылку на ваш сайт или таплинк
<br>
• Во время гива можно и нужно постить чаще, чем 1 раз в день. Это время для того, чтобы утеплить аудиторию и заставить ее привыкнуть к вам. Чтобы подписчики не висели мертвым грузом, необходимо, чтобы они лайкали и комментировали вас. А на лайки они жадные) Так что старайтесь!
<br>
• Проводите прямые эфиры, они влияют на охват. Записывайте побольше сторис, через них «проще» к вам привыкать - в сторис человек всегда «живее», без фильтров и репетиций
<br>
• Проводите на странице небольшие конкурсы и розыгрыши, которые провоцируют лайки и комментарии
<br>
• Если в профиле вы продаете продукт, сделайте скидки и спецпредложения в эти дни.
<br><br>
ВАЖНО:<br>
Гивы - нужны только для КОММЕРЧЕСКИХ АККАУНТОВ!
<br><br>
Если использовать их для личного, вы попадёте в теневой бан!
<br><br>
Это чистая правда, но я не могу заставить вас не продавать их обычным людям - это ваш выбор
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