<?php
// koneksi ke DB & pilih Database
$conn = mysqli_connect('localhost', 'root', '', 'cafeshop');

// Query isi tabel menu
$result = mysqli_query($conn, "SELECT * FROM menu");
var_dump($result);
// ubah data ke dalam array
// $row = msqli_fetch_row($result);
// tampung ke variable menu

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
      <th>Gambar</th>
      <th>id_menu</th>
      <th>nama_menu</th>
      <th>harga_menu</th>
      <th>Aksi</th>
    </tr>
    <tr>
      <td>1</td>
      <td><img src="img/espresso.jpeg" width="60"></td>
      <td>1</td>
      <td>nama_menu</td>
      <td>harga_menu</td>
      <td>
        <a href="">ubah</a> | <a href="">hapus</a>
      </td>
    </tr>
  </table>

</body>

</html>