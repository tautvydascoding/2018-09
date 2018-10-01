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
    </head>
    <body>

<?php
    $meniu = array("home", "about", "gallery", "contact", "blog");
?>

<nav>
    <li> <?php echo $meniu[0]; ?> </li>
    <li> <?php echo $meniu[1]; ?> </li>
    <li> <?php echo $meniu[2]; ?> </li>
    <li> <?php echo $meniu[3]; ?> </li>
    <li> <?php echo $meniu[4]; ?> </li>
</nav>

<?php
    $nuotraukos = array("logo1.jpg", "logo1.jpg", "logo1.jpg", "logo1.jpg", "logo1.jpg", "logo1.jpg");
    for ($i = 0; $i < 3; $i++) {
?>

<img src='./img/<?php echo $nuotraukos[$i]; ?>' alt=''/> 

<?php
    }
?>

<?php echo "<br>" ?>

<?php
for ($i = 3; $i < 6; $i++) {
?>

<img src='./img/<?php echo $nuotraukos[$i]; ?>' alt=''/> 
    
<?php
}
?>



        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>



        <script type="text/javascript"  src="main.js">      </script>

    </body>
</html>