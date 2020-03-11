	<h2>FORM DATA PEGAWAI</h2>
<h2>----------------------------------------------</h2>

<?php
echo "<br>Tanggal : " . date("d-M"); 
echo "<br> Tahun : ".date ("Y");
?>
<!doctype html>
<html>
<head>
	<title> Form Data Pegawai</title>
</head>
<body>

	<form action =""method="post" name="input">
		<table>
		<tr><td>No.Pegawai  <input type="text" name="no"><br></td></tr>
		<tr><td>Nama Pegawai <input type="text" name="nama"><br></td></tr>
		<tr><td>Tanggal Lahir  <input type="text" name="tgl"><br></td></tr>
		<tr><td>Tahun Lahir <input type="text" name="thl"><br></td></tr>
		<tr><td>Jenis Kelamin
						 	 <select name=jk>
						   <option name=jk>1.Pria
						   <option name=jk>2.Wanita
						   </option>
						</select>
					</td></tr>
		<br>
		<tr><td>Status Personal <select name=sp>
						   <option name=sp>1.Menikah
						   <option name=sp>2.Belum Menikah
						   </option>
						</select>
					</td></tr>
		
		<tr><td>Jabatan
			<center><tr><td><input type="radio" name="jabatan" value="Direktur">Direktur<br></tr></td> 
               <center><tr><td><tr><td><input type="radio" name="jabatan" value="Manager">Manager<br></tr></td></center> 
                    	  <center><tr><td><input type="radio" name="jabatan" value="Supervisor">Supervisor<br></tr></td></center>
                    	  <center><tr><td><input type="radio" name="jabatan" value="Koordinator">Koordinator<br></tr></td></center>
                     	 <center> <tr><td><input type="radio" name="jabatan" value=Staff>Staff</tr></td>
                     	  </center>
                     	 </select>
         <tr><td>Status Kepegawain 
			<input type="radio" name="status" value="tetap">Tetap  
			<input type="radio" name="status" value="kontrak">Kontrak</tr></td>  
		<tr><td><input type="submit" name="input" value="input data"><br></td></tr>
	</select>
	</table>
	</form>
	</body>
	</html>

<h2>FORM DATA PEGAWAI</h2>
<h2>----------------------------------------------</h2>

<?php
echo "<br>Tanggal : " . date("d-M"); 
echo "<br> Tahun : ".date ("Y");
?>
	<?php

	if (isset($_POST['input'])) {
	$no = $_POST['no'];
	$nama = $_POST['nama'];
	$tgl = $_POST['tgl'];
	$thl = $_POST['thl'];
	$jk = $_POST['jk'];
	$sp = $_POST['sp'];
	$Jabatan = $_POST['jabatan'];
	$Status  = $_POST['status'];


	echo "No.Pegawai :    <b>$no</b><br>";
	echo "Nama Pegawai :   <b>$nama</b><br>";
	echo "Tanggal Lahir :   <b>$tgl</b><br>";
	echo "Tahun Lahir :  <b>$thl</b><br>";
	echo "Jenis Kelamin : <b>$jk</b><br>";
	echo "Status Personal : <b>$sp</b><br>";
	echo "jabatan : 		<b>$Jabatan</b><br>";
	echo "Status Kepegawaian : <b>$Status</b><br>";


}
?>
