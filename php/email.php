<?php 
	if(isset($_POST['name'])){
		$nome     = $_POST['name'];
		$email    = $_POST['email'];
		$assunto  = $_POST['subject'];
		$mensagem = $_POST['message'];




		// emails para quem será enviado o formulário
		$emailenviar = $email;
		$destino = 'thiago_fenix@hotmail.com';
		$assunto = "Contato pelo Site";

		// É necessário indicar que o formato do e-mail é html
		$headers  = 'MIME-Version: 1.0' . "\r\n";
	    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	    $headers .= 'From: '.$nome.' <'.$email.'>';
		

	    $mensagem = "Olá Thiago!</br></br>O ".$nome." com o email:".$email." te mandou uma mensagem com o assunto <strong>".$assunto."</strong><br/><p>".$mensagem."</p>";

		$enviaremail = mail($destino, $assunto, $mensagem, $headers);

		if($enviaremail){
		?>
			<script type="text/javascript">
				alert('Mensagem enviada!');
				history.go(-1);
			</script>
		<?php
		} else {
		?>
			<script type="text/javascript">
				alert("Mensagem não enviada!");
				history.go(-1);
			</script>
		<?php
		}
	}
 ?>