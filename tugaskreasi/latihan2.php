<?php
require 'functions.php';
$menu = query("SELECT * FROM menu");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Menu</title>
</head>

<body>
  <h3>Daftar Menu</h3>

  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>#</th>
      <th>foto_menu</th>
      <th>id_menu</th>
      <th>nama_menu</th>
      <th>harga_menu</th>
      <th>Aksi</th>
    </tr>

    <?php $i = 1;
    foreach ($menu as $m) : ?>
      <tr>
        <td><?= $i++; ?></td>
        <td><img src="img/<?= $m['foto_menu']; ?>" width="60"></td>
        <td><?= $m['id_menu']; ?></td>
        <td><?= $m['nama_menu']; ?></td>
        <td><?= $m['harga_menu']; ?></td>
        <td>
          <a href="">ubah</a> | <a href="">hapus</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>

</body>

</html>