<?php
if(isset($_POST['data'])){

	$values = array();
	parse_str($_POST['data'], $values);
	extract($values);
	$tempTel = preg_replace("/[^0-9]/","",$telefono);

	if (!filter_var($email, FILTER_SANITIZE_EMAIL)) {
		echo '<div class="bg-warning"><h2>Proporcione un correo válido</h2></div>';
	}
	elseif (strlen($tempTel) < 7) {
		echo '<div class="bg-warning"><h2>Proporcione un numero válido</h2></div>';
	}
	else{
		require 'assets/libs/phpmailer/PHPMailerAutoload.php';
		$mail = new PHPMailer;
		$mail->isSMTP();                                      // Set mailer to use SMTP
		$mail->Host = 'dynasty.websitewelcome.com';   // Specify main and backup SMTP servers
		//$mail->SMTPDebug = 1;

		$mail->SMTPAuth = true;                               // Enable SMTP authentication
		$mail->Username = 'infoweb@vacacionescancunrivieramaya.com';                 // SMTP username
		$mail->Password = '*Inf0#3b*-L';                           // SMTP password
		$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
		$mail->Port = 465;

		$mail->From = "$email";
		$mail->FromName = $nombre;
		$mail->addAddress('infoweb@vacacionescancunrivieramaya.com');     // Add a recipient
		$mail->Subject = 'Vacacionescancunrivieramaya';

		$mail->isHTML(true);

		$mail->Body = utf8_decode("Teléfono: $telefono");
		$mail->Body .= utf8_decode("<pre>E-Mail: $email");
		$mail->Body .= utf8_decode("<pre>Ciudad: $ciudad");
		if($comentarios != "")
		$mail->Body .= utf8_decode("<pre>Comentarios: $comentarios");
		if(!$mail->send()) {
			echo '<div class="bg-warning"><h2>A ocurrido un error, inténtelo nuevamente.</h2></div>';
		} else {
			echo '<div class="bg-info" style="width:100%;background:#F9C600;font-size:1em;color:red;text-align:center;font-weight:bold;"><b><p>Información enviada, gracias.</p></b></div>';
		}
	}
}
?>
