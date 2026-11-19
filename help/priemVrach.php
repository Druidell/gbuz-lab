<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$connect = new PDO("mysql:host=localhost; dbname=bolnitca;", 'root', '');
	if (isset($_POST['name'])) {
		$name = $_POST['name'];
		$female = $_POST['female'];
		$patronymic = $_POST['patronymic'];
		$date = $_POST['date'];
		$snils = $_POST['snils'];
		$address = $_POST['address'];
		$tel = $_POST['tel'];
		$description = $_POST['description'];

		$query = $connect->query("INSERT INTO bolnitca.priemVrach (name, female, patronymic, date, snils, address,tel, description)
		VALUES ('$name', '$female', '$patronymic', '$date', '$snils', '$address', '$tel', '$description')");
	}
	header('Location: ' . "../index.php");
	exit;
}
?>