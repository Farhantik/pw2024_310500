<?php
require 'functions.php';

if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "data berhasil ditambahkan!";
  } else {
    echo "data gagal ditambahkan!";
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data Menu</title>

</head>

<body>
  <h3>Form Tambah Data Menu</h3>
  <form action="" method="POST">
    <ul>
      <li><label>
          Id :
          <input type="text" name="id_menu" autofocus>
        </label></li>
      <li>
        <label>
          nama :
          <input type="text" name="nama_menu">
        </label>
      </li>
      <li>
        <label>
          harga :
          <input type="text" name="harga_menu">
        </label>
      </li>
      <li>
        <label>
          Foto :
          <input type="text" name="foto_menu">
        </label>
      </li>
      <li>
        <button type="submit" name="tambah">Tambah Data!</button>
      </li>
      <li>
        <a href="latihan3.php">kembali</a>
      </li>
  </form>
  </ul>
</body>

</html>