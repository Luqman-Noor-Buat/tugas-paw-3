<?php

include "koneksi.php";

$sql = "SELECT * FROM tbl_206";
$hasil = mysqli_query($koneksi, $sql);

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script src="https://kit.fontawesome.com/719f1245a0.js" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <title>Mengubah Data</title>
  </head>
  <body>
    <!--<h1>Lagi Belajar Bootstrap!</h1>-->
    <div class="container">
      <table class="table table-warning table-bordered border-dark text-center" style="width: 1260px">
        <thead>
          <tr>
            <th scope="col" width="210px">Aksi</th>
            <th scope="col" width="210px">NIM</th>
            <th scope="col" width="210px">Nama</th>
            <th scope="col" width="210px">Jenis Kelamin</th>
            <th scope="col" width="210px">Prodi</th>
            <th scope="col" width="210px">Asal Kota</th>
          </tr>
        </thead>
        <tbody>
        <?php while($row = mysqli_fetch_array($hasil)) : ?>
          <tr>
            <th scope="row">
              <a href="mengubah-data.php?id=<?=$row['nim']?>" style="text-decoration: none;">
                <button type="button" class="btn btn-success"><i class="fas fa-edit"></i></button>
              </a>
              <a href="menghapus-data.php?id=<?=$row['nim']?>" style="text-decoration: none;">
                <button type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
              </a>
            </th>
            <td><?= $row["nim"]; ?></td>
            <td><?= $row["nama"]; ?></td>
            <td><?= $row["jenis_kelamin"]; ?></td>
            <td><?= $row["prodi"]; ?></td>
            <td><?= $row["asal_kota"]; ?></td>
          </tr>
          <?php endwhile; ?>
        </tbody>
      </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
