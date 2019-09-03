<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sistema de Livros</title>
</head>
<body>

	<?php

	$infor = file('arquivo_csv');
	sort($infor);
	$infor_string = implode(" ", $infor);
	file_put_contents('arquivo_csv', $infor_string);

	?>

	<div>
		<div>
			<table>
				<?php for($i=0; $i<sizeof($infor); $i++){ ?>
					<thead>
						<tr>
							<th><?php echo $infor[$i]; ?></th>
							<td id="remover"><a href="delete.php?id=<?php echo $i?>" >Remover</a></td>
						</tr>
					</thead>
				<?php } ?>
			</table>	
		</div>
	</div>

</body>
</html>