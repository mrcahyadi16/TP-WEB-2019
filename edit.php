<?php
require 'koneksi.php';
$list = query("SELECT * FROM list");


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

   <title>Edit List</title>
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
      <div class="col-md-10">
         <div class="container">
            <div class="container">
               <h1 class="text-center p-4"><b>Edit List</b></h1>

               <table class="table table-hover">
                  <thead>
                     <tr>
                        <th scope="col" class="bg-light">No</th>
                        <th scope="col" class="bg-light">List Name</th>
                        <!-- <th scope="col" class="bg-light">Deskripsi</th> -->
                        <th scope="col" class="bg-light">Time</th>
                        <th scope="col" class="bg-light">Date</th>
                        <th scope="col" class="bg-light">Action</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php $no = 1 ?>
                     <?php foreach ($list as $row) : ?>
                        <tr>
                           <th scope="row"> <?= $no; ?> </th>
                           <td> <?php echo $row["list_name"]; ?> </td>
                           <!-- <td>Deskripsi</td> -->
                           <td> <?php $jamm = $row["jam"] ?>
                              <?php echo date('h:i:s A', strtotime($jamm)); ?>
                           </td>
                           <td>
                              <?php $tanggal = $row["tgl"]; ?>
                              <?php echo date("l, j F Y", strtotime($tanggal)); ?> </td>
                           </td>
                           <td> <a href="edited.php?id=<?php echo $row["id"] ?> " onclick="return confirm('Inign mengedit??');"><i class="fa fa-pencil btn btn-info"></i></a> </td>
                        </tr>
                        <?php $no++ ?>
                     <?php endforeach; ?>
                  </tbody>
               </table> <br>
            </div>
         </div>
         <br>
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