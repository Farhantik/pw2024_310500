<?php
session_start();
if (!isset($_SESSION['login'])) {
  header("location: login.php");
  exit;
}
require 'functions.php';

if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
    alert('data berhasil ditambahkan');
    document.location.href ='index.php';
    </script>";
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
        <a href="index.php">kembali</a>
      </li>
  </form>
  </ul>
</body>

</html>