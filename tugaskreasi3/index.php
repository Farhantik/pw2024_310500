<?php
session_start();
if (!isset($_SESSION['login'])) {
  header("location: login.php");
  exit;
}

require 'functions.php';
$menu = query("SELECT * FROM menu");

// ketika tombol cari diklik
if (isset($_POST['cari'])) {
  $menu = cari($_POST['keyword']);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Menu</title>
</head>

<body>
  <a href="logout.php">Logout</a>
  <h3>Daftar Menu</h3>

  <a href="tambah.php">Tambah Data Menu</a>
  <br><br>

  <form action="" method="POST">
    <input type="text" name="keyword" size="40" placeholder="masukkan keyword pencarian..." autocomplete="off" autofocus class="keyword">
    <button type="submit" name="cari" class="tombol-cari">Cari!</button>
  </form>
  <br>

  <div class="container">
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
  </div>

  <script src="js/script.js"></script>
</body>

</html>