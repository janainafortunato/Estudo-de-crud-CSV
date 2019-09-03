<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sistema de Livros</title>
</head>
<body>
	<div>
		<div>
			<form action="add_form.php" method="POST">
				<label>Nome do livro:</label>
				<input type="text" name="name_livro" placeholder="Nome do livro">
				<label>Autor:</label>
				<input type="text" name="autor" placeholder="Autor do livro">
				<label>Editora:</label>
				<input type="text" name="editora" placeholder="Nome da editora">
				<label>Ano:</label>
				<input type="text" name="ano" placeholder="Ano de publicação">
				<label>Codigo</label>
				<input type="text" name="codigo" placeholder="Codigo de registro ">
				<input type="submit" value="Enviar">
			</form>
		</div>
	</div>

</body>
</html>