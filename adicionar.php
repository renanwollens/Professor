<?php
if( isset($_POST["nome"]) ){
	$nome = $_POST["nome"];
	include "conexao.php";
	$link->query("INSERT INTO Cliente (nome, pessoa fisica, pessoa juridica) VALUES ('".$nome."', null, null);");
}
header('Location: index.php');
exit();
?>

