<?php

include 'koneksi.php';
@$id = $_POST['id'];
@$nama = $_POST['nama'];
@$jnskelamin = $_POST['jk'];
@$agama = $_POST['agama'];
@$aslsekolah = $_POST['sekolah'];
@$jurusan = $_POST['jurusan'];





$insert = mysqli_query($connect, "insert into mahasiswa values ('$id','$nama','$jnskelamin','$agama','$aslsekolah','$jurusan')");


header("location:index.php");
