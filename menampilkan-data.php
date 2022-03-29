<?php

include "koneksi.php";

$sql = "SELECT * FROM tbl_206";
$hasil = mysqli_query($koneksi, $sql);
while($row = mysqli_fetch_array($hasil))
{
    echo $row["nim"];
    echo $row["nama"];
    echo $row["jenis_kelamin"];
    echo $row["prodi"];
    echo $row["asal_kota"];
}

?>