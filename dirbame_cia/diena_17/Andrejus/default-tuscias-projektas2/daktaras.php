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

        <h1> Ziureti i console (inspect element)  </h1>

        <?php
        include_once("DB-functions.php");

        class daktaras {
          public  $id;
          public  $name;
          public  $lname;

          private $result;

          public function getDoctor($id) {
            $qry = "SELECT * FROM doctors WHERE id = $id";

            $resultai = mysqli_query(getPrisijungimas(), $qry);

            if ($resultaiArray = mysqli_fetch_assoc($resultai)) {
              $this -> id = $resultaiArray["id"];
              $this -> name = $resultaiArray["name"];
              $this -> lname = $resultaiArray["lname"];
              return true;
            }
            return false;
          }

          public function getAll() { //getAll_Doctors() ir t.t
            $qry =  "SELECT * FROM doctors";
            $this->result = mysqli_query(getPrisijungimas(), $qry);
          }

          public function next() {
            if ($resultaiArray = mysqli_fetch_assoc($this->result)) {
              $this -> id = $resultaiArray["id"];
              $this -> name = $resultaiArray["name"];
              $this -> lname = $resultaiArray["lname"];
              return true;
          }

        }
      } // functions yra classeje daktaras

        // $daktaras = new daktaras();
        // if ($daktaras->getDoctor(6)) {
        //   echo $daktaras->name;
        //   echo "<br />";
        //   echo $daktaras->lname;
        //   echo "<br />";
        // }
        // // NOTE: iskveciam tk viena dakatara su atotonkamu id

        $daktaras = new daktaras();
        $daktaras->getAll ();
        ?> <table> <?php
        while ($daktaras->next()) {
          ?> <tr>  <td><?php
          echo $daktaras->name;
        ?></td> <td> <?php
          echo $daktaras->lname;
          ?></td>  </tr><?php
        }
        ?>  </table>  <?php
        // // NOTE:  getAll iskvecia visus daktarus
         ?>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>




        <script type="text/javascript"  src="main.js">      </script>

    </body>
</html>
