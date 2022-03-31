<?php

include "koneksi.php";

if(isset($_POST["submit"])){
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jk = $_POST['jenis_kelamin'];
    $prodi = $_POST['prodi'];
    $asal = $_POST['asal_kota'];


$sql = "INSERT INTO tbl_206 VALUE('$nim','$nama','$jk','$prodi','$asal')";
$hasil = mysqli_query($koneksi, $sql);
if(!$hasil){
    echo "
    <script>
      alert('Anda gagal menginputkan data, silahkan coba kembali :(');
      document.location.href='menambahkan-data.php';   
    </script>
    ";
}else{
    echo "
    <script>
      alert('Anda telah berhasil menginputkan data ke tabel mahasiswa');
      document.location.href='menampilkan-data.php';   
    </script>";}
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <title>Memasukkan Data</title>
  </head>
  <body>
    <!--<h1>Lagi Belajar Bootstrap!</h1>-->
    <div class="container">
      <form method="post">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">NIM</label>
          <input type="text" class="form-control" name="nim" required />
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Nama</label>
          <input type="text" class="form-control" name="nama" required />
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
          <input type="text" class="form-control" name="jenis_kelamin" required />
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Prodi</label>
          <input type="text" class="form-control" name="prodi" required />
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Asal Kota</label>
          <input type="text" class="form-control" name="asal_kota" required />
        </div>
        <button type="submit" class="btn btn-warning" name="submit">Kirim</button>
      </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
