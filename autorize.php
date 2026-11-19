<?php
session_start();
$user;
if ($_SESSION['user']) {
	header('Location: admin/indexadmin.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>ГБУЗ - Авторизация</title>
	<link rel="stylesheet" href="./css/style.css" />
	<link rel="stylesheet" href="./css/form2.css" />
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
			<h1 class="h1">Авторизация</h1>
			<form action="vendor/signin.php" method="post" id="login-form" class="login-form" autocomplete="off" role="main">
				<h1 class="a11y-hidden">Форма авторизации</h1>
				<div>
					<label class="label-email">
						<input class="autorize-input text" type="text" name="login" placeholder="Ваш логин" tabindex="1" required>
						<span class="required">Логин</span>
					</label>
				</div>
				<div>
					<label class="label-password">
						<input class="autorize-input text" type="password" name="password" tabindex="2" required
							placeholder="Ваш пароль">
						<span class="required">Пароль</span>
					</label>
				</div>
				<button class="autorize-btn" type="submit">Войти</button>
				<!-- <?php
				if ($_SESSION['message']) {
					echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
				}
				unset($_SESSION['message']);
				?> -->
			</form>
	</section>
	<section class="section-2">
		<div class="container">

		</div>
	</section>
</body>

</html>