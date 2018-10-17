<?php

include 'header.php';
?>


<main class="row">
<div class="col-md-4">

<?php include 'pastas.php'; ?>

</div>
<div class="col-md-6">
  <img src="../imgs/email.png" alt="elektroninis laiškas">
</div>


</main>

<?php

include 'footer.php';



 ?>
 <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>

 <script>
 function sendContact() {
 	var valid;
 	valid = validateContact();
 	if(valid) {
 		jQuery.ajax({
 		url: "pasto_funkcijos.php",
 		data:'vardas='+$("#vardas").val()+'&pastas='+$("#pastas").val()+'&tema='+$("#tema").val()+'&klausimas='+$(klausimas).val(),
 		type: "GET",
 		success:function(data){
 		$("#mail-status").html(data);
 		},
 		error:function (){}
 		});
 	}
 }

 function validateContact() {
 	var valid = true;
 	$(".demoInputBox").css('background-color','');
 	$(".info").html('');

 	if(!$("#vardas").val()) {
 		$("#vardas-info").html("(Neužpildytas laukelis!)");
 		$("#vardas").css('background-color','#FFFFDF');
 		valid = false;
 	}
 	if(!$("#pastas").val()) {
 		$("#pastas-info").html("(Neužpildytas laukelis!)");
 		$("#pastas").css('background-color','#FFFFDF');
 		valid = false;
 	}
 	if(!$("#pastas").val().match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
 		$("#pastas-info").html("(Netinkamai užildytas laukelis!)");
 		$("#pastas").css('background-color','bg-warning');
 		valid = false;
 	}
 	if(!$("#klausimas").val()) {
 		$("#klausimas-info").html("(Neužpildytas laukelis!)");
 		$("#klausimas").css('background-color','#FFFFDF');
 		valid = false;
 	}

 	return valid;
 }
 </script>
