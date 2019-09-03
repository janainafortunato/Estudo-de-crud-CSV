<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<style type="text/css">
		h1{
			font-size: 25px;
			font-family: verdana;
			color: blue;
		}
	</style>
</head>
<body>
	<h1>LISTA DE CLIENTES</h1>
	<h3>Faça login para ver e alterar</h3>
	<form action="auth.php" method="POST">
		<input type="text" name="login" placeholder="Login" required title="Login">
		<input type="password" name="senha"	placeholder="Senha" required title="Senha">
		<input type="submit">
	</form>
	<p><a href="cadastro.php">Cadastre-se</a></p>
</body>
</html>