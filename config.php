<?php

$konek = mysqli_connect("localhost", "root", "", "todo");


function query($query)
{
  global $konek;
  $result = mysqli_query($konek, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}


function saran($data)
{
  global $konek;
  // ambil data dari setiap elemen dalam form
  $nama = htmlspecialchars($data["nama"]);
  $email = htmlspecialchars($data["email"]);
  $alamat = htmlspecialchars($data["alamat"]);
  $hp = htmlspecialchars($data["hp"]);
  $saran = htmlspecialchars($data["saran"]);
  // $proses = htmlspecialchars($data["proses"]);

  // query insert data
  $query = "INSERT INTO saran
    VALUES
    ('', '$nama', '$email', '$alamat', '$hp', '$saran')";

  mysqli_query($konek, $query);
  return mysqli_affected_rows($konek);
}
