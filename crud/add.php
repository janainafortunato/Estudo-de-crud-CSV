<?php

include 'init.php';

if (!logado()) {
    redirect('login.php');
}
else{

	function add() {
		$name = false;

		if (isset($_POST['name'])) {

			$name = $_POST['name'];

		} else if (isset($argv[1])) {

			$name = $argv[1];
		}

		if ($name !== false) {
			    
			$nomes = file('nomes.txt');

			$nomes[] = $name . "\n";

			$nome_string = implode('',  $nomes);

			file_put_contents('nomes.txt', $nome_string);

			redirect('tarcisio.php');
		}

	}

add();

}