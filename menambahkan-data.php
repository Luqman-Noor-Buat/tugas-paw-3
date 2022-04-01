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
    <link rel="icon" href="logo.png" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <title>Menambahkan Data</title>
    <style>
      .input-color{
        background-color: whitesmoke;
      }
    </style>
  </head>
  <body>
    <!--<h1>Lagi Belajar Bootstrap!</h1>-->
    <nav class="navbar navbar-expand-sm bg-primary navbar-dark">
      <div class="container-fluid">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="menampilkan-data.php">Beranda</a>
          </li>
        <li class="nav-item">
            <a class="nav-link active" href="#">Tambah</a>
          </li>
        </ul>
      </div>
    </nav>
    <div class="container">
      <div class="container mt-3">
        <h2>Menambahkan Data</h2>
        <p>Silahkan masukkan data dibawah ini:</p>
        <form method="post">
          <div class="form-floating mb-3 mt-3">
            <input type="text" class="form-control input-color" id="nim" placeholder="Masukkan NIM" name="nim" required>
            <label for="nim">NIM</label>
          </div>
          <div class="form-floating mb-3 mt-3">
            <input type="text" class="form-control input-color" id="nama" placeholder="Masukkan Nama" name="nama" required>
            <label for="nama">Nama</label>
          </div>
          <div class="form-floating mb-3 mt-3">
            <input type="text" class="form-control input-color" id="jenis_kelamin" placeholder="Masukkan Jenis Kelamin" name="jenis_kelamin" required>
            <label for="jenis_kelamin">Jenis Kelamin</label>
          </div>
          <div class="form-floating mb-3 mt-3">
            <input type="text" class="form-control input-color" id="prodi" placeholder="Masukkan Prodi" name="prodi" required>
            <label for="prodi">Prodi</label>
          </div>
          <div class="form-floating mb-3 mt-3">
            <input type="text" class="form-control input-color" id="asal_kota" placeholder="Masukkan Asal Kota" name="asal_kota" required>
            <label for="asal_kota">Asal Kota</label>
        </div>
          <button type="submit" class="btn btn-primary" name="submit">Kirim</button>
        </form>
      </div>
    </div>

    <!--Bagian Bawah-->
    <footer class="bg-primary text-center text-lg-start fixed-bottom">
      <div class="text-center p-3 text-white" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2022 Copyright By
        <a class="text-white" href="https://github.com/Luqman-Noor-Buat">Luqman Noor Buat</a>
      </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
