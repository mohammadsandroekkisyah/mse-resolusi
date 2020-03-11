<?php

include 'koneksi.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtm1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title> PENDAFTARAN MAHASISWA </title>
    <script src="SpryAssets/SpryValidationTextField.js" type="Text/javascript"></script>
    <link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
</head>

<head>

    <title>PENDAFTARAN MAHASISWA</title>
</head>

<body>


    <table align=center border="1" width="700" cellpadding="5" cellspacing="2">
        <form id="form1" name="form1" method="post" action="simpan.php">
            <tr>
                <th align=left colspan="100">
                    PENDAFTARAN MAHASISWA</th>
            </tr>
            <tr>
            <tr>
                <p><input type="hidden" name="id" id="id" /></p>
                <th align=left width="50">Nama Lengkap</th>
                <th width="2">:</th>
                <label for="nama"></label>
                <span id="ln">
                    <td>
                        <input type="text" name="nama" id="nama" size="27" required />
                    </td>
            </tr>

            <tr>
                <th align=left> Jenis Kelamin</th>
                <th>:</th>
                <td><input type="radio" name="jk" value="pria" checked>Pria
                    <input type="radio" name="jk" value="wanita">Wanita</br> </td>
            </tr>
            <tr>
                <th align=left>Agama</th>
                <th>:</th>
                <td><input type="radio" name="agama" value="Islam" checked>Islam
                    <input type="radio" name="agama" value="Kristen">Kristen
                    <input type="radio" name="agama" value="Katolik">Katolik
                    <input type="radio" name="agama" value="Hindu">Hindu
                    <input type="radio" name="agama" value="Buddha">Buddha</br> </td>
            </tr>
            <tr>

                <th align=left width="50">Asal Sekolah</th>
                <th>:</th>
                <label for="sekolah"></label>
                <span id="ls">
                    <td>
                        <input type="text" name="sekolah" id="sekolah" required />
                    </td>
            </tr>
            <tr>
                <th align=left width="3">Jurusan Pilihan</th>
                <th>:</th>
                </td>
                <td>
                    <select name="jurusan">
                        <option value="Teknik Informatika">Teknik Informatika</option>
                        <option value="Teknik Komputer">Teknik Komputer</option>
                        <option value="Multimedia">Multimedia</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th width="50"></th>
                <th></th>
                <td><input type="submit" name="button" id="button" value="SIMPAN DATA" />
                </td>
            </tr>
    </table>

    <form id="form1" name="form1" method="post" action="">
        <p>&nbsp;</p>
        <hr size="4" width="92.5%" color="white">
        <hr size="4" width="92.5%" color="white">
        <table align="center" width="90%" border="1">
            <tr>
                <th align=center width="25">Nama Lengkap</th>
                <th align=center width="107">Jenis Kelamin</th>
                <th align=center width="70">Agama</th>
                <th align=center width="66">Asal Sekolah</th>
                <th align=center width="66">Jurusan</th>
            </tr>
            <?php
            $sql = "SELECT * FROM  mahasiswa ORDER BY nama ASC";

            $result = $connect->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_array()) {

                    ?>
                    <tr align="center">


                        <td align="center"><?= htmlspecialchars($row['nama']); ?></td>
                        <td align="center"><?= $row['jk']; ?></td>
                        <td align="center"><?= $row['agama']; ?></td>
                        <td align="center"><?= htmlspecialchars($row['sekolah']); ?></td>
                        <td align="center" width="70"><?= $row['jurusan']; ?></td>
                        <th bgcolor="aqua" width="70"><a href="edit.php?id=<?= $row['id']; ?>">Edit</a></th>
                        <td bgcolor="aqua" width="70"><a href="delete.php?id=<?= $row['id']; ?>" onclick="
                        return confirm('Yakin Mau dihapus?');">Delete</a> </td>
                        </td>
                    </tr>

            <?php
                }
            } else {
                echo "<center> 
                <p> Tidak Ada Data</p>
            </center>";
            }

            $connect->close();
            ?>