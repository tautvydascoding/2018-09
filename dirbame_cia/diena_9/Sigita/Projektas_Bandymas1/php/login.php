<?php
   include("configur.php");
   session_start();

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form

      $myusername = mysqli_real_escape_string($prisijungimas,$_POST['username']);
      $mypassword = mysqli_real_escape_string($prisijungimas,$_POST['password']);

      $sql = "SELECT ID FROM nariai WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($prisijungimas,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];

      $count = mysqli_num_rows($result);

      

      if($count == 1) {
         session_register("myusername");
         $_SESSION['login_user'] = $myusername;

         header("location: index.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>
<?php include("login.php") ?>


<!-- if(isset($_POST['user'])){
$user = $_POST['user'];
$pass = md5($_POST['pass']);
//jungimasis prie serverio naudojant mysql_connect
$con = mysqli_connect("localhost", "root", "");
if(!$con){
  die('Negalima prisijungti: '.mysqli_error());
}
//pasirenkama db//
mysqli_select_db("Igl", $con);
//patikrinam ar vartotojas egzistuoja
if(mysqli_num_rows(mysqli_query("SELECT * FROM nariai WHERE username = '$user' AND pasword = '$pass'"))){
$rezult = mysqli_query("SELECT * FROM nariai WHERE username = '$user' AND pasword = '$pass'");
while($row = mysqli_fetch_array($rezult)){

echo "Prisijungete sekmingai" . $row['username'];
}
// else {
// echo <b>"Neteisingas vartotojo vardas arba slaptažodis"</b> <br /><br />;
// }
mysqli_close($con);
}} -->
