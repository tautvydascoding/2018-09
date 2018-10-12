<?php
include_once 'db_functions.php';

class daktaras {
  public $id;
  public $name;
  public $lname;

private  $result;

  public function getDoctor($id){
    $qry = "SELECT * FROM doctors WHERE id = $id";

    $result = mysqli_query(getPrisijungimas(), $qry);


if ($resultataiArray = mysqli_fetch_assoc($result)){
    $this->id = $resultataiArray["id"];
    $this->name = $resultataiArray["name"];
    $this->lname = $resultataiArray["lname"];
    return true;
}

}
public function getAll(){
  $qry ="SELECT * FROM doctors";
  $this->result = mysqli_query(getPrisijungimas(), $qry);

  }
public function next(){
  if ($resultataiArray = mysqli_fetch_assoc($this->result)){
    $this->id = $resultataiArray["id"];
    $this->name = $resultataiArray["name"];
    $this->lname = $resultataiArray["lname"];
    return true;
  }



}


}







 ?>
