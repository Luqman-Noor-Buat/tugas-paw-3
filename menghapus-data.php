<?php
include "koneksi.php";
$nim = $_GET['id'];

$sql ="DELETE FROM tbl_206 WHERE nim=$nim";
$hasil = mysqli_query($koneksi, $sql);
if(!$hasil){
    echo "
    <script>
      alert('Anda gagal menghapus data, silahkan coba kembali :(');
      document.location.href='menampilkan-data.php';   
    </script>
    ";
}else{
    echo "
    <script>
      alert('Anda telah berhasil menghapus data dari tbl_206');
      document.location.href='menampilkan-data.php';   
    </script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="logo.png" />
  <title>Menghapus Data</title>
</head>
<body>
  
</body>
</html>