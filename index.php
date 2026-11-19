<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>ГБУЗ - Главная страница</title>
	<link rel="stylesheet" href="./css/style.css" />
	<link rel="stylesheet" href="./css/form.css" />
	<link rel="stylesheet" href="./css/reset.css" />
	<link rel="preconnect" href="https://fonts.googleapis.com" />
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
	<link
		href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
		rel="stylesheet" />
</head>

<body>
	<header class="header">
		<div class="container">
			<div class="main-menu">
				<a href="./index.php" class="logo">ГБУЗ ПОКБ им. Н.Н.Бурденко</a>
				<div class="menu">
					<ul class="menu-list">
						<li class="menu-item">
							<a href="./index.php" class="menu-link">Главная</a>
						</li>
						<li class="menu-item">
							<a href="./info.php" class="menu-link">О нас</a>
						</li>
						<li class="menu-item">
							<a href="./fedback.php" class="menu-link">Отзывы</a>
						</li>
						<li class="menu-item">
							<a href="./admin/indexadmin.php" class="menu-link">Админка</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</header>
	<section class="section-1">
		<div class="container">
			<h1 class="h1">Главная информация</h1>
			<p class="p">
				Пензенская областная клиническая больница имени Н.Н. Бурденко (ПОКБ
				им. Н.Н. Бурденко) - это лечебное учреждение с более чем 175-летней
				историей и славными традициями, расположенное в одном из красивых и
				зеленых районов города. На основании предложения Министерства
				здравоохранения и социального развития Пензенской области больница
				включена в Национальный Реестр «Ведущие учреждения здравоохранения
				России» за 2015 год. Включение нашего учереждния в Реестр означает
				признание лидирующей роли в развитии сферы здравоохранения региона.
				Признание лидирующей роли больницы связано с её деятельностью по
				оказанию медицинской помощи жителям Пензенской области, с тем, что она
				вносит позитивный вклад в общее социально-экономическое развитие
				своего региона.
			</p>
			<p class="p">
				Вы можете обратиться круглосутчно к дежурному администратору по
				вопросам организации медицинской помощи, сроков оказания плановой или
				экстренной помощи, позвонив по телефону <span>+7-967-446-14-79</span>,
				а также высказать свои рекомендации, предложения и пожелания.
			</p>
			<div class="section-1-block">
				<img src="./img/nikishin.jpg" class="section-1-img" />
				<p class="p1">Главный врач</p>
				<p class="p2">Никишин Александр Викторович</p>
			</div>
		</div>
	</section>
	<section class="section-2">
		<div class="container">
			<h2 class="h2">Запись к нашему врачу</h2>
			<div class="main-feedback-form">
				<form action="./help/priemVrach.php" method="POST">
					<label for="name">Ваше имя:</label>
					<input type="text" id="name" name="name" class="name" placeholder="Имя" required />
					<label for="female">Ваша фамилия:</label>
					<input type="text" id="female" name="female" class="name" placeholder="Фамилия" required />
					<label for="patronymic">Ваше отчество:</label>
					<input type="text" id="patronymic" name="patronymic" class="name" placeholder="Отчество" required />
					<label for="date">Ваша дата рождения:</label>
					<input type="text" id="date" name="date" class="name" placeholder="Дата рождения" required />
					<label for="snils">Ваш номер снилса:</label>
					<input type="text" id="snils" name="snils" class="name" placeholder="Снилс" required />
					<label for="address">Место проживания:</label>
					<input type="text" id="address" name="address" class="name" placeholder="Адрес" required />

					<!-- <label for="email">Ваша почта</label>
						<input
							type="email"
							name="email"
							id="email"
							class="email"
							placeholder="Email"
							required
						/> -->

					<label for="tel">Ваш номер телефона</label>
					<input type="tel" name="tel" class="tel" maxlength="10" id="tel" placeholder="Номер телефона" required />

					<label for="description">Расскажите о вашей проблеме:</label>
					<textarea name="description" id="description" placeholder="Опишите проблему" rows="5" required></textarea>

					<input class="submit" name="submit" type="submit" value="Отправить" />
				</form>
			</div>
		</div>
	</section>
</body>

</html>