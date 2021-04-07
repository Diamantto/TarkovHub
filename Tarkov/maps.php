<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>TarkovHub</title>
	<link rel="stylesheet" href="css/maps.css">
</head>
<body>
	<header>
		<div class="container">
			<div class="nav">
				<a href="index.php">
					<img src="img/logo_desktop.png" alt="Tarkov Hub" class="logo">
				</a>
				<ul class="menu">
					<li>
						<a href="#">Сообщество</a>
					</li>
					<li>
						<a href="traders.php">Торговцы</a>
					</li>
					<li>
						<a href="maps.php">Карты</a>
					</li>
					<li>
						<a href="#">Ключи</a>
					</li>
				</ul>
				<?php
				if (empty($_COOKIE['user'])): 
					?>
					<ul class="menu_login">
						<li>
							<a href="login.html">Вход</a>
						</li>
						<li>
							<a href="registration.html">Регистрация</a>
						</li>
					</ul>
					<?php else: ?>
						<ul class="authorized">
							<li>
								<a href="logout.php"><img src="img/logo_exit.png" alt=""></a>
							</li>
							<li>
								<a href="#">Привет, <?=$_COOKIE['user']?></a>
							</li>
						</ul>
					<?php endif;?>
				</div>
			</header>
			<section class="title">
				<div class="container">
					<img src="img/title_map.png" alt="Карты">
				</div>
			</section>
			<section class="maps">
				<div class="container">
					<ul class="map_images">
						<li>
							<img src="img/reserv.png" alt="Карта резерва">
						</li>
						<li>
							<img src="img/laboratory.png" alt="Карта лаборатории">
						</li>
						<li>
							<img src="img/market.png" alt="Карта развязки">
						</li>
					</ul>
					<ul class="title_map">
						<li>
							<p>Карта Резерва</p>
						</li>
						<li>
							<p>Карта Лаборатории</p>
						</li>
						<li>
							<p>Карта Развязки</p>
						</li>
					</ul>
					<ul class="description_map">
						<li>
							<p>Карта с выходами с локации военной базы, планировка военного комплекса базы резерва военных сил РФ.</p>
						</li>
						<li>
							<p>Тайны лаборатории, уже на нашей карте. Если вы хотите отыскать все выходи и знать планировку комплекса, переходите по ссылке.</p>
						</li>
						<li>
							<p>Все секреты торгового центра Ультра, нужные магазины и места спауна ключей — обозначены на карте Развязки.</p>
						</li>
					</ul>
					<ul class="button_map">
						<li>
							<a href="#"><img src="img/b_rez.png" alt=""></a>
						</li>
						<li>
							<a href="#"><img src="img/b_lab.png" alt=""></a>
						</li>
						<li>
							<a href="#"><img src="img/b_razv.png" alt=""></a>
						</li>
					</ul>
				</div>
			</section>
			<section class="maps">
				<div class="container">
					<ul class="map_images">
						<li>
							<img src="img/beach.png" alt="Карта берега">
						</li>
						<li>
							<img src="img/custom.png" alt="Карта таможни">
						</li>
						<li>
							<img src="img/forest.png" alt="Карта леса">
						</li>
					</ul>
					<ul class="title_map">
						<li>
							<p>Карта берега</p>
						</li>
						<li id="title_custom">
							<p>Карта таможни</p>
						</li>
						<li  id="title_forest">
							<p>Карта леса</p>
						</li>
					</ul>
					<ul class="description_map">
						<li>
							<p>Открывайте карту, чтобы знать, что интересного внутри санатория, как попасть внутрь коттеджей, где искать беспилотники или танки.</p>
						</li>
						<li>
							<p>Переходите, если вам интересно, что внутри общежития, где находятся интересные ключи и просто чтобы знать, куда вам нужно идти.</p>
						</li>
						<li>
							<p>На карте Леса вы найдете выходы для диких, где проходить квесты или отыскать места появления ключей, и узнаете много тайн.</p>
						</li>
					</ul>
					<ul class="button_map">
						<li>
							<a href="#"><img src="img/b_beach.png" alt=""></a>
						</li>
						<li>
							<a href="#"><img src="img/b_custom.png" alt=""></a>
						</li>
						<li>
							<a href="#"><img src="img/b_forest.png" alt=""></a>
						</li>
					</ul>
				</div>
			</section>
			<section class="maps">
				<div class="container">
					<ul class="map_images">
						<li>
							<img src="img/factory.png" alt="Карта завода">
						</li>
					</ul>
					<ul class="title_map">
						<li>
							<p>Карта завода</p>
						</li>
					</ul>
					<ul class="description_map">
						<li>
							<p>На карте Завода вы можете посмотреть на места появления ключей, где выполнять квесты, а также найти нужные вам выходы.</p>
						</li>
					</ul>
					<ul class="button_map">
						<li>
							<a href="#"><img src="img/b_factory.png" alt=""></a>
						</li>
					</ul>
				</div>
			</section>
			<footer >
				<div class="fresh_news">
					<h3>СВЕЖИЕ ЗАПИСИ</h3>
					<div class="allnews">
						<div>
							Путь виживальщика. Торчок							
						</div>
						<div>
							Сотрудник Terragroup							
						</div>
						<div>
							Текстиль. Часть 2						
						</div>
						<div>
							Текстиль. Часть 1						
						</div>
						<div>
							Кабинет химии						
						</div>
					</div>
				</div>
				<div class="articles">
					<h3>Интересные статьи</h3>
					<div class="all_articles">
						<div>
							Обновление 0.12					
						</div>
						<div>
							Гайд по оптике					
						</div>
						<div>
							Квестовые предметы					
						</div>
					</div>
				</div>
				<div class="about_us">
					<h3>О нас</h3>
					<div>
						Email: <span>artur.grishko.2002@gmail.com</span>					
					</div>
					<div>
						Телефон:	<span>+380-96-44-77-528</span>		
					</div>
				</div>
			</footer>
		</body>
		</html>