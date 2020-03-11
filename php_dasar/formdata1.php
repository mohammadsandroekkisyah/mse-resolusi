<html>

<head>
    <title>form data pegawai</title>
</head>

<body>
    <p>
        <h2><b>DATA PEGAWAI</b></h2>
    </p>
    -------------------------------------------------------
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
    <br>

    <?php
    if (isset($_POST['input'])) {
        $nopeg = $_POST['nopeg'];
        $nama = $_POST['nama'];
        $tgl = $_POST['tgl'];
        $umur = $_POST['umur'];
        $jk = $_POST['jk'];
        $sp = $_POST['sp'];
        $jbtn = $_POST['jbtn'];
        $sk = $_POST['sk'];
        $pegawai = ($tahun - $umur);

        echo    "-No.pegawai      : $nopeg<br>";
        echo    "-Nama pegawai    : $nama<br>";
        echo    "-Tanggal lahir   : $tgl,$umur<br>";
        echo    "-Umur Pegawai    : $pegawai<br>";
        echo    "-Jenis Kelamin    : $jk<br />";
        echo    "-status personal   : $sp<br />";
        echo    "-jabatan    : $jbtn<br />";
        echo    "-status kepegawaian    : $sk<br/ >";
    }

    $direkturt = "10000000";
    $managert = "7000000";
    $supervisort = "3500000";
    $koordinatort = "2500000";
    $stafft = "2200000";

    if ($sk == "tetap") {
        if ($jbtn == "direktur")
            echo "-gaji : $direkturt";
    }

    if ($sk == "tetap") {
        if ($jbtn == "manager")
            echo "-gaji : $managert";
    }

    if ($sk == "tetap") {
        if ($jbtn == "supervisor")
            echo "-gaji : $supervisort";
    }

    if ($sk == "tetap") {
        if ($jbtn == "koordinator")
            echo "-gaji : $koordinatort";
    }

    if ($sk == "tetap") {
        if ($jbtn == "staff")
            echo "-gaji : $stafft";
    }


    $direkturk = "8000000";
    $managerk = "5000000";
    $supervisork = "3000000";
    $koordinatork = "2500000";
    $staffk = "2200000";

    if ($sk == "kontrak") {
        if ($jbtn == "direktur")
            echo "-gaji : $direkturk";
    }

    if ($sk == "kontrak") {
        if ($jbtn == "manager")
            echo "-gaji : $managerk";
    }

    if ($sk == "kontrak") {
        if ($jbtn == "supervisor")
            echo "-gaji : $supervisork";
    }

    if ($sk == "kontrak") {
        if ($jbtn == "koordinator")
            echo "-gaji : $koordinatork";
    }

    if ($sk == "kontrak") {
        if ($jbtn == "staff")
            echo "-gaji : $staffk";
    }


    ?>