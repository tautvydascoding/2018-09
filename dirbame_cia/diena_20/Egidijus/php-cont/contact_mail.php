<?php
$toEmail = "pastaskurionenaudoju@gmail.com";
$mailHeaders = "From: " . $_POST["userName"] . "<". $_POST["userEmail"] .">\r\n";
if(mail($toEmail, $_POST["subject"], $_POST["content"], $mailHeaders)) {
print "<p class='success'>Žinutė sėkmingai išsiųsta!.</p>";
} else {
print "<p class='Error'>Žinutės išsiųsti nepavyko.</p>";
}
?>
