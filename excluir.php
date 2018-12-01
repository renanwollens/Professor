<?php
if(isset($_GET["id"])){
	$id = $_GET["id"];
	include "conexao.php";
	$link->query("DELETE FROM cliente WHERE `cnpj`='".$id."';");
}
header('Location: index.php');
exit();
?>