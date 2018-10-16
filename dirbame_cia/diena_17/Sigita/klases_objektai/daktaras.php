<?php
// public class user{
//   public int $id;
//   public string $username;
//   public string $password;
//   public function getUser($id){
//     $qry = "SELECT * FROM users WHERE id = '$id'";

class daktaras{ //susikuriam kintamojo tipa
  public $id;
  public $name;
  public $lname;

  private $result;

public function getDoctor($id){
  $manoSQL = "SELECT * FROM doctors WHERE id = '$id'";
  $this->result = mysqli_query(getPrisijungimas(), $manoSQL);
  return $this->next();
}
public function getAll(){
  $manoSQL = "SELECT * FROM doctors";
  $this->result = mysqli_query(getPrisijungimas(), $manoSQL);
}
public function next(){
  if ($rezultataiArray = mysqli_fetch_assoc($this->result)){
    $this->id = $rezultataiArray['id'];
    $this->name = $rezultataiArray['name'];
    $this->lname = $rezultataiArray['lname'];
    return true;
  }
}
}

 ?>
 <!-- function getDoctor($nr){
 //   $manoSQL = "SELECT * FROM doctors WHERE id = $nr";
 //   $rezultatai = mysqli_query(getPrisijungimas(), $manoSQL); //mysqli_query ivykdo tai ka parasom sklaiusteliuose (turejo rast gydytoja)
   // var_dump($rezultatai); //atspausdina viska
   // echo "<br></br/>";
   //mysqli_fetch_row - is rastu duomenu paima viena ir pideda ji i masyva.
   // $rezultataiArray = mysqli_fetch_row($rezultatai); -->
