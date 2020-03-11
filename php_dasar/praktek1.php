<?php
$alat_geordi1 = "phaser";
$alat_geordi2 = "tricorder";
$alat_geordi3 = "visor";
$alat_geordi4 = "analyzer photonik";

$harga_alat_geordi1 = 7500;
$harga_alat_geordi2 = 12500;
$harga_alat_geordi3 = 16000;
$harga_alat_geordi4 = 2300;

$jumlah_alat_geordi1 = 2;
$jumlah_alat_geordi2 = 5;
$jumlah_alat_geordi3 = 1;
$jumlah_alat_geordi4 = 3;

$total_alat_geordi1 = $jumlah_alat_geordi1 * $harga_alat_geordi1;
$total_alat_geordi2 = $jumlah_alat_geordi2 * $harga_alat_geordi2;
$total_alat_geordi3 = $jumlah_alat_geordi3 * $harga_alat_geordi3;
$total_alat_geordi4 = $jumlah_alat_geordi4 * $harga_alat_geordi4;

$total_harga = $total_alat_geordi1 + $total_alat_geordi2 + $total_alat_geordi3 + $total_alat_geordi4;

$diskon = 5;

$nilai_diskon =($diskon * $total_harga)/100;

$total_harga_dibayar = $total_harga - $nilai_diskon;

?>

<html>
<head>
<title>Geordi dan daftar peralatan yang dibeli</title>
</head>
<body>
<center>
<table border="1" cellspacing="0" cellpanding="3">
<tr>
<td colspan="4" align="center" valign="middle">
<b> daftar pemesanan peralatan geordi la forge - NCC1701D</B>
</td>
</tr>
<tr>
<td><b>Nama Peralatan</b></td>
</tr>
<?php
?>
<tr> 
<td align="left"><?php echo $alat_geordi1; ?></td>
<td align="right"><?php echo $jumlah_alat_geordi1; ?></td>
<td align="right"><?php echo $harga_alat_geordi1; ?></td>
<td align="right"><?php echo $total_alat_geordi1; ?></td>
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
<td align="right"><?php echo $harga_alat_geordi3; ?></td>
<td align="right"><?php echo $total_alat_geordi3; ?></td>
</tr>
<tr>
<td align="left"><?php echo $alat_geordi4; ?></td>
<td align="right"><?php echo $jumlah_alat_geordi4; ?></td>
<td align="right"><?php echo $harga_alat_geordi4; ?></td>
<td align="right"><?php echo $total_alat_geordi4; ?></td>
</tr>
<tr>
<td colspan="3" align="right">total harga</td>
<td align="right"><?php echo $total_harga; ?></td>
</tr>
<tr>
<td colspan="3" align="right">diskon <?php echo"($diskon %)" ; ?></td>
 <td align= "right"><?php echo $nilai_diskon; ?></td>

</tr>
<td colspan="3" align="right">jumlah harus dibayar</td>
<td align="right"><?php echo $total_harga_dibayar; ?></td>
</tr>
</table>
</center>
</body>
</html>