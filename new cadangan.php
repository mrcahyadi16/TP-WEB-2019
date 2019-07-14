<?php

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
   <link href="https://fonts.googleapis.com/css?family=Righteous&display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Ubuntu+Condensed&display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">

   <title>New List</title>
</head>

<body>
   <!-- SideBAr -->
   <div class="row no-gutters">
      <div class="col-md-2 bg-dark pb-5">
         <nav class="nav flex-column">
            <i class="fa fa-check fa-2x text-white mt-2 p-3 text-center"><span> </span> To Do</i>
            <a class="nav-link active  text-white" href="dash.php"> <i class="fa fa-home mr-2"></i> Dashboard</a>
            <a class="nav-link text-white" href="newlist.php"> <i class="fa fa-plus-circle mr-2"></i> New List</a>
            <a class="nav-link text-white" href="edit.php"><i class="fa fa-pencil mr-2"></i> Edit List</a>
            <a class="nav-link text-white" href="delete.php"><i class="fa fa-trash mr-2"></i> Delete</a>
            <a class="nav-link text-white" href="#"><i class="fa fa-print mr-2"></i> Privew & Print</a>
         </nav>
      </div>
      <!-- Main -->
      <section>
         <div class="container p-5">
            <div class="row tinggi">
               <div class="col-md-10">
                  <h2 class="text-center ubuntu"><b>Add New List</b> </h2> <br>
                  <form action="" method="pos">
                     <div class="form-group">
                        <label for="list">List Name</label>
                        <input type="text" class="form-control" id="list" placeholder="List Name" size="53" required>
                     </div>
                     <div class="form-group">
                        <label for="text">Deskripsi</label>
                        <textarea name="text" id="text" cols="10" rows="5" placeholder="Deskripsi" class="form-control" required></textarea>
                     </div>
                     <div class="form-group">
                        <label for="date">Date</label>
                        <input type="date" class="form-control" id="date" required>
                     </div>
                     <button type="submit" class="btn btn-primary mr-2">Save</button>
                     <button type="reset" class="btn btn-danger">Reset</button>
                  </form>
                  <br> <br> <br> <br> <br>
               </div>

            </div>
         </div>
      </section>

      <!-- Akhir MAin -->

   </div>
   <!-- Akhir SideBAr -->
   <!-- Script Boostrap -->
   <script src="bootsrap/js/jquery-3.3.1.slim.min.js"></script>
   <script src="bootsrap/js/bootstrap.min.js"></script>
   <script src="bootsrap/js/popper.min.js"></script>
</body>

</html>