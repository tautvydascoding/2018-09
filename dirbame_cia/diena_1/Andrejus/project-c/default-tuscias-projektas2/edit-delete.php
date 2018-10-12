<?php
include_once("db/DB-prisijungimas.php")
 ?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title></title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="libs/bootstrap4/css/bootstrap.css">
  <!-- !!! mano CSS vissade zemiau -->
  <link rel="stylesheet" href="css/style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js">
  </script>
</head>
<body>

  <?php
include("session-file.php");
$numeris = $_GET['ID'];
$roadb = getrdBike($numeris);

  ?>
  <?php
  if(isset($_GET['id']))
  {
  $id=$_GET['id'];
  if(isset($_POST['submit']))
  {
  editrdBikes($_GET['ID'], $_GET['picture'], $_GET['bname'], $_GET['lildescrb'], $_GET['description'], $_GET['specs'], $_GET['price']);
  ?>

<form class="" action="edit-delete.php" method="get">
  <input type="number" name="id" value="<?php echo "$roadb[0]"; ?>" placeholder="ID"> <br>

  <input type="text" name="picture" value="<?php echo "$roadb[1]"; ?>" placeholder="Picture"> <br>

  <textarea rows="4" cols="30" type="text" name="bname" value="" placeholder="Bike name"><?php echo "$roadb[2]"; ?></textarea> <br>

  <textarea rows="4" cols="30" type="text" name="lildescrb" value="" placeholder="Little Description"><?php echo "$roadb[3]"; ?></textarea> <br>

  <textarea rows="4" cols="30" type="text" name="description" value="" placeholder="Description"><?php echo "$roadb[4]"; ?></textarea> <br>

  <textarea rows="4" cols="30" type="text" name="specs" value="" placeholder="Specs"><?php echo "$roadb[5]"; ?></textarea> <br>

  <input type="text" name="price" value="<?php echo "$roadb[6]"; ?>" placeholder="Price"> <br>



   <button type="submit" name="edit">EDIT</button>
</form>
<?php
}
}
 ?>


 <div class="container-fluid padding ">
   <div class="row padding ">
     <div class="col-md-4">
       <h1>Mountain bikes</h1>
     <?php
     include("db/DB-mtbike.php");
     for ($i=1; $i < 13; $i++) {
       $mountain = getmtBike($i);
      ?>
       <div class="card">

           <a href="edit-delete.php?ID=<?php echo $i;?>" target="_blank" class="btn btn-outline-secondary">
           <h4 class="card-title"><?php echo $mountain[0]." ".$mountain[2]; ?></h4>
           </a>
         </div>
       <?php
       }
        ?>
     </div>
     <div class="col-md-4">
       <h1>Road bikes</h1>
     <?php
     include("db/DB-rdbike.php");
     for ($y=1; $y < 13; $y++) {
       $roadb = getrdBike($y);
      ?>
       <div class="card">

           <a href="edit-delete.php?ID=<?php echo $y;?>" target="_blank" class="btn btn-outline-secondary">
           <h4 class="card-title"><?php echo $roadb[0]." ".$roadb[2]; ?></h4>
           </a>
         </div>
       <?php
       }
        ?>
     </div>
   </div>
 </div>




  <!-- <div class="card-body"> -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src=jquery/jquery.js> </script> <script type="text/javascript" src="main.js"> </script>
    <script type="text/javascript" src="js/mainjs.js"> </script>
  </body>
  </html>
