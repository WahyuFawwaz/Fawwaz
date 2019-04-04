<?php
require "connect.php";
$id = $_GET["id"];
$result = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE id = $id");
$mahasiswa = mysqli_fetch_assoc($result);
?>


<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="./bootstrap/bootstrap.min.css">

  <title>Update Data</title>
</head>

<body>

  <!-- Heading -->
  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <p class="lead">Pelatihan CRUD PHP Native Bootcamp LUG 2019</p>
      <h1 class="display-4">Update Data Mahasiswa</h1>
    </div>
  </div>

  <div class="container">
    <!-- Form -->
    <form>

      <!-- Input NIM -->
      <div class="form-group">
        <label>Nomor Induk Mahasiswa</label>
        <input type="text" class="form-control" name="nim" value="<? $mahasiswa['nim'] ?>">
      </div>

      <!-- Input Nama -->
      <div class="form-group">
        <label>Nama Lengkap</label>
        <input type="text" class="form-control" placeholder="contoh : Jhon Doe" name="nama" value="<? $mahasiswa['nim'] ?>">
      </div>

      <!-- Select Jurusan -->
      <?php $jurusan = $mahasiswa['jurusan'] ?>
      <div class="form-group">
        <label>Jurusan</label>
        <select class="form-control" name="jurusan">
        <option value="S1 Sistem Informasi" <?php echo ($jurusann == 'S1 Sistem Informasi' ? 'selected' : '')?>>S1 Sistem Informasi</option>
        <option value="S1 Desain Komunikasi" <?php echo ($jurusann == 'S1 Desain Komunikasi Visual' ? 'selected' : '')?>>S1 Desain Komunikasi Visual</option>
        <option value="D3 Sistem Informasi" <?php echo ($jurusann == 'D3 Sistem Informasi' ? 'selected' : '')?>>D3 Sistem Informasi</option> 
        <option value="D4 Produksi Film dan Tv" <?php echo ($jurusann == 'S1 Sistem Informasi' ? 'selected' : '')?>>S1 Sistem Informasi</option>
          <option>S1 Akuntansi</option>
        </select>
      </div>

      <!-- Input Foto -->
      <div class="form-group">
        <label>Foto Mahasiswa</label>
        <input type="text" class="form-control" value="aku.jpg" name="foto">
      </div>

      <!-- Upload Foto -->
      <div class="form-group">
        <label>Ubah Foto</label><br>
        <img src="./foto-mhs/aku.jpg" width="150px;" alt="" srcset=""> <br><br> 
        <input type="file" class="form-control-file" name="uploadfoto">
      </div>

      <br><br>
      <!-- Button Batal -->
      <button type="submit" class="btn btn-danger" name="batal">Batal</button>
      <!-- Button Tambah -->
      <button type="submit" class="btn btn-primary" name="tambah">Tambah</button>

    </form>
  </div>



  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->

  <script src="./bootstrap/jquery.js"></script>
  <script src="./bootstrap/popper.js"></script>
  <script src="./bootstrap/bootstrap.js"></script>
</body>

</html>