<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tarcisio Nomes</title>
	<style type="text/css">
		body{
			font-size: 25px;
		}
		#remover{
			font-size: 15px;
		}
		h4{
			font-family: verdana;
			color: blue;
		}
		table{
			font-style: italic;
		}
	</style>
</head>
<body>
	<h4>Lista de clientes</h4>
	<?php

	include 'init.php';

	if (!logado()) {
    redirect('login.php');

	} else {

		$nomes = file('nomes.txt');
		sort($nomes);
		$nome_string = implode("", $nomes);
		file_put_contents('nomes.txt', $nome_string);

	}
	?>
	<table>
		<?php for ($i=0;$i<sizeof($nomes);$i++) { ?>
			<tr>
				<th><?php echo $nomes[$i]; ?></th>
				<td id="remover"><a href="delete.php?id=<?php echo $i?>">Remover</a></td>
			</tr>
		<?php } ?>
	</table>
	<form action="add.php" method="POST">
		<input type="text" name="name" placeholder="Adicionar Nome">
		<input type="submit">
	<a href="logout.php">Sair</a>
</body>
</html>