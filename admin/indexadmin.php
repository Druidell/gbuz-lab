<?php
session_start();

if ($_SESSION['user']) {
} else {
	header('Location: ../autorize.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>ГБУЗ - Админка</title>
	<link rel="stylesheet" href="../css/style.css" />
	<link rel="stylesheet" href="../css/form.css" />
	<link rel="stylesheet" href="../css/table.css" />
	<link rel="stylesheet" href="../css/reset.css" />
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
							<a href="../index.php" class="menu-link">Главная</a>
						</li>
						<li class="menu-item">
							<a href="../info.php" class="menu-link">О нас</a>
						</li>
						<li class="menu-item">
							<a href="../fedback.php" class="menu-link">Отзывы</a>
						</li>
						<li class="menu-item">
							<a href="./indexadmin.php" class="menu-link">Админка</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</header>
	<section class="section-1">
		<div class="container">
			<h1 class="h1">Админка</h1>
		</div>
	</section>
	<div class="main-forms">

		<section class="section-2">
			<div class="container">
				<h2 class="h2">Добавить стажёра студента</h2>
				<div class="main-feedback-form">
					<form action="../help/dobavStudent.php" method="POST">
						<label for="fio">ФИО студента:</label>
						<input type="text" id="fio" name="fio" class="name" placeholder="ФИО" required />
						<label for="studak">Номер студенческого билета:</label>
						<input type="text" id="studak" name="studak" class="name" placeholder="Студенческий билет" required />
						<label for="kurs">Курс студента:</label>
						<input type="text" id="kurs" name="kurs" class="name" placeholder="Курс" required />
						<label for="address">Адрес проживания:</label>
						<input type="text" id="address" name="address" class="name" placeholder="Адрес" required />
						<label for="tel">Номер телефона:</label>
						<input type="tel" id="tel" name="tel" class="name" placeholder="Телефон" required />
						<label for="special">Специальность студента:</label>
						<input type="text" id="special" name="special" class="name" placeholder="Специальность" required />
						<label for="email">Электронная почта студента</label>
						<input type="email" name="email" id="email" class="email" placeholder="Email" required />
						<input class="submit" name="submit" type="submit" value="Отправить" />
					</form>
				</div>
			</div>
		</section>
		<section class="section-2">
			<div class="container">
				<h2 class="h2">Информация о посетителях</h2>
				<?php
				// Подключение к базе данных 
				$conn = new mysqli("localhost", "root", "", "bolnitca");

				// Проверка соединения 
				if ($conn->connect_error) {
					die("Connection failed: " . $conn->connect_error);
				}

				// SQL-запрос для получения данных 
				$sql = "SELECT id, name, female, patronymic, date, snils, address, tel, description FROM bolnitca.priemVrach";
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
					// Вывод данных в таблицу 
					echo '<table class="admin__table-users table">';
					echo '<thead class="table-users__thead">
						<tr class="table-users__tr">
						<th class="table-users__th">ID</th>
						<th class="table-users__th">Имя</th>
						<th class="table-users__th">Фамилия</th>
						<th class="table-users__th">Отчество</th>
						<th class="table-users__th">Дата рождения</th>
						<th class="table-users__th">Номер снилса</th>
						<th class="table-users__th">Адрес проживания</th>
						<th class="table-users__th">Номер телефона</th>
						<th class="table-users__th">Зачем обратился:</th>
						<th class="table-users__th">Удалить</th>
						</tr></thead>';
					echo '<tbody>';

					while ($row = $result->fetch_assoc()) {
						echo '<tr>';
						echo '<td>' . $row['id'] . '</td>';
						echo '<td>' . $row['name'] . '</td>';
						echo '<td>' . $row['female'] . '</td>';
						echo '<td>' . $row['patronymic'] . '</td>';
						echo '<td>' . $row['date'] . '</td>';
						echo '<td>' . $row['snils'] . '</td>';
						echo '<td>' . $row['address'] . '</td>';
						echo '<td>' . $row['tel'] . '</td>';
						echo '<td>' . $row['description'] . '</td>';
						echo '<td>' . "<form action='../help/delete.php' method='post'>
						<input type='hidden' name='id' value='" . $row["id"] . "' />
						<input class='input-delete' type='submit' value='Удалить'>
						</form>" . '</td>';
						echo '</tr>';
					}

					echo '</tbody></table>';
				} else {
					echo "0 результатов";
				}
				$conn->close();
				?>
			</div>
		</section>
	</div>

	</div>
</body>

</html>