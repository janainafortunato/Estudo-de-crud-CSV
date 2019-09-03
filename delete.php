<?php 

function delete(){
	
	$id = false;

	if(isset($_GET['id'])){

		$id = $_GET['id'];

	}else if(isset($argv[1])){

		$id = $argv[1];
	}

	if ($id !== false && file_exists('arquivo_csv')){

		$infor = file('arquivo_csv');
		unset($infor[$id]);
		$infor_string = implode(" ", $infor);
		file_put_contents('arquivo_csv', $infor_string);
		
		header("Location:  index.php");
	}
}

delete();

?>