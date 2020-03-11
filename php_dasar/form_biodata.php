<!doctype html>
<html>
<head>
	<title> Pengolahan form </title>
</head>
<body>
	<form action =""method="post" name="input">
		NIM : <input type="text" name="nim"><br>
		Nama : <input type="text" name="nama"><br>
		Umur : <input type="text" name="umur"><br>
		Nilai : <input type="text" name="nilai"><br>
		Status : <input type="text" name="status"><br>
		<input type="submit" name="input" value="input">
	</form>
	</body>
	</html>

	<?php

	if (isset($_POST['input'])) {
	$nim = $_POST['nim'];
	$nama = $_POST['nama'];
	$umur = $_POST['umur'];
	$nilai = $_POST['nilai'];
	$status = $_POST['status'];

	echo "NIM :    <b>$nim</b><br>";
	echo "Nama :   <b>$nama</b><br>";
	echo "Umur :   <b>$umur</b><br>";
	echo "Nilai :  <b>$nilai</b><br>";
	echo "Status : <b>$status</b><br>";

}
?>

