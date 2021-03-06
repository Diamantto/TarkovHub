<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>TarkovHub</title>
	<link rel="stylesheet" href="css/main.css">
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
			<section class="introduction">
				<div class="container">
					<div class="changes">
						<a href="#">
							<img src="img/b_toChanges.png" alt="">
						</a>
					</div>
					<h1>Гайды по игре Escape from Tarkov</h1>
					<p class="info">Приветствуем на фан-сайте игры Побег из Таркова. Тут вы найдете всю необходимую информацию по игре, начиная от описания персонажей и заканчивая интерактивной картой локаций с описаниями местности и подсказками-скриншотами. Все актуальные новости, последние обновления, гайды, обзоры и руководства.</p>
				</div>
			</section>
			<section class="maps">
				<div class="container">
					<div class="map-spacer">
						<div class="map-text">
							<p>Интерактивные карты локаций</p>
						</div>
						<div class="all-maps">
							<a href="maps.php"><img src="img/b_allmap.png" alt=""></a>
						</div>
					</div>
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
			<section class="keys">
				<div class="container">
					<div class="key-spacer">
						<div class="key-text">
							<p>Места спауна ключей</p>
						</div>
						<div class="all-key">
							<a href="#"><img src="img/b_allkey.png" alt=""></a>
						</div>
					</div>
					<ul class="key_images">
						<li>
							<img src="img/Ключ_308.png" alt="Ключ_308">
						</li>
						<li>
							<img src="img/Ключ_218.png" alt="Ключ_218">
						</li>
						<li>
							<img src="img/Ключ_Неизвестный.png" alt="Ключ_Неизвестный">
						</li>
						<li>
							<img src="img/Ключ_303.png" alt="Ключ_303">
						</li>
					</ul>
				</div>
			</section>
			<section class="sellers">
				<div class="container">
					<div class="seller-spacer">
						<div class="seller-text">
							<p>Торговцы: уровни, квесты, лут</p>
						</div>
						<div class="all-seller">
							<a href="traders.php"><img src="img/b_traders.png" alt=""></a>
						</div>
					</div>
					<ul class="seller_images">
						<li>
							<img src="img/mechanic.png" alt="Механик">
						</li>
						<li>
							<img src="img/trader.png" alt="Барахольщик">
						</li>
						<li>
							<img src="img/prapor.png" alt="Прапор">
						</li>
					</ul>
					<ul class="title_seller">
						<li>
							<p>Механик</p>
						</li>
						<li>
							<p>Барахольщик</p>
						</li>
						<li>
							<p>Прапор</p>
						</li>
					</ul>
					<ul class="description_seller">
						<li>
							<p>Механик продаст лучшие образцы оружия и модулей к нему, вот только оплачивать покупку придется биткоинами.</p>
						</li>
						<li>
							<p>У Барахольщика можно купить защитную экипировку. В ассортименте каски, рюкзаки, бронежилеты и разгрузки.</p>
						</li>
						<li>
							<p>У Прапора всегда можно в большом количестве купить хорошее отечественное оружие: винторез, стечкин, калашников, гранаты.</p>
						</li>
					</ul>
					<ul class="button_seller">
						<li>
							<a href="#"><img src="img/b_mechanic.png" alt=""></a>
						</li>
						<li>
							<a href="#"><img src="img/b_trader.png" alt=""></a>
						</li>
						<li>
							<a href="#"><img src="img/b_prapor.png" alt=""></a>
						</ul>
					</div>
				</section>
				<section class="about">
					<div class="container">
						<p class="info">Escape from Tarkov — сюжетный онлайн-шутер с элементами MMO и RPG. Разработчикам удалось создать реалистичный боевой симулятор с множеством сюжетных сценариев, позволяющих игроку контролировать действия его персонажа на каждом этапе. Основой геймплея является противостояние двух армий наемников и мародеров-одиночек.</p>
						<h2>Тарков: wiki-справка</h2>
						<p class="info">События Escape from Tarkov происходят на территории России, в районе правого берега Финского залива, в городе Тарков Норвинской области. До начала активного развития города, он славился своей курортной лесопарковой зоной, территория была густо покрыта хвойными лесами с лиственными рощами, в которых встречались редкие породы. Рельеф в основном представлен песчаными барханами, болотами, небольшими озерами и долинами, на востоке — выход к Озерной бухте Финского залива.</p>
						<p class="info">Cогласно официальному сценарию Escape from Tarkov, в 60-х на территории Таркова начали строить важные приборостроительные, радиоэлектронные и оборонительные предприятия, вследствие чего Тарков получил статус важного научного и производительного центра. За полвека небольшой городок разросся до масштабов мегаполиса, многие иностранные компании открывали тут свои производственные и исследовательские предприятия.</p>
						<h2>Escape from Tarkov предыстория</h2>
						<p class="info">Gameplay в Побеге из Таркова разворачивается в мире Russia 2028, с которым игроки могли столкнуться ранее в Contract Wars, выпущенной в 2011. В этой вселенной Тарков и Норвинск — большие ультрасовременные города, получившие статус “особой экономической зоны”. Тарков и Норвинск соединены скоростным мостом через Финский залив, в Норвинске сосредоточена офисно-деловая жизнь ОЭЗ, Тарков же является финансово-сырьевым центром с развитой транспортной системой и множеством предприятий различных сфер.</p>
						<p class="info">Льготные условия налогообложения для иностранных предпринимателей привлекли также сомнительных производителей. Вследствие чего в Таркове произошел коррупционный скандал, в котором была замешана трансатлантическая корпорация с мировым именем. Terra Group Labs, филиал международной компании Terra Group, был уличен в незаконной деятельности. Помимо коррупционных связей с чиновниками, руководству компании предъявлялись обвинения в преступлениях против РФ из-за повышенного интереса подставных компаний корпорации к военным и специальным объектам на территории России.</p>
						<p class="info">Полгода власти пытались мирно разрешить конфликт с представителями Terra Group, путем переговоров и политических противостояний, но результатом этого стали вооруженные конфликты на улицах Таркова. Первые выстрелы прозвучали, когда в зону конфликта ввели миротворческие войска ООН, которые столкнулись с сопротивлением со стороны военных сил России. Кроме того, в военных беспорядках участвовало две частные военные компании: BEAR и USEC. Первая была создана не без участия правительства РФ. Когда часть страны оккупировали миротворческие отряды ведущих государств на мировой арене, российским властям пришлось идти на крайние меры. Так как полиция РФ и следственные органы в зоне конфликта утратили полномочия, вся надежда была на независимых наемников.</p>
						<p class="info">Военная компания USEC была нанята представителями Terra Group для защиты собственных интересов, а также для препятствования расследованию деятельности компании. Прикрываясь миротворческими намерениями, наемники работают над прикрытием текущих исследований и разработок Terra Group и устранением вражеской ЧВК.</p>
						<p class="info">Чтобы локализовать беспорядки и отрезать беспокойный Tarkov от внешнего мира, границы области были перекрыты, что закрыло в кровавой ловушке как участников, так и мирных жителей. закрыв всех, кто не успел сбежать, в кровавой ловушке.</p>
						<h2>Возможности в игре Побег из Таркова</h2>
						<p class="info">Каждый игрок Escape from Tarkov не ограничен в действиях и сам решает, какой стратегии будет придерживаться его персонаж. Для ценителей годных квестов в игре предусмотрены торговцы, с которыми можно не только торговать, но и выстраивать доверительные отношения, чтобы получить доступ к редким товарам. Выполняя задания торговцев, персонаж может лучше изучить местность, узнать больше о происходящем в Таркове, получить опыт и необходимые вещи.</p>
						<p class="info">Также, достигая определенного уровня в Побеге из Таркова и обретая нужные навыки, персонаж может и сам стать торговцем, обрести собственный магазин и ряд необычных товаров.</p>
						<p class="info">Модификация оружия — важная часть шутера, в Escape from Tarkov вы можете создавать мощные стволы, собирая их из своих рейдовых находок.</p>
						<p class="info">Чтобы общаться с другими игроками, узнавать слухи и полезную информацию, приводить в порядок себя и свое оружие, изучать найденные вещи — организуйте схрон.</p>
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
