<?php

function koneksi()
{
  return  $conn = mysqli_connect('localhost', 'root', '', 'cafeshop');
}

function query($query)
{
  $conn  = koneksi();

  $result =  mysqli_query($conn, $query);

  // jika hasilnya 1 data
  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return  $rows;
}

function tambah($data)
{
  $conn = koneksi();


  $nama = htmlspecialchars($data['nama_menu']);
  $harga = htmlspecialchars($data['harga_menu']);
  $foto = htmlspecialchars($data['foto_menu']);
  $deskripsi = htmlspecialchars($data['deskripsi_menu']);

  $query = "INSERT INTO
              menu 
            VALUES 
            ('null', '$nama', '$harga', '$foto', '$deskripsi')
            ";
  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function hapus($id)
{
  $conn = koneksi();
  mysqli_query($conn, "DELETE FROM menu  WHERE id_menu = $id") or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function ubah($data)
{
  $conn = koneksi();

  $id = ($data['id']);
  $nama = htmlspecialchars($data['nama_menu'] ?? '');
  $harga = htmlspecialchars($data['harga_menu'] ?? '');
  $foto = htmlspecialchars($data['foto_menu'] ?? '');
  $deskripsi = htmlspecialchars($data['deskripsi_menu'] ?? '');

  $query = "UPDATE menu SET
  nama_menu = '$nama',
  harga_menu = '$harga',
  foto_menu = '$foto',
  deskripsi_menu = '$deskripsi'
  WHERE id_menu = $id";
  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function cari($keyword)
{
  $conn = koneksi();
  $query = "SELECT * FROM menu 
              WHERE nama_menu LIKE '%$keyword%'";
  $result = mysqli_query($conn, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return  $rows;
}

function login($data)
{
  $conn = koneksi();
  $username = htmlspecialchars($data["username"]);
  $password = htmlspecialchars($data["password"]);

  //cek dulu username
  if ($user = query("SELECT * FROM user WHERE username = '$username'")) {
    //cek password
    if (password_verify($password, $user["password"])) {
      //set session
      $_SESSION['login'] = true;
      header("Location: index.php");
      exit;
    }
  }
  return [
    'error' => true,
    'pesan' =>  'Username atau Password salah!'
  ];
}


function registrasi($data)
{
  $conn = koneksi();

  $username = htmlspecialchars(strtolower($data['username']));
  $password1 = mysqli_real_escape_string($conn, $data['password1']);
  $password2 = mysqli_real_escape_string($conn, $data['password2']);

  //jika username / password kosong
  if (empty($username) || empty($password2) || empty($password2)) {
    echo "<script>
          alert('username/password tidak boleh kosong!');
          document.location.href='registrasi.php';
          </script>";
    return false;
  }

  //jika username sudah ada
  if (query("SELECT * FROM user WHERE username =  '$username' ")) {

    echo "<script>
          alert('username sudah terdaftar!');
          document.location.href='registrasi.php';
          </script>";
    return false;
  }

  //jika konfirmasi password tidak sesuai
  if ($password1 !== $password2) {
    echo "<script>
    alert('konfirmasi passord tidak sesuai!');
    document.location.href='registrasi.php';
    </script>";
    return false;
  }

  //jika passord <5 digit
  if (strlen($password1) < 5) {
    echo "<script>
    alert('password terlalu pendek !');
    document.location.href='registrasi.php';
    </script>";
    return false;
  }

  //jika username & passowrd sudah sesuai
  //enkripsi password
  $password_baru = password_hash($password1, PASSWORD_DEFAULT);
  //insert ke tabel  user
  $query = "INSERT INTO user 
              VALUES
            (null, '$username', '$password_baru')
            ";
  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}
