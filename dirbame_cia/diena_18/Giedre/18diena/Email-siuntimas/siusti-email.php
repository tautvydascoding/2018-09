<?php

// print_r($_GET); //tesavimui


$klientoVardas =$_GET['name'];
$klientoEmail =$_GET['pastas'];
$klientoKlausimas =$_GET['klausimas'];



//Load Composer's autoloader
require ("libs/PHPMailer-master/PHPMailer-master/PHPMailerAutoload.php");

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
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
 
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'mailas@gmail.com';                 // SMTP username
    $mail->Password = 'slaptazodis';                 // SMTP username

    //Recipients
    $mail->setFrom('from@example.com', 'Prezidentas');
    $mail->addAddress('pikciurn@gmail.com', 'Puslapiu kurejai');     // Add a recipient
    //$mail->addAddress('ellen@example.com');               // Name is optional
    $mail->addReplyTo($klientoEmail, '$klientoVardas');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com'); //slaptai stebi. arba gauna visi, o galvoja, kad tik viena 

    
    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Kliento klausimas';
    $mail->Body    = "<strong> $klientoKlausimas </strong>";
    $mail->AltBody = $klientoKlausimas;

    $mail->send();
    echo '<h3>Pavyko issiusti</h3>';
} catch (Exception $e) {
    echo '<h3>Nepavyko issiusti. Mailer error:</h3>', $mail->ErrorInfo;
}

