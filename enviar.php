 <?php
	$name = $_POST['name'];
	$mail = $_POST['mail'];
	$message = $_POST['message'];
	
	$header = 'From: ' . $mail . " \r\n";
	$header .= 'X-Mailer: PHP/' . phpversion() . "\r\n";
	$header .= "Mime-Version: 1.0  \r\n";
	$header .= "content-Type: text/plain";
	
	$message ="Este mensaje fue enviado por: " . $name . " \r\n";
	$message .= "Su e-mail o telefono es: " . $mail . " \r\n";
	$message .= "Mensaje: " . $_POST['message'] . " \r\n"; 
	$message .= "Enviado el: " . date('d/m/Y', time());
	
	$para = 'antoniomaracaserv@gmail.com';
	$asunto = 'Trabajo';
	
	mail($para, $asunto, utf8_decode($message), $header);
	echo "<script>alert('Mensaje enviado, gracias')</script>";
	echo "<script> setTimeout(\"location.href='index.html'\",1000)</script>"
	
	//header("Location.href:'index.html');
?>