<?php
include 'koneksi.php';

$id = $_GET['id'];

$mhs = query("SELECT * FROM mahasiswa where id='$id'")[0];

if (isset($_POST["button"])) {

    if (edit($_POST) > 0) {
        echo "
        <script>
        alert ('data berhasil diedit');
        document.location.href='index.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert ('data Gagal !!! diedit');
        document.location.href='index.php';
        </script>
        ";
    }
}
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

    <title>EDIT PENDAFTARAN MAHASISWA</title>
</head>

<body>


    <table align=center border="1" width="700" cellpadding="5" cellspacing="2">
        <form id="form1" name="form1" method="post" action="edit.php">
            <tr>
                <th align=left colspan="100">
                    EDIT PENDAFTARAN MAHASISWA</th>
            </tr>
            <tr>
            <tr>
                <p><input type="hidden" name="id" id="id" value="<?= $mhs["id"]; ?>" /></p>
                <th align=left width="50">Nama Lengkap</th>
                <th width="2">:</th>
                <label for="nama"></label>
                <span id="ln">
                    <td>
                        <input type="text" name="nama" id="nama" size="25" required value="<?= $mhs["nama"]; ?>" />
                    </td>
            </tr>

            <tr>
                <th align=left> Jenis Kelamin</th>
                <th>:</th>
                <td><input type="radio" name="jk" value="Pria" checked>Pria
                    <input type="radio" name="jk" value="Wanita">Wanita </br> </td>
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
                        <input type="text" name="sekolah" id="sekolah" value="<?= $mhs["sekolah"]; ?>" />
                    </td>
            </tr>
            <tr>
                <th align=left width="3">Jurusan Pilihan</th>
                <th>:</th>
                </td>
                <td>
                    <select name="jurusan">
                        <option value="<?= $mhs["jurusan"]; ?>">Teknik Informatika</option>
                        <option value="<?= $mhs["jurusan"]; ?>">Teknik Komputer</option>
                        <option value="<?= $mhs["jurusan"]; ?>">Multimedia</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th width="50"></th>
                <th></th>
                <td><input type="submit" name="button" id="button" value="EDIT DATA" />
                    <a input type="submit" href="index.php">Kembali</a> </td>
    </table>