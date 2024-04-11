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

  $id = htmlspecialchars($data['id_menu']);
  $nama = htmlspecialchars($data['nama_menu']);
  $harga = htmlspecialchars($data['harga_menu']);
  $foto = htmlspecialchars($data['foto_menu']);

  $query = "INSERT INTO
              menu (id_menu, nama_menu, harga_menu, foto_menu)
            VALUES 
            ('$id', '$nama', '$harga', '$foto');
            ";
  mysqli_query($conn, $query);
  echo mysqli_errno($conn);
  return mysqli_affected_rows($conn);
}
