<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>ГБУЗ - Отзывы</title>
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
			<h1 class="h1">Наши благодарности и отзывы</h1>
			<p class="p">
				1) Благодарность всему коллективу отделения травматологии и ортопедии
			</p>
			<p class="p">
				2) Благодарность врачу-травматологу-ортопеду
			</p>
			<p class="p">
				3) Благодарность врачам-акушерам-гинекологам
			</p>
			<p class="p">
				4) Благодарность всему медицинскому персоналу отделения челюстно-лицевой хирургии
			</p>
			<p class="p">
				5) Благодарственное письмо коллективу отделения от имени командования 169 ОМСБр ПТДН «КАМА» и всего личного
				состава
			</p>
			<p class="p">
				<span class="p2">ALEX:</span> Все отлично, чисто, добрый почти персонал. Минусы: Парковки нет. Найти место
				просто
				нереально. Огромный
				поток
				машин, зимой снег не чистят, люди подскальзываются и падают на проезжей части, снежная грязевая масса со льдом
				на дне. Вышел/упал/в больницу Бурденко попал
			</p>
			<p class="p">
				<span class="p2">Валентина:</span> Благодарна Иванчину Александру Петровичу.28 марта оперировал
				меня,выздоравливаю без осложнений и болей,надеюсь,что всё срастется и я наконец смогу безболезненно наступать на
				ногу.Очень внимательный доктор и хороший человек!
			</p>
		</div>
	</section>
	<section class="section-2">
		<div class="container">
			<h2 class="h2">Оставить отзыв о нас:</h2>
			<div class="main-feedback-form main-feedback-form-2">
				<form action="./help/fedbackVrach.php" method="POST">
					<label for="name">Ваше имя:</label>
					<input type="text" id="name" name="name" class="name" placeholder="Имя" required />
					<label for="female">Ваша фамилия:</label>
					<input type="text" id="female" name="female" class="name" placeholder="Фамилия" required />
					<label for="address">ФИО посещаемого врача:</label>
					<input type="text" id="vrach" name="vrach" class="name" placeholder="Врач" required />

					<label for="email">Ваша почта</label>
					<input type="email" name="email" id="email" class="email" placeholder="Email" required />

					<label for="tel">Ваш номер телефона</label>
					<input type="tel" name="tel" class="tel" maxlength="10" id="tel" placeholder="Номер телефона" required />

					<label for="fedbackinfo">Напишите отзыв:</label>
					<textarea name="fedbackinfo" id="fedbackinfo" placeholder="Отзыв" rows="5" required></textarea>

					<input class="submit" name="submit" type="submit" value="Отправить" />
				</form>
			</div>
		</div>
	</section>
</body>

</html>