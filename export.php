<?php
require 'koneksi.php';
$list = query("SELECT * FROM list order by tgl asc");

$konek = mysqli_connect("localhost", "root", "", "todo");

// cek apakah button sudah ditekan atau belom
if (isset($_POST["kirim"])) {
  // cek apakah data berhasil ditambahkan atau tidak
  if (simpan($_POST) > 0) {
    echo "<script>
           alert('Data BERHASIL ditambahkan !!!');
            document.location.href = 'dash.php';
          </script>";
  } else {
    echo "<script>
             alert('Data GAGAL ditambahkan');
          </script>";
  }
}


header("content-type:application/vnd-ms-excel");
// membuat file excel
header("content-disposition:attachment;filename=Todo-List.xls");



?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="bootsrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css"> -->
  <!-- <link rel="stylesheet" href="php.css"> -->

  <!-- My Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Ubuntu+Condensed&display=swap" rel="stylesheet">

  <title>Export File</title>
</head>

<body>
  <!-- SideBAr -->
  <!-- <div class="row no-gutters">
    <div class="col-md-2 bg-dark pb-5">
      <nav class="nav flex-column">
        <i class="fa fa-check fa-2x text-white mt-2 p-3 text-center"><span> </span> To Do</i>
        <a class="nav-link active text-white" href="dash.php"> <i class="fa fa-home mr-2"></i> Dashboard</a>
        <a class="nav-link text-white" href="newlist.php"> <i class="fa fa-plus-circle mr-2"></i> New List</a>
        <a class="nav-link text-white" href="edit.php"><i class="fa fa-pencil mr-2"></i> Edit List</a>
        <a class="nav-link text-white" href="delete.php"><i class="fa fa-trash mr-2"></i> Delete</a>
        <a class="nav-link text-white" href="export.php"><i class="fa fa-print mr-2"></i> Export</a>
      </nav>
    </div> -->
  <!-- Main -->
  <div class="col-md-10">
    <div class="container">
      <h1 class="text-center p-4"><b>Schedule List</b></h1>
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col" class="bg-primary">No</th>
            <th scope="col" class="bg-primary">List Name</th>
            <th scope="col" class="bg-primary">Deskripsi</th>
            <th scope="col" class="bg-primary">Time</th>
            <th scope="col" class="bg-primary">Date</th>
            <th scope="col" class="bg-primary">Status</th>
          </tr>
        </thead>
        <tbody>
          <?php $no = 1 ?>
          <?php foreach ($list as $row) : ?>
            <tr>
              <th scope="row"> <?= $no; ?> </th>
              <td> <?php echo $row["list_name"]; ?> </td>
              <td><?php echo $row["note"]; ?></td>
              <td> <?php $jamm = $row["jam"] ?>
                <?php echo date('h:i:s A', strtotime($jamm)); ?></td>
              <td>
                <?php $tanggal = $row["tgl"]; ?>
                <?php echo date("l, j F Y", strtotime($tanggal)); ?> </td>
              <td>
              <td><?php echo $row["proses"]; ?></td>
              </td>
            </tr>
            <?php $no++ ?>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>

  <!-- Akhir MAin -->

  </div>
  <!-- Akhir SideBAr -->
  <!-- Script Boostrap -->
  <!-- <script src="bootsrap/js/jquery-3.3.1.slim.min.js"></script>
  <script src="bootsrap/js/bootstrap.min.js"></script>
  <script src="bootsrap/js/popper.min.js"></script>
  <script src="dynamic.js"></script> -->
</body>

</html>