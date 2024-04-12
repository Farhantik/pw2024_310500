<?php
require 'functions.php';

// ambil id dari URL
$id = $_GET['id'];

//  query data menu berdasarkan id
$m = query("SELECT * FROM menu WHERE id_menu = $id");

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Menu</title>
</head>

<body>
  <h3>Detail Menu</h3>
  <ul>
    <li><img src="img/<?= $m['foto_menu']; ?>"></li>
    <li>id_menu :<?= $m['id_menu']; ?> </li>
    <li>nama_menu : <?= $m['nama_menu']; ?> </li>
    <li>harga_menu : <?= $m['harga_menu']; ?> </li>
    <li><a href="ubah.php?id=<?= $m['id_menu']; ?>">ubah</a> | <a href="hapus.php?id=<?= $m['id_menu']; ?>" onclick="return comfirm('apakah anda yakin?');">hapus</a></li>
    <li><a href="index.php">Kembaki ke daftar Menu</a></li>
  </ul>
</body>

</html>