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
require_once("functions.php");

class daktaras {
    public $id;
    public $name;
    public $lname;

    private $rez;

   // return false;
              
           //========================================================

           public function getDoctor($id) {
            $qry = "SELECT * FROM doctors WHERE id = $id";
            $this->rez = mysqli_query(getPrisijungimas(), $qry);
            return $this->next();
            }
        public function getAll() {
            $qry = "SELECT * FROM doctors";
            $this->rez = mysqli_query(getPrisijungimas(), $qry);
        }
        
        public function next() {
            if ($resultataiArray = mysqli_fetch_assoc($this->rez)) {
                $this->id = $resultataiArray["id"];
                $this->name = $resultataiArray["name"];
                $this->lname = $resultataiArray["lname"];
                return true;
                }
        //=========================================================
            }
       }
//isveda penkta daktara:
$daktaras = new daktaras();
if ($daktaras->getDoctor(5))
{
    echo $daktaras->name;
    echo "<br>";
    echo $daktaras->lname;
}

    
   
    $daktaras->getAll();

    while ($daktaras->next())
    {
        echo $daktaras->name;
        echo "<br>";
        echo $daktaras->lname;
        echo "<br>";

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
