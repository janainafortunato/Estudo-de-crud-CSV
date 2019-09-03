<?php

$name_livro = $_POST['name_livro'];
$autor = $_POST['autor'];
$editora = $_POST['editora'];
$ano = $_POST['ano'];
$codigo = $_POST['codigo'];
$conteudo = $name_livro . " " . $autor . " " . $editora . " " . $ano . " " . $codigo . " " . $conteudo;

$infor = file('arquivo_csv');
$infor[] = $conteudo . "\n";
$infor_string = implode(' ', $infor);

file_put_contents('arquivo_csv', $infor_string);

 header("Location:  index.php");

?>