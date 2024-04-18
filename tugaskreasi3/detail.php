<?php
session_start();
if (!isset($_SESSION['login'])) {
  header("location: login.php");
  exit;
}

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
      background-color: #333;
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
      margin-left: 200px;
      padding: 20px;
      max-height: 100px;
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
      margin-top: 80px;
      padding: 20px;
    }

    .content h2 {
      margin-top: 0;
      margin-bottom: 0;

    }

    .content p {
      font-size: 16px;
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

    .content[id="3"] img {
      max-width: 23%;
      max-height: auto;
    }

    .content[id="4"] img {
      max-width: 23%;
      max-height: auto;
      padding: 45px 25px 15px 26px;
    }

    .content[id="5"] img {
      max-width: 23%;
      max-height: auto;
      padding: 69px 25px 70px 26px;
      margin: -16px 21px -40px 2px;
      /* position: absolute;
            top: 0px;
            left: 40px;
            z-index: 1; */

    }

    .content:target {
      scroll-margin-top: 350px;
    }
  </style>
</head>

<body>
  <div class="sidebar">
    <h2>Sidebar</h2>
    <ul>
      <li><a href="index.php">Beranda</a></li>
      <li><a href="product.php">Produk</a></li>
      <li><a href="ubah.php?id=<?= $m['id_menu']; ?>">ubah</a></li>
      <li><a href="hapus.php?id=<?= $m['id_menu']; ?>" onclick="return comfirm('apakah anda yakin?');">hapus</a></li>
    </ul>
  </div>
  <div class="container">
    <div class="header">
      <h1>Coffe Shop Abah</h1>
      <p>Dengan Biji Kopi pilihan</p>
    </div>
    <div class="content">
      <h2>Ini Halaman Detail Produk</h2>
      <br>
      <ul>
        <img src="img/<?= $m['foto_menu']; ?>">
        <li>deskripsi_menu : <?= $m['deskripsi_menu']; ?></li>
        <li>id_menu :<?= $m['id_menu']; ?> </li>
        <li>nama_menu : <?= $m['nama_menu']; ?> </li>
        <li>harga_menu : <?= $m['harga_menu']; ?> </li>


      </ul>
    </div>
  </div>
</body>

</html>