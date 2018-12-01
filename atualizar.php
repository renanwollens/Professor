<?php
if(isset($_GET["id"])){
	$id = $_GET["id"];
	include "conexao.php";
	$result = $link->query("SELECT * FROM cliente WHERE `id`='".$id."';");
	if($result->num_rows == 1){
		$cliente = $result->fetch_object();
	}else {
		header('Location: index.php');
		exit();
	}
}else {
	header('Location: index.php');
	exit();
}
?>
<form action="atualizar2.php" method="post">
	<input type="hidden" name="id" value="<?= $cliente->id ?>" />
	Nome: <input type="text" name="nome" value="<?= $cliente->nome ?>" /><br>
	Pessoa Física: <input type="text" name="pessoa_fisica" value="<?= $cliente->pessoa_fisica?>" /><br>
	Pessoa Jurídica: <input type="text" name="pessoa_juridica" value="<?= $cliente->pessoa_juridica?>" /><br>
	<button type="submit">Atualizar</button>
</form>

