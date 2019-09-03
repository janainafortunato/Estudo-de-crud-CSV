<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cadastrar</title>
</head>
<body>
	<h3>Cadastre um usuário e senha</h3>
	<form action="cadastrar.php" method="POST">
		Nome: <input type="text" name="new_user" placeholder="Nome de Usuário" required title="Nome de usuário">
		Senha: <input type="password" name="new_pw" placeholder="Senha" required title="Senha">
		<input type="submit">
	</form>
	<p><a href="login.php">Sair</a></p>
</body>
</html>