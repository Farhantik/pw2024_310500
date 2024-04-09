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
