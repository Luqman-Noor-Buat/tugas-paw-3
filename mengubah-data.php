<?php

include "koneksi.php";
$nim = $_GET['id'];
$sql ="SELECT * FROM tbl_206 WHERE nim=$nim";
$hasil = mysqli_query($koneksi, $sql);
if (!$hasil){
    echo "Query salah";
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
    <title>Mengubah Data</title>
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
            <a class="nav-link" href="menambahkan-data.php">Tambah</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#">Ubah</a>
          </li>
        </ul>
      </div>
    </nav>
    <div class="container">
      <div class="container mt-3">
        <h2>Mengubah Data</h2>
        <p>Silahkan ubah data dibawah ini:</p>
        <?php while($row = mysqli_fetch_array($hasil)) : ?>
        <form method="post" action="ubah.php">
          <div class="form-floating mb-3 mt-3">
            <input type="text" class="form-control input-color" id="nim" placeholder="Masukkan NIM" name="nim" value="<?php echo $row['nim'] ?>" required>
            <label for="nim">NIM</label>
          </div>
          <div class="form-floating mb-3 mt-3">
            <input type="text" class="form-control input-color" id="nama" placeholder="Masukkan Nama" name="nama" value="<?php echo $row['nama'] ?>" required>
            <label for="nama">Nama</label>
          </div>
          <div class="form-floating mb-3 mt-3">
            <input type="text" class="form-control input-color" id="jenis_kelamin" placeholder="Masukkan Jenis Kelamin" name="jenis_kelamin" value="<?php echo $row['jenis_kelamin'] ?>" required>
            <label for="jenis_kelamin">Jenis Kelamin</label>
          </div>
          <div class="form-floating mb-3 mt-3">
            <input type="text" class="form-control input-color" id="prodi" placeholder="Masukkan Prodi" name="prodi" value="<?php echo $row['prodi'] ?>" required>
            <label for="prodi">Prodi</label>
          </div>
          <div class="form-floating mb-3 mt-3">
            <input type="text" class="form-control input-color" id="asal_kota" placeholder="Masukkan Asal Kota" name="asal_kota" value="<?php echo $row['asal_kota'] ?>" required>
            <label for="asal_kota">Asal Kota</label>
        </div>
          <button type="submit" class="btn btn-primary" name="submit">Ubah</button>
        </form>
        <?php endwhile; ?>
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
