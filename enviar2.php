<?php 

	$nome = $_POST['nome'];
	$telefone = $_POST['telefone'];
	$email = $_POST['email'];

	$texto .=  "Nome: " . $nome . "\n\n ";
	$texto .= "Telefone: " . $telefone . "\n\n ";
	$texto .= "E-mail: " . $email . "\n\n ";

	$para = "luciano@capiba.com.br";

	$enviar = mail($para, $assunto, $texto);

	if ($enviar) {
		
		header("Location: http://http://www.sonorasolucoesauditivas.com.br/site/inicio");

	}else {
			
		header("Location: http://http://www.sonorasolucoesauditivas.com.br/site/entre-em-contato");

	}
	

?>