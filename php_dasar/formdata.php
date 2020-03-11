<html>

<head>
    <title>Form Data Pegawai</title>
</head>

</html>
<p>
    <h2><b>FORM DATA PEGAWAI</b></h2>
</p>
-----------------------------------------------------------------------------------

<br>
<?php

$tanggal = date("d");
$bulan = date("M");
$tahun = date("Y");
date_default_timezone_set('Asia/Jakarta');
$jam = date("H:i:s A");
echo "<b>Tanggal : $tanggal - $bulan - $tahun</b><br>";
echo "<b>Jam : $jam</b><br>";
?>

<form action="formdata1.php" method="POST" name"input>
    <br>
    <table>
        <tr>
            <td width="150">
                <b>No.pegawai </td>
            <td> <input name="nopeg" type="text" maxlength="5">
                </b></td>
        </tr>
        <tr>
            <td>
                <b>Nama pegawai </td>
            <td> <input name=nama type="text" maxlength="25">
                </b></td>
        </tr>
        <tr>
            <td>
        <tr>
            <td>
                <b>tanggal lahir</td>
            <td> <input name="tgl" type="text>" </b> </td> </tr> <tr>
            <td>
        <tr>
            <td>
                <b>Tahun Lahir </td>
            <td> <input name="umur" type="text">
                </b></td>
        </tr>
        <tr>
            <td>
                <b>Jenis Kelamin</b>
            </td>
            <td>
                <select name="jk">
                    <option value="pria">1.pria</option>
                    <option value="wanita">2.wanita</option>
                </select>
            </td>
            <td>
        </tr>

        <tr>
            <td>
                <b>status personal</b>
            </td>
            <td>
                <select name="sp">
                    <option value="menikah">1.menikah</option>
                    <option value="blm menikah">2.blm menikah</option>
                </select>
            </td>
        </tr>
        <tr>
            <td height="141">
                <b>jabatan</b>
            </td>
            <td>
                <input type="radio" name="jbtn" value="direktur" checked>
                direktur <br />
                <input type="radio" name="jbtn" value="manager" checked>
                manager <br />
                <input type="radio" name="jbtn" value="supervisor" checked>
                supervisor <br />
                <input type="radio" name="jbtn" value="staff" checked>
                staff <br />
            </td>
        </tr>
        <tr>
            <td>
                <b>status kepegawaian</b>
            </td>
            <td>
                <input type="radio" name="sk" value="tetap" checked>
                tetap
                <input type="radio" name="sk" value="kontrak" checked>
                kontrak <br />

            </td>
        </tr>
        <tr>
            <td>
                <b>Alasan</b>
            </td>
            <td>
                <textarea rows="5" cols="20">

</textarea>
    </table><br>
    <br>
    <input type="submit" name="input" value="Tampilkan" </p> </form>