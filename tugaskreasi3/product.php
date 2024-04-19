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
  <title>Produc</title>
  <style type="text/css">
    body {
      font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
      margin: 0;
      padding: 0;
      min-height: 100vh;
      background: url(img/img2.jpg) no-repeat center center fixed;
      background-size: cover;
      background-position: center;
    }


    .sidebar {
      background-color: bisque;
      color: #333;
      width: 200px;
      height: 100%;
      position: fixed;
      top: 0;
      left: 0;
      list-style: none;
      padding: 0;
      margin: 0;
    }

    .sidebar h2 {
      position: relative;
      top: 90px;
      font-size: 30px;
      left: 15px;

    }

    .sidebar li {
      padding: 10px;
      line-height: 30px
    }

    .sidebar a {
      position: relative;
      top: 90px;
      left: 35px;
      color: #333;
      text-decoration: none;
      padding: 10px;
      /* border-bottom: 1px solid #444; */
      line-height: 30px
    }

    .container {
      max-width: 900px;
      backdrop-filter: blur(20px);
      border: 1px solid tomato;
      background-color: #efefef33;
      padding: 15px;
      overflow: auto;
      margin: auto;
      border-radius: 4px;
      margin-left: 300px;
      text-align: center;


    }




    .header {
      background-color: burlywood;
      color: #fff;
      padding: 20px;
      text-align: center;
      position: fixed;
      top: 0;
      left: 0;
      width: calc(100% - -100px);
      box-sizing: border-box;
    }

    .header h1 {
      margin: 0;
      font-size: 36px;
    }

    .header p {
      margin: 0;
      font-size: 18px;
    }

    .content {
      margin-left: 200px;
      margin-top: 70px;
      padding: 20px;
      /* text-align: left; */
    }

    .content h2 {
      margin-top: 10;
      margin-bottom: 20px;
      margin-left: 10;
      margin-right: 20;
    }

    .content h3 {
      text-align: right;
      margin-top: 100;
      margin-bottom: 20px;
      margin-left: 10;
      margin-right: 20;

    }

    .content table {
      width: 100%;
      font-size: 14px;
      color: #444;
      white-space: nowarp;
      background-color: #fff;
      border-collapse: collapse;


      /* border: 2px solid black; */
    }


    .content table th {
      background-color: burlywood;
      color: whitesmoke;
    }

    .content table th {
      padding: 15px;
    }

    .content table th,
    .content table td {
      border: 1px solid rgb(200, 199, 199);
      padding: 4px 7px;
    }

    .content td {
      padding: 10px;
      border: 1px solid #333;
    }

    .content tr>td>img {
      display: block;
      width: 60px;
      height: 60px;
      object-fit: cover;
      border-radius: 50%;
      border: 4px solid whitesmoke;
      box-shadow: 0 2px 6px #0003;
    }

    .content tr {
      background-color: whitesmoke;
      transition: 0.3s ease-in-out;
    }

    .content tr:nth-child(even) {
      background-color: antiquewhite;
    }

    .content tr:hover {
      filter: drop-shadow(0 2px 6px #0002);
    }



    .sidebar a {
      padding: 10px;
    }

    .sidebar li:last-child a {
      border-bottom: none;
    }

    .sidebar a:hover {
      background-color: #444;
    }

    .sidebar h3 {
      margin: 0;
      padding: 10px;
      font-size: 24px;
      font-weight: normal;
      border-bottom: 1px solid #444;
    }

    .sidebar ul {
      padding: 0;
      margin: 0;
    }

    .sidebar li {
      padding: 0;
      margin: 0;
    }

    .sidebar li:last-child {
      border-bottom: none;
    }

    .sidebar a:hover {
      text-decoration: none;
    }

    .sidebar a:focus {
      outline: none;
    }

    .back-link {
      background-color: burlywood;
      text-align: center;
      color: white;
      padding: 10px 20px;
      display: inline-block;
      margin: 4px 2px;
      border: none;
      border-radius: 4px;
      text-decoration: none;
      cursor: pointer;
      box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.3);
      margin-top: 10px;
      font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;


    }

    .back-link:hover {
      background-color: gray;

    }

    .back-link a {
      color: white;
      text-decoration: none;
      display: block;
      width: 100%;
      height: 100%;
    }
  </style>

</head>

<body>

  <div class="sidebar">
    <h2>Sidebar</h2>

    <ul>
      <li><a href="index.php">Beranda</a></li>
      <li><a href="tambah.php">Tambah Data Menu</a></li>
      <!-- <li><a href="detail.php">1</a></li> -->
      <li><a href="product.php">Produk</a></li>
      <li><a href="logout.php">Logout</a></li>
    </ul>
  </div>




  <div class="header">
    <h1>Coffe Shop Abah</h1>
    <p>Dengan Biji Kopi pilihan</p>
  </div>
  <div class="content">
    <h3>Ini Halaman Product</h3>
    <h3>
      <form action="" method="POST">
        <input type="text" name="keyword" size="40" placeholder="masukkan keyword pencarian..." autocomplete="off" autofocus class="keyword">
        <button type="submit" name="cari" class="tombol-cari">Cari!</button>
      </form>
    </h3>
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
              <div class="back-link">
                <a href="detail.php?id=<?= $m['id_menu']; ?>">lihat detail</a>

              </div>

            </td>
          </tr>
        <?php endforeach; ?>
      </table>
    </div>


  </div>
  </div>

  <script src="js/script.js"></script>
</body>

</html>