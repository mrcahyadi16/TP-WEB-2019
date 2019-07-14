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


function newlist($data)
{
  global $konek;
  // ambil data dari setiap elemen dalam form
  // $id = htmlspecialchars($data["id"]);
  $list_name = htmlspecialchars($data["list_name"]);
  $note = htmlspecialchars($data["note"]);
  $jam = htmlspecialchars($data["jam"]);
  $tgl = htmlspecialchars($data["tgl"]);
  // $proses = htmlspecialchars($data["proses"]);

  // query insert data
  $query = "INSERT INTO list
    VALUES
    ('', '$list_name', '$note', '$jam', '$tgl', 'On Progress')";

  mysqli_query($konek, $query);
  return mysqli_affected_rows($konek);
}

function hapus($id)
{
  global $konek;
  mysqli_query($konek, "DELETE FROM list WHERE id = $id");
  return mysqli_affected_rows($konek);
}

function ubah($data)
{
  global $konek;
  // ambil data dari tiap elemen dalam form
  $id = ($data["id"]);
  $list_name = htmlspecialchars($data["list_name"]);
  $note = htmlspecialchars($data["note"]);
  // $jam = $data["jam"];
  $tgl = $data["tgl"];

  // query update data
  $query = "UPDATE list SET
                list_name = '$list_name',
                note = '$note',
               
                tgl = '$tgl'
            WHERE id = $id
            ";

  mysqli_query($konek, $query);

  return mysqli_affected_rows($konek);
}

function simpan($data)
{
  global $konek;
  $id = ($data["id"]);
  $proses = $data["proses"];

  // query update data
  $query = "UPDATE list SET
            proses = '$proses'
            WHERE id = '$id'
            ";

  mysqli_query($konek, $query);

  return mysqli_affected_rows($konek);
}
