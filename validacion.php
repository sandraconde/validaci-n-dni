<?php
 $documento = htmlentities($_POST['dni']);
 echo $documento;
 if ($documento==null) {

 	# code...
 	header('Location:alerta.php?tipo=error');
 } else {
 	header('Location:alerta.php?tipo=success');
 }

?>
