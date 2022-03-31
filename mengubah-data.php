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
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <title>Memasukkan Data</title>
  </head>
  <body>
    <!--<h1>Lagi Belajar Bootstrap!</h1>-->
    <div class="container">
    <?php while($row = mysqli_fetch_array($hasil)) : ?>
      <form method="post" action="ubah.php">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">NIM</label>
          <input type="text" class="form-control" name="nim" value="<?php echo $row['nim'] ?>" required />
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Nama</label>
          <input type="text" class="form-control" name="nama" value="<?php echo $row['nama'] ?>" required />
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
          <input type="text" class="form-control" name="jenis_kelamin" value="<?php echo $row['jenis_kelamin'] ?>" required />
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Prodi</label>
          <input type="text" class="form-control" name="prodi" value="<?php echo $row['prodi'] ?>" required />
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Asal Kota</label>
          <input type="text" class="form-control" name="asal_kota" value="<?php echo $row['asal_kota'] ?>" required />
        </div>
        <button type="submit" class="btn btn-warning" name="submit">Ubah</button>
      </form>
      <?php endwhile; ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
