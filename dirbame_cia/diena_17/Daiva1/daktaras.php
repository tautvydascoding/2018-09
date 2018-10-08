<?php
class daktaras{

  public $id;
  public $name;
  public $i1name;


private $rezult;
public function getDoctor($id){
  $qry = "SELECT * FROM doctors Where id = $id";
  $rezultatai = mysqli_query(getPrisijungimas(),   $qry );
if ($rezultataiArray = mysqli_fetch_)
}

}
public function getAll(){
$qry = "SELECT * FROM doctors";
$this->rezult = mysql_query($getPrisijungimas (),    $qry);
}
public function next (){

  

  }
}


 ?>
