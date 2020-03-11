<?php
$connect = mysqli_connect("localhost", "root", "", "ujian_uts");

function query($query)
{
    global $connect;
    $result = mysqli_query($connect, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function delete($id)
{
    global $connect;
    mysqli_query($connect, "DELETE FROM mahasiswa WHERE id='$id'");
    return mysqli_affected_rows($connect);
}
function edit($row)
{
    global $connect;
    $id = $row["id"];
    $nama = htmlspecialchars($row["nama"]);
    $jk = $row["jk"];
    $agama = $row["agama"];
    $sekolah = htmlspecialchars($row["sekolah"]);
    $jurusan = $row["jurusan"];


    $query = "UPDATE mahasiswa SET 
            nama='$nama',
            jk='$jk',
            agama='$agama',
            sekolah='$sekolah',
            jurusan='$jurusan'
            where id=$id
            ";
    mysqli_query($connect, $query);
    return mysqli_affected_rows($connect);
}
