<?php

require 'functions.php';

if (isset($_POST["registrasi"])) {
  if (registrasi($_POST) > 0) {
    echo "<script>
    alert('user baru berhasil ditambahkan. silahkan login!');
    document.location.href='login.php';
    </script>";
    return false;
  } else {
    echo 'user gagal ditambahkan!';
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registrasi</title>
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

    .registasi-container {
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

    .registasi-container h2 {
      text-align: center;
    }

    .registasi-container form {
      margin-top: 20px;
      display: flex;
      flex-direction: column;
    }

    .registasi-container form input[type="text"],
    .registasi-container form input[type="password"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      box-sizing: border-box;

    }

    .registasi-container form input[type="submit"] {
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

    .registasi-container form input[type="submit"]:hover {
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
  </style>
</head>

<body>
  <div class="registasi-container">
    <h3>Form Registrasi</h3>

    <form action="" method="POST">
      <ul>
        <li>
          <label>
            Username :
            <input type="text" name="username" autofocus autocomplete="off" required>
          </label>
        </li>
        <li>
          <label>
            Password :
            <input type="password" name="password1" required>
          </label>
        </li>
        <li>
          <label>
            Konfirmasi Password :
            <input type="password" name="password2" required>
          </label>
        </li>

        <input type="submit" name="registrasi" value="Registrasi">
        <div class="back-link">
          <a href="logout.php" name="kembali">Kembali</a>
        </div>

      </ul>
    </form>
</body>

</html>