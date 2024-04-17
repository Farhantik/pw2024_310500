<?php
require '../functions.php';
$menu = cari($_GET['keyword']);
?>

<table border="1" cellpadding="10" cellspacing="0">
  <tr>
    <th>#</th>
    <th>foto_menu</th>
    <th>nama_menu</th>
    <th>harga_menu</th>
    <th>Aksi</th>
  </tr>

  <?php if (empty($menu)) : ?>
    <tr>
      <td colspan="5">
        <p style="color: red; font-style: italic;">data menu tidak ditemukan!</p>
      </td>
    </tr>
  <?php endif; ?>


  <?php $i = 1;
  foreach ($menu as $m) : ?>
    <tr>
      <td><?= $i++; ?></td>
      <td><img src="img/<?= $m['foto_menu']; ?>" width="60"></td>
      <td><?= $m['nama_menu']; ?></td>
      <td><?= $m['harga_menu']; ?></td>
      <td>
        <a href="detail.php?id=<?= $m['id_menu']; ?>">lihat detail</a>
      </td>
    </tr>
  <?php endforeach; ?>
</table>