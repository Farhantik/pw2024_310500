<?php
session_start();
if (!isset($_SESSION['login'])) {
  header("location: login.php");
  exit;
}
require 'functions.php';

// jika tidak ada id di URL
if (!isset($_GET['id'])) {
  header("Location: index.php");
  exit;
}

//ambil id dari URL
$id = $_GET["id"];

// query menu berdasarkan id
$m = query("SELECT * FROM menu WHERE id_menu = $id");


if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
    alert('data berhasil diubah');
    document.location.href ='index.php';
    </script>";
  } else {
    echo "data gagal diubah!";
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ubah Data Menu</title>

</head>

<body>
  <h3>Form Ubah Data Menu</h3>
  <form action="" method="POST">
    <input type="hidden" name="id" value="<?= $m['id_menu']; ?>">
    <ul>
      <li>
        <label>
          nama :
          <input type="text" name="nama_menu" autofocus required value="<?= $m['nama_menu']; ?>">
        </label>
      </li>
      <li>
        <label>
          harga :
          <input type="text" name="harga_menu" value="<?= $m['harga_menu']; ?>">
        </label>
      </li>
      <li>
        <label>
          Foto :
          <input type="text" name="foto_menu" value="<?= $m['foto_menu']; ?>">
        </label>
      </li>
      <li>
        <button type="submit" name="ubah">Ubah Data!</button>
      </li>
      <li>
        <a href="index.php">kembali</a>
      </li>
  </form>
  </ul>
</body>

</html>