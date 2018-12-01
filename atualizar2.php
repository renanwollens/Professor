<?php
if(isset($_POST["id"])){
	$id = $_POST["id"];
	$nome = $_POST["nome"];
	$pessoa_fisica = $_POST["pessoa_fisica"];
	$pessoa_juridica = $_POST["pessoa_juridica"];
	include "conexao.php";
	$link->query("UPDATE cliente SET nome='$nome', pessoa fisica='$pessoa_fisica', pessoa juridica='$pessoa_juridica' WHERE id='$id';");
}
header('Location: index.php');
exit();
?>