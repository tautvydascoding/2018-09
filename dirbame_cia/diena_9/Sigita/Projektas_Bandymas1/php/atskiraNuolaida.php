
<?php
include("prisijungimasDBnuolaidos.php");
$numeris = $_GET["x"];
$nuol = getNuolaidos($numeris);
?>
<!-- nuolaidos divo pradzia -->
<div style="background: grey; text-align:center; width: 700px;">
<!--  nuotraulka nuolaidos-->
<img style="max-width: 100%; max-height: 300px;" src="../galerija/<?php echo $nuol[1];?>" alt='nuolaida'/>
<!-- uzrasas tekstas nuolaidos kodas ir galiojimo laikas -->
<h3><strong><?php  echo $nuol[2]; ?></strong><h3></br>
<span style="background: #ccc; padding: 3px;"><?php  echo $nuol[3];?></span>
<p style="color: red;"><?php  echo $nuol[4];?></p>

                    <!--  forma rezervacijai-->
<form action="create-nuolaidosRezervacija.php" method="get">

                <input type="text" class="form-control" name="Vardas" value="" placeholder="Jūsų vardas" style="width: 40%; height:30px;"></br>

                <input type="text" class="form-control" name="Pavarde" value="" placeholder="Jūsų pavardė" style="width: 40%; height:30px;"></br>

                <input type="tel" class="form-control" name="TelNr" value="" placeholder="Telefono numeris" style="width: 40%; height:30px;"></br>

                    <!-- rezervacija su duomenu paemimu i Duomenu Baze -->
                <button class="btn-lg" type="submit" name="button" style="width: 30%; height:40px; border:1px solid black;">SIŲSTI</button>

</form>
                <!--  print ikonele is MDL-->
              <div id="tt2" class="icon material-icons">print</div>
              <div class="mdl-tooltip mdl-tooltip--large" for="tt2"> Print</div>
              <!-- mygtukas grizimui i pagrindi puslapi -->
<a href="index.php"> <button type="button" name="button" style="width: 30%; height:40px; border:1px solid black;"> Atgal i pagrindinį</button></a>
</div>
<!-- nuolaidos divo pradzia -->
<!-- Large Tooltip -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
