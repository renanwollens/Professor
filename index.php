<?php
include "conexao.php";

$result = $link->query("select * from cliente");
?>
<html>
 <head>
  <title>aula</title>
  <meta charset="UTF-8">
 </head>
 <body> 
<?php 
if($result->num_rows > 0){
	while ($row = $result->fetch_object()){ 
?>
	<div> 
		<?= $row->nome ?> 
		<?=  $row->pessoa fisica ?>  
		<?=  $row->pessoa juridica ?>  
	<a href="atualizar.php?id=<?= $row->id ?>">atualizar</a>|
	<a href="excluir.php?id=<?= $row->id ?>">excluir</a>
	</div>
<?php 
	} 
}else {
?>
<div>cliente não existente  </div>
<?php } ?>

<form action="adicionar.php" method="post">
	<input type="text" name="nome">
	<button type="submit">Adicionar</button>
</form>
 </body>
</html>

