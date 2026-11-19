<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$connect = new PDO("mysql:host=localhost; dbname=bolnitca;", 'root', '');
	if (isset($_POST['fio'])) {
		$fio = $_POST['name'];
		$studak = $_POST['studak'];
		$kurs = $_POST['kurs'];
		$address = $_POST['address'];
		$tel = $_POST['tel'];
		$special = $_POST['special'];
		$email = $_POST['email'];

		$query = $connect->query("INSERT INTO bolnitca.dobavStudent (fio, studak, kurs, address, tel, special, email)
		VALUES ('$fio', '$studak', '$kurs', '$address', '$tel', '$special', '$email')");
	}
	header('Location: ' . "../admin/indexadmin.php");
	exit;
}
?>