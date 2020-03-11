<!doctype html>
<html>
<head>
	<title> Pengolahan form </title>
</head>
<body>
<form action =""method="post" name="input">
	Nama Anda : <input type="text" name="nama"><br>
	Password  :  <input type="Password" name="password"<br>
	<input type="submit" name="Masuk" value="input"<br>
</form>
</body>
</html>

<?php

if (isset($_POST['input'])) {
	$nama = $_POST['nama'];
	echo "Nama Anda : <b>$nama</b>";
}
?>