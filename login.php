<!doctype html>
<html lang="pt-br">
<head>
   
	<title>Autopeças</title>
	<meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1' />
	<link rel="stylesheet" href="Autopeças_css.css">
	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
	<meta name="keywords" content="Autopeças, carro, moto, manutenção, conserto" />
	<meta name="description"content="Ache aqui"/>
	

	
</head>
<body>

<div id="top">

<div id="logo">AutoPeças SÃO MIGUEL</div>

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

<div id="banner_log">
<img src="Imagens/avatar.jpg" width="300px"/>
</div>


<div id="contout">

<div id="cont2">

<div id="titulo_gal">Login</div>
<?php
if( isset($_POST["nome"]) ){
	$nome = $_POST["nome"];
	include "conexao.php";
	$link->query("INSERT INTO Cliente (nome, pessoa fisica, pessoa juridica) VALUES ('".$nome."', null, null);");
}
header('Location: index.php');
exit();
?>
<?php
	
	require 'config.php';
	require 'conexao.php';
	require 'database.php';
	require 'cadastro.php';
	
	$cliente = array(
	'nome'  => 'Fulano',
	'telefone'  => '983266459',
	'status'  => '0',
	'cpf'  => '2147483647',
	'gasto_mes'  => '3000',
	);
	
	if(DBCreate('cliente', $cliente, true))
		echo 'Cadastro Realizado com  Sucesso!';
	else
		echo ':/';
	
	
	
	?>
			<form method="post" name="formCadastro" action="cadastro.php" >

            <input type="text" id="nome" name="nome" placeholder="Seu nome completo"

                    <?php
                        if(!empty($_SESSION['value_nome'])){
                            echo "value='".$_SESSION['value_nome']."'";
                            unset($_SESSION['value_nome']);
                        }
                     ?>
                     <?php
                        if(!empty($_SESSION['vazio_nome'])){
                            echo "<p style='color: #b63e3e;position: relative; top:43px'>".$_SESSION['vazio_nome']."</p>";
                            unset($_SESSION['vazio_nome']);
                        }
                     ?>             

            <br><br><br>
            <input type="text" id="email" name="email" placeholder="Email comercial"

                    <?php
                        if(!empty($_SESSION['value_email'])){
                            echo "value='".$_SESSION['value_email']."'";
                            unset($_SESSION['value_email']);
                        }
                     ?>
                     <?php
                        if(!empty($_SESSION['vazio_email'])){
                            echo "<p style='color: #b63e3e;position: relative; top:43px'>".$_SESSION['vazio_email']."</p>";
                            unset($_SESSION['vazio_email']);
                        }
                     ?>                     

            <br><br><br>
            <input type="text" id ="fone" name="fone" placeholder="Telefone com DDD"

                    <?php
                        if(!empty($_SESSION['value_fone'])){
                            echo "value='".$_SESSION['value_fone']."'";
                            unset($_SESSION['value_fone']);
                        }
                     ?>
                     <?php
                        if(!empty($_SESSION['vazio_fone'])){
                            echo "<p style='font-family: Helvetica Neue; color: #b63e3e;position: relative; top:43px'>".$_SESSION['vazio_fone']."</p>";
							unset($_SESSION['vazio_fone']);
							}
						?>
					<br><br><br>
					
				<input type="submit" value="cadastrar">
			</form> 
 
		
           
	</div>

</div>

</div>
</div>

<div id="rodapé">
<div id="rodad">
By Renan wollens(CVA).
</div>
</div></div>
</body>
</html>