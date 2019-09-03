<?php

include 'init.php';

function delete() {
	
	$id = false;

	if (isset($_GET['id'])) {

		$id = $_GET['id'];

	} else if (isset($argv[1])) {
		
		$id = $argv[1];
	}

	if ($id !== false && file_exists('nomes.txt')) {

		$nomes = file('nomes.txt');

		unset($nomes[$id]);

		$nome_string = implode("", $nomes);

		file_put_contents('nomes.txt', $nome_string);

		redirect('tarcisio.php');
	}
}

delete();

?>