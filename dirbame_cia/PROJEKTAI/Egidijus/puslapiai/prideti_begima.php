<?php include 'header_online.php'; ?>
  <main>

    <div class="row">


      <div class="col-md-9 aukstis-500 registracija_d">
        <div class="registracija border border-primary rounded">
          <h3 class="text-center mt-md-3">Pridėti Bėgimą</h3>
        <form action="prisijungimas_ivedimui.php" method="post">
          <div class="form-group col">
            <label for="Begimas">Bėgimas:</label>
            <input type="text" name="Begimas" id="Begimas"  class="form-control">
          </div>
          <div class="form-group col">
            <label for="Distancija">Distancija:</label>
            <input type="text" name="Distancija" id="Distancija" class="form-control">
          </div>
          <div class="form-group col">
            <label for="Laikas">Laikas:</label>
            <input type="text" name="Laikas" id="Laikas" class="form-control">
          </div>
          <div class="form-group col">
            <input type="submit" class="btn btn-primary" value="Pridėti" class="form-control">
          </div>

  </form>
      </div>
    </div>

      <div class="col-md-3 aukstis-500">
      <?php include 'nario_meniu.php'; ?>
      </div>

      </div>




  </main>



<?php include 'footer.php'; ?>
