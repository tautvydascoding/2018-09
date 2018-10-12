<?php include 'header.php'; ?>

<main class="row">

<div class="col-md-12 aukstis-500 mb-md-5 registracija_d">
  <div class="registracija border border-primary rounded">
    <form class="" method="post" action="#">



          <div class="form-group col">
            <label for="name" class="col-sm-5 col-form-label">Jūsų Vardas</label>
            <div class="cols-sm-10">
              <div class="input-group">
                <input type="text" class="form-control" name="name"  placeholder="Įveskite savo vardą"/>
              </div>
            </div>
          </div>

          <div class="form-group col">
            <label for="email" class="col-sm-5 col-form-label">Jūsų El. Paštas</label>
            <div class="cols-sm-10">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                <input type="text" class="form-control" name="email" id="email"  placeholder="Įveskite savo el. paštą"/>
              </div>
            </div>
          </div>

          <div class="form-group col">
            <label for="username" class="col-sm-5 col-form-label">Vartotojo vardas</label>
            <div class="cols-sm-10">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                <input type="text" class="form-control" name="username" id="username"  placeholder="Jūsų vartotojo vardas"/>
              </div>
            </div>
          </div>

          <div class="form-group col">
            <label for="password" class="col-sm-5 col-form-label">Slaptažodis</label>
            <div class="cols-sm-10">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                <input type="password" class="form-control" name="password" id="password"  placeholder="Įveskite slaptažodį"/>
              </div>
            </div>
          </div>

          <div class="form-group col">
            <label for="confirm" class="col-sm-5 col-form-label">Patvirtinkite slaptažodį</label>
            <div class="cols-sm-10">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                <input type="password" class="form-control" name="confirm" id="confirm"  placeholder="Įveskite slaptažodį dar kartą"/>
              </div>
            </div>
          </div>

          <div class="form-group col ">
            <button type="button" class="btn btn-primary btn-block">Registruotis</button>
            <div class="col-sm-10">Jau esi narys?   <a href="prisijungimas.php">Prisijunk čia!</a></div>
          </div>

        </form>




  </div>

</div>



</main>

<?php include 'footer.php'; ?>
