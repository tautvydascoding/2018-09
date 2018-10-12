<?php

// print_r($_GET);testojam

$klientoVardas = $_GET['vardas'];
$klientoEmail = $_GET['pastas'];
$klientoKlaus = $_GET['klausimas'];


// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function


//Load Composer's autoloader
require 'libs/PHPMailer-master/PHPMailerAutoload.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
  $mail->SMTPOptions = array(
      'ssl' => array(
      'verify_peer' => false,
      'verify_peer_name' => false,
      'allow_self_signed' => true
      )
  );
  $mail->Host = 'tls://smtp.gmail.com:587';
  $mail->SMTPSecure = 'ssl';                              // Enable TLS encryption, `ssl` also accepted
  $mail->Port = 465;                                      // TCP port to connect to

  //Server settings
  $mail->SMTPDebug = 0;                                 // Enable verbose debug output
  $mail->isSMTP();                                      // Set mailer to use SMTP

  $mail->SMTPAuth = true;                               // Enable SMTP authentication
  $mail->Username = 'petrelis.petras321@gmail.com';
  $mail->Password = 'someonespecial';


    //Recipients
    $mail->setFrom('petrelis.petras321@gmail.com', 'Mailer');
    $mail->addAddress('petrelis.petras321@gmail.com', 'Puslapiu kurejai');     // Add a recipient
    // $mail->addAddress('ellen@example.com');               // Name is optional
    $mail->addReplyTo($klientoEmail, $klientoVardas);
    // $mail->addCC('cc@example.com'); //papildomai kam dar nori rasyt
    // $mail->addBCC('bcc@example.com'); //slaptai stebi ir natys kad kiti stebi

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Kliento Klausimas';
    $mail->Body    = "<strong>$klientoKlaus</strong>";
    $mail->AltBody = "$klientoKlaus";


    $mail->send();
    header( "refresh:5;url=contacts.php" );
    echo 'You\'re message has been sent and we will contact you as soon as posible. <br /> You\'ll be redirected back in about 5 secs. If not, click <a href="contacts.php">here</a>.';
    // header('Location: contacts.php');
    // echo '<h3>Pavyko issiusti</h3>';
} catch (Exception $e) {
    echo 'Atleiskite Jusu zinutes nepavyko issiusti. Mailer Error: ', $mail->ErrorInfo;
}
include_once("db/DB-prisijungimas.php");
// include("db/DB-clientmsg.php");
function createClientmesgIlgesne($name, $email, $message) {
  //saugumas: uzkuodoja spec simbolius "" '' \n \t <>;
  $name = mysqli_real_escape_string(getPrisijungimas(), $name);
  $email = mysqli_real_escape_string(getPrisijungimas(), $email);
  $message = mysqli_real_escape_string(getPrisijungimas(), $message);
  $manoSQL = "INSERT INTO `clientmesg` VALUES(NULL, '$name', '$email', '$message')";
  $arPavyko = mysqli_query(getPrisijungimas(), $manoSQL);
  if ($arPavyko == false && $arRodytiZinutes == true) { //(!$arPavyko && $arRodytiZinutes) jei parasai if su sauktuku tikrini atbuline reiksme.
    echo "ERROR: nepavyko sukurti gydytojo!!!! <br />".mysqli_error(getPrisijungimas()); // isvardina net kur klaida yra
  }
}
createClientmesgIlgesne($_GET['vardas'], $_GET['pastas'], $_GET['klausimas']);
 ?>
