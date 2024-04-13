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

  $query = "INSERT INTO
              menu (nama_menu, harga_menu, foto_menu)
            VALUES 
            ('$nama', '$harga', '$foto');
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

  $query = "UPDATE menu SET
              nama_menu = '$nama',
              harga_menu = '$harga',
              foto_menu = '$foto'
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
