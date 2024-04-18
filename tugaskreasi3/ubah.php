<?php
session_start();
if (!isset($_SESSION['login'])) {
  header("location: login.php");
  exit;
}
require 'functions.php';

// jika tidak ada id di URL
if (!isset($_GET['id'])) {
  header("Location: product.php");
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
    document.location.href ='product.php';
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
  <style type="text/css">
    body {
      font-family: Arial, sans-serif;
      background: url(img/img4.jpg) no-repeat center center fixed;
      background-size: cover;
      background-size: 100%;
      background-position: center;
      background-repeat: no-repeat;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .tambah-container {
      background-color: transparent;
      backdrop-filter: blur(20px);
      padding: 30px 40px;
      border: 2px solid rgba(225, 225, 225, .2);
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, .2);
      width: 420px;
      display: flex;
      flex-direction: column;
      color: #f4f4f4;
    }

    .tambah-container h3 {
      text-align: center;
    }

    .tambah-container form {
      margin-top: 20px;
      display: flex;
      flex-direction: column;
    }

    .tambah-container form input[type="text"],
    .tambah-container form input[type="password"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      box-sizing: border-box;

    }

    .tambah-container form input[type="submit"] {
      background-color: burlywood;
      color: white;
      border: none;
      padding: 10px 20px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 2px;
      cursor: pointer;
      border-radius: 4px;
      box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.3);
      margin-top: 10px;
      font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;

    }

    .tambah-container form input[type="submit"]:hover {
      background-color: gray;
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

    h3 {
      font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;

    }
  </style>

</head>

<body>
  <div class="tambah-container">
    <h3>Form Ubah Data Menu</h3>
    <form action="" method="POST" enctype="multipart/form-data">
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
        <input type="hidden" name="foto_menu_lama" value="<?= $m['foto_menu']; ?>">
        <li>
          <label>
            Foto :
            <input type="file" name="foto_menu" class="foto_menu" onchange="previewImage()">
          </label>
          <img src="img/<?= $m['foto_menu']; ?>" width="120" style="display: block;" class="img-preview">
        </li>

        <li>
          <label>
            Deskripsi :
            <input type="text" name="deskripsi_menu" value="<?= $m['deskripsi_menu']; ?>">
          </label>
        </li>

        <input type="submit" name="ubah" value="Ubah Data!">

        <div class="back-link">
          <a href="product.php">kembali</a>
        </div>

      </ul>
    </form>

  </div>
  <script src="js/script.js"></script>
</body>

</html>