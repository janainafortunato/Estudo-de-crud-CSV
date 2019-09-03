<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cadastro</title>
</head>
<body>
	<h3>Cadastre um usuário e senha</h3>
	<?php

	include 'init.php';

	$nw = $_POST['new_user'];
	$npw = $_POST['new_pw'];
	$new_user_pw = $nw."-".$npw;
				    
	$users_pws = file('users-pws.txt');

	$users_pws[] = $new_user_pw . "\n";

	$users_string = implode('',  $users_pws);

	file_put_contents('users-pws.txt', $users_string);

	echo "Usuário cadastrado com sucesso!";

	?>
<p><a href="login.php">Acessar</a></p>
</body>
</html>