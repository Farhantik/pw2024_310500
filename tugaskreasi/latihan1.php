<?php
// koneksi ke DB & pilih Database
$conn = mysqli_connect('localhost', 'root', '', 'cafeshop');

// Query isi tabel menu
$result = mysqli_query($conn, "SELECT * FROM menu");

// ubah data ke dalam array
// $row = mysqli_fetch_row($result); // array numerik
$rows = [];
while ($row = mysqli_fetch_assoc($result)) {
  $rows[] = $row;
}


// tampung ke variable menu
$menu = $rows

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