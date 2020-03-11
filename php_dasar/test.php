<?php
//iniasi variable yang digunakan

// nama peralatan
$alat_geordi1 = "Phaser";
$alat_geordi2 = "Tricorder";
$alat_Geordi3 = "Visor";
$alat_Geordi4 = "Analyzer Photonik";

// harga per unit peralatan
$harga_alat_Geordi1 = 7500;
$harga_alat_Geordi2 = 12500;
$harga_alat_Geordi3 = 160000;
$harga_alat_Geordi4 = 2300;

//jumlah peralatan yang ada
$jumlah_alat_Geordi1 = 2;
$jumlah_alat_Geordi2 = 5;
$jumlah_alat_Geordi3 = 1;
$jumlah_alat_Geordi4 = 3;

//total harga per jenis peralatan
$total_alat_geordi1 = $jumlah_alat_Geordi1 * $harga_alat_Geordi1;
$total_alat_geordi2 = $jumlah_alat_Geordi2 * $harga_alat_Geordi2;
$total_alat_geordi3 = $jumlah_alat_Geordi3 * $harga_alat_Geordi3;
$total_alat_geordi4 = $jumlah_alat_Geordi4 * $harga_alat_Geordi4;

//hitung grand total nilai peralatan Geodi
$total_harga = $total_alat_geordi1 + $total_alat_geordi2 +
$total_alat_geordi3 + $total_alat_geordi4;

// besar doskon untuk Geordi
$diskon = 5;
//jumlah total yang diberikan kepada Geordi
$nilai_diskon = ($diskon * $total_harga)/100;
//jumlah yang harus dibayar Geordi
$total_harga_dibayar = $total_harga - $nilai_diskon;

?>
<html>
<head>
<title>Geordi dan daftar Peralatan Yang Dibeli</title>
</head>
<body>
<center>
<table bolder="1" cellspacing="0" cellpadding=3">
<tr>
<td colspan="4" align="center" valign="middle">
<b>Daftar Pemesanan Peralatan Geordi La Forge - NCC1701D</b>
</td>
</tr>
<tr>
<td><b>Nama Peralatan</b></td>
<td><b>Jumlah</b></td>
<td><b>Harga Satuan</b></td>
<td><b>Jumlah Harga</b></td>
</tr>
<?php
//mulai untuk mengisi tabel daftar dengan data yang ada
?>
<tr>
<td align="left"><?php echo $alat_geordi1; ?></td>
<td align="right"><?php echo $jumlah_alat_geordi1; ?></td>
<td align="right"><?php echo $harga_alat_geordi1; ?></td>
<td align="right"><?php echo $total_alat_geordi2; ?></td>
</tr>
<tr>
<td align="left"><?php echo $alat_geordi2; ?></td>
<td align="right"><?php echo $jumlah_alat_geordi2; ?></td>
<td align="right"><?php echo $harga_alat_geordi2; ?></td>
<td align="right"><?php echo $total_alat_geordi2; ?></td>
</tr>
<tr>
<td align="left"><?php echo $alat_geordi3; ?></td>
<td align="right"><?php echo $jumlah_alat_geordi3; ?></td>
<td align="right"><?php echo $harga_alat_geordi3; ?>></td>
<td align="right"><?php echo $total_alat_geordi3; ?></td>
</tr>
<td>
<td align="left"><?php echo $alat_geordi4; ?></td>
<td align="right"><?php echo $jumlah_alat_geordi4; ?></td>
<td align="right"><?php echo $harga_alat_geordi4; ?></td>
<td align="right"><?php echo $total_alat_geordi4; ?></td>
</tr>
<tr>
<td colspan="3" align="right">Total Harga</td>
<td align="right"><? php echo $Total_harga; ?></td>
</tr>
<td>
<td colspan="3" align="right">
Diskon <? php echo "($diskon % )"; ?></td>
<td align="right"><? echo $nilai_diskon; ?></td>
</tr>
<tr>
<td colspan="3" align="right">Jumlah harus dibayar</td>
td align="right"><? php echo $total_harga_dibayar; ?></td>
<tr>
</table>
</center>
</body>
</html>