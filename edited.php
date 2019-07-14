<?php
require 'koneksi.php';

// ambil date di URL
$id = $_GET["id"];
// query data list berdasarkan ID
$list = query("SELECT * FROM list WHERE id = $id")[0];

$konek = mysqli_connect("localhost", "root", "", "todo");

// cek apakah button sudah ditekan atau belom
if (isset($_POST["save"])) {
  // cek apakah data berhasil ditambahkan atau tidak
  if (ubah($_POST) > 0) {
    echo "<script>
             alert('Data Berhasil DIUBAH');
            // document.location.href = 'dash.php';
          </script>";
  } else {
    echo "<script>
             alert('Data GAGAL DIUBAH');
          </script>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="bootsrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="php.css">

  <!-- My Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Ubuntu+Condensed&display=swap" rel="stylesheet">

  <title>Update List</title>
</head>

<body>
  <!-- SideBAr -->
  <div class="row no-gutters">
    <div class="col-md-2 bg-dark pb-5">
      <nav class="nav flex-column">
        <i class="fa fa-check fa-2x text-white mt-2 p-3 text-center"><span> </span> To Do</i>
        <a class="nav-link active text-white" href="dash.php"> <i class="fa fa-home mr-2"></i> Dashboard</a>
        <a class="nav-link text-white" href="newlist.php"> <i class="fa fa-plus-circle mr-2"></i> New List</a>
        <a class="nav-link text-white" href="edit.php"><i class="fa fa-pencil mr-2"></i> Edit List</a>
        <a class="nav-link text-white" href="delete.php"><i class="fa fa-trash mr-2"></i> Delete</a>
        <a class="nav-link text-white" href="export.php"><i class="fa fa-file-excel-o mr-2"></i> Report Excel</a>
      </nav>
    </div>
    <!-- Main -->
    <div class="col-md-8 offset-md-1 p-5">
      <div class="container">
        <div class="container">
          <h1 class="text-center ubuntu"><b>Update List</b> </h2> <br>
            <form action="" method="post">
              <input type="hidden" name="id" value="<?= $list["id"]; ?>">
              <div class="form-group">
                <label for="list">List Name</label>
                <input type="text" class="form-control" id="list" name="list_name" required value="<?= $list["list_name"]; ?>">
              </div>
              <div class="form-group">
                <label for="text">Deskripsi</label>
                <input type="text" name="note" class="form-control" value="<?= $list["note"]; ?>">
              </div>
              <!-- <div class="form-group">
                <label for="jam">Time</label>
                <input type="time" class="form-control" id="jam" name="jam" required value="">
              </div> -->
              <div class="form-group">
                <label for="tgl">Date</label>
                <input type="date" class="form-control" id="tgl" name="tgl" required value="<?= $list["tgl"]; ?>">
              </div>
              <button type="submit" class="btn btn-success mr-2" name="save">Update</button>
            </form>
        </div>
      </div> <br> <br> <br> <br>
    </div>
    <!-- Akhir MAin -->
  </div>
  <!-- Akhir SideBAr -->
  <!-- Script Boostrap -->
  <script src="bootsrap/js/jquery-3.3.1.slim.min.js"></script>
  <script src="bootsrap/js/bootstrap.min.js"></script>
  <script src="bootsrap/js/popper.min.js"></script>
</body>

</html>