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
  <style type="text/css">
    body {
      font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
      margin: 0;
      padding: 0;
      min-height: 100vh;
      background: url(img/img5.jpg) no-repeat center center fixed;
      background-size: cover;
      background-position: center;
    }

    .footer {
      background-color: burlywood;
      color: #fff;
      padding: 0px;
      text-align: center;
      position: fixed;
      bottom: 0;
      left: 0;
      width: calc(100% - -100px);
      box-sizing: border-box;
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
      margin-left: 300px;
      padding: 30px;
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
      text-align: left;
    }

    .content h2 {
      margin-top: 10;
      margin-bottom: 20px;
      margin-left: 10;
      margin-right: 20;
    }

    .content table {
      width: 100%;
      border-collapse: collapse;
      background: #fff;

      /* border: 2px solid black; */
    }

    .content th,
    .content td {
      padding: 10px;
      border: 1px solid #333;
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

    .ndas {
      background-color: wheat;
      text-align: left;
      /* border-color: black; */
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
    <h2>Ini Halaman Beranda</h2>

    <p>Coffe Shop Abah adalah sebuah kedai kopi yang menawarkan pengalaman unik dengan suasana yang hangat dan ramah. Terletak di pusat kota, kedai ini menonjolkan dekorasi yang nyaman dengan dinding kayu dan lampu hias yang lembut. Menu mereka mencakup beragam kopi dari biji-biji berkualitas tinggi, serta pilihan teh dan makanan ringan yang lezat. Para pengunjung sering kali datang untuk menikmati kopi spesialitas mereka sambil menikmati suasana yang menyenangkan dan santai.</p>

    <br>
    <div class="container">



      <?php $i = 1;
      foreach ($menu as $m) : ?>
      <?php endforeach; ?>
    </div>


  </div>
  </div>


</body>

</html>