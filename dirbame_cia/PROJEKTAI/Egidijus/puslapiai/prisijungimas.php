<?php include 'header.php'; ?>

<main class="row">

<div class="col-md-12 aukstis-500 mb-md-5 registracija_d">
  <div class="registracija border border-primary rounded">

  <form class="" action="index.php" method="post">
    <div class="form-group col">
    <label for="" class="col-sm-5 col-form-label">Vartotojo vardas</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" placeholder="Vartotojo vardas">
    </div>
  </div>
  <div class="form-group col">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Slaptažodis</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3" placeholder="Slaptažodis">
    </div>
  </div>
  <div class="form-group col">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Prisijungti</button>
    </div>
    <div class="col-sm-10">Dar ne narys? <a href="registracija.php">Registruokis</a> ir tapk bendruomenės nariu!</div>
  </div>
  </form>




  </div>

</div>



</main>

<?php include 'footer.php'; ?>
