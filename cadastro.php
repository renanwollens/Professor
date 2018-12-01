<!doctype html>
<html lang="pt-br">
<head>
   
	<title>Autopeças</title>
	<meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1' />
	<link rel="stylesheet" href="Autopeças_css.css">
	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
	<meta name="keywords" content="Autopeças, carro, moto, manutençao, conserto" />
	<meta name="description"content="Ache aqui"/>
	

	
</head>
<body> 


<div id="top">

<div id="logo">AutoPeças SAO MIGUEL</div>

<div id="logo_tel">
<p>Fale conosco<p>
<p>Tel: (81) 9.8326-6459<p>
</div>


<div id="cont">

<div id="menu">
<div id='cssmenu'>
<ul>
	<li><a href='index.php'>Início</a></li>
	<li><a href='categorias.html'><span>Produtos</span></a></li>
	<li><a href='orçamento.html'><span>Orçamentos</span></a></li>
	<li><a href='login.html'><span>Login</span></a></li>
	<li class='last'><a href='#'><span>Contato</span></a></li>
</ul>
</div>
</div>
</div>

           
</div>



<div class="cont"> 
<div>
<form method="get" action="dados.php">
Valor: <input type="text" name="Formulário de cliente"/>
<input type="submit" value="Criar cadastro"/>
</form>
</div>

<form name="meuForm" method="post" id="formulario">
	<div class="box"> 
		<h1>Formulario de Cliente :</h1>
 
		<label> 
			<span></span>
 			<input type="text" class="input_text" name="nome" id="name"
 			placeholder="Name"/>
 
		</label>
 
		<label>
 			<span></span>
			<input type="text" class="input_text" name="email" id="email"
			 placeholder="E-mail"/>
		 </label>
 
		<label>
 			<span></span>
			<input type="password" class="input_text" name="password" id="subject"  placeholder="password"/>
		</label>

 
		<label>
			 <span></span>
			<input type="text" class="input_text" name="Dependente" id="subject"  placeholder="Dependent"/>
			<input type="button" class="button" value="OK" />
		</label>           
	</div>
</form> 
</div>


<?php
include 'conexao.php';

$nome = null;
$email = null;
$fone = null;
$verifica_insert= null;

if(empty($_POST['nome'])){
    $_SESSION['vazio_nome'] = "Campo nome é obrigatório";
        $verifica_insert= " ";
}else{
    $_SESSION['value_nome'] = $_POST['nome'];
}

if(empty($_POST['email'])){
    $_SESSION['vazio_email'] = "Campo e-mail é obrigatório";
    $verifica_insert= " ";
}else{
    $_SESSION['value_email'] = $_POST['email'];
}

if(empty($_POST['fone'])){
    $_SESSION['vazio_fone'] = "Campo e-mail é obrigatório";
    $verifica_insert= " ";
}else{
    $_SESSION['value_fone'] = $_POST['fone'];
}

if ($verifica_insert != " "){

$nome = mysqli_real_escape_string($conexao, $_POST['nome']);
$email = mysqli_real_escape_string($conexao, $_POST['email']);
$fone = mysqli_real_escape_string($conexao, $_POST['fone']);

$result_sql = "INSERT INTO cliente (nome,email,fone) VALUES ('$nome','$email','$fone')";

}else{

    $url='index.php';
    echo("<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=$url'>");
    exit();

}

if($conexao->query($result_sql) == TRUE){
    $url='index.php';
    echo("<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=$url'>");
    exit();

}else{
    echo "Erro".$result_sql."<br>".$conexao->error;
        }
$conexao->close();
?>



<?php
if(confirmado):
   $_SESSION['mensagem'] = "Usuario cadastrado com sucesso!";
   header("location: formularioDeRegisto.php");
   exit();
else:
   $_SESSION['mensagem'] = "Ocorreu um erro, tente novamente";
   header("location: formularioDeRegisto.php");
   exit();
endif;



if(isset($_SESSION["mensagem"])):
   print $_SESSION["mensagem"];
   unset($_SESSION["mensagem"]);
endif; 
?>
<?php 

<script>var="feedback";
alert("Dados Salvos com sucesso!");
</script>


if($conexao->query($result_sql) == TRUE){
$url='cadastro.php';
echo("<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=$url'>");
exit();


if ($_GET["cadastro"]=="ok"){
  $texto = ("<p><b><font color=\"#FF0000\">Cadastro realizado com sucesso</font></b></p>");
}?>
 <?php echo $texto; ?> 




<div id="rodapé">
<div id="rodad">
By Renan wollens (CVA).
</div>
</div>


</body>

</html>