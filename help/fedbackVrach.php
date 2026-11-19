<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$connect = new PDO("mysql:host=localhost; dbname=bolnitca;", 'root', '');
	if (isset($_POST['name'])) {
		$name = $_POST['name'];
		$female = $_POST['female'];
		$address = $_POST['address'];
		$email = $_POST['email'];
		$tel = $_POST['tel'];
		$fedbackinfo = $_POST['fedbackinfo'];

		$query = $connect->query("INSERT INTO bolnitca.fedbackVrach (name, female, address, email,tel, fedbackinfo)
		VALUES ('$name', '$female', '$address', '$email', '$tel', '$fedbackinfo')");
	}
	header('Location: ' . "../fedback.php");
	exit;
}
?>