<?php
// print_r(  $_GET );  // testuojam

$klietoVardas = $_GET['vardas'];
$klientoEmail = $_GET['pastas'];
$klientoKlausimas = $_GET['klausimas'];

//Load Composer's autoloader
require '../PHPMailer-master/PHPMailerAutoload.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    // papildomi PhpMailer nustatymia, jeigu neveikia su standartiniais

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
    $mail->Username = 'martyna.sokolnikova@gmail.com';                 // SMTP username
    $mail->Password = 'Martyna999';                 // SMTP slaptazodis
  // -------iki cia -----------------


    //Recipients
    $mail->setFrom('martyna.sokolnikova@gmail.com', 'Klientas');
    $mail->addAddress('sigita.sokolnikova@gmail.com', 'Puslapiu kurejai');     // Add a recipient
    // $mail->addAddress('ellen@example.com');               // Name is optional
    $mail->addReplyTo( $klientoEmail, $klietoVardas);


    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Kliento klausimas';
    $mail->Body    = "<strong> $klientoKlausimas </strong>";
    $mail->AltBody = $klientoKlausimas;

    $mail->send();
    echo '<h3> Ačiū už laišką, susisieksime ;) </h3>';
    
<meta http-equiv="refresh" content="3; url=kontaktai.php">
  // function redirect($url, $statusCode = 303)
  //   {
  //      header('Location: ' . $url, true, $statusCode);
  //      die();
  //   }

} catch (Exception $e) {
    echo 'Atleiskite napavyko išsiųsti. Bnadykite dar ... Mailer Error: ', $mail->ErrorInfo;
}
?>
