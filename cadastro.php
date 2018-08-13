<?php 

include 'connection.php';

$modo = "";
if(isset($_GET['modo']))
{
	$modo = $_GET['modo'];
}

$login = $senha = $nome =  $cpf = $email = $rg = $idade = $nomedopai = $nomedamae = $datanasc = "";
if(isset($_GET['login'])&&isset($_GET['senha'])&&isset($_GET['nome'])&&isset($_GET['cpf'])&&isset($_GET['rg'])&&isset($_GET['idade'])&&isset($_GET['nomedopai'])&&isset($_GET['nomedamae'])&&isset($_GET['datanasc']))
{
	$login = $_GET['login'];
	$senha = $_GET['senha'];
	$nome = $_GET['nome'];
	$cpf = $_GET['cpf'];
	$email = $_GET['email'];
	$rg = $_GET['rg'];
	$idade = $_GET['idade'];
	$nomedopai = $_GET['nomedopai'];
	$nomedamae = $_GET['nomedamae'];
	$datanasc = $_GET['datanasc'];
}


if($modo == 'inserir')
{
	$sql = "INSERT INTO cadastro (login, senha, nome, cpf, email, rg, idade, nomedopai, nomedamae, datanasc) VALUES ('".$login."','".$senha."','".$nome."','".$cpf."','".$email."','".$rg."',".$idade.",'".$nomedopai."','".$nomedamae."','".$datanasc."');";
	$result=$conn->query($sql);
	echo "<script>alert('cadastrado!');
	window.location = 'perfil.php';</script>
	<form method=\"get\" action=\"perfil.php?modo=logado\">
		<input type=\"hidden\" name=\"login\" id=\"login\" value=".$login.">
		<input type=\"hidden\" name=\"senha\" id=\"senha\" value=".$senha.">
		<input type=\"hidden\" name=\"nome\" id=\"nome\" value=".$nome.">
		<input type=\"hidden\" name=\"cpf\" id=\"cpf\" value=".$cpf.">
		<input type=\"hidden\" name=\"email\" id=\"email\" value=".$email.">
		<input type=\"hidden\" name=\"rg\" id=\"rg\" value=".$rg.">
		<input type=\"hidden\" name=\"idade\" id=\"idade\" value=".$idade.">
		<input type=\"hidden\" name=\"nomedopai\" id=\"nomedopai\" value=".$nomedopai.">
		<input type=\"hidden\" name=\"nomedamae\" id=\"nomedamae\" value=".$nomedamae.">
		<input type=\"hidden\" name=\"datanasc\" id=\"datanasc\" value=".$datanasc.">
		<input type=\"hidden\" name=\"modo\" id=\"modo\" value=\"logado\">
	</form>
	";	
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Cadastro Lala</title>
</head>
<body>
	<div class="caixadecadastro">
		<img src="logo.png" width="25%">
		<br>
		<form method="get" action="cadastro.php">
			<label>Login</label>
			<input type="text" name="login" id="login" placeholder="Digite seu usuário" required>
			<br><br>
			<label>Senha </label>
			<input type="password" name="senha" id="senha" placeholder="Digite sua senha" required>
			<br><br>
			<label>Nome Completo</label>
			<input type="text" name="nome" id="nome" placeholder="Digite seu nome completo" required>
			<br><br>
			<label>Email</label>
			<input type="email" name="email" id="email" placeholder="Digite seu email" required>
			<br><br>
			<label>CPF</label>
			<input type="text" name="cpf" id="cpf" placeholder="Digite seu CPF" required>
			<br><br>
			<label>RG</label>
			<input type="text" name="rg" id="rg" placeholder="Digite seu RG" required>
			<br><br>
			<label>Nome completo do pai</label>
			<input type="text" name="nomedopai" id="nomedopai" placeholder="Nome do pai" required>
			<br><br>
			<label>Nome completo da mae</label>
			<input type="text" name="nomedamae" id="nomedamae" placeholder="Nome da mae" required>
			<br><br>
			<label>Data de nascimento (yyyymmdd)</label>
			<input type="text" name="datanasc" id="datanasc" placeholder="Digite sua data de nascimento" required>
			<br><br>
			<label>Idade</label>
			<input type="number" name="idade" id="idade" placeholder="Digite sua idade" required>
			<br><br>
			<input type="hidden" name="modo" id="modo" value="inserir">
			<button>Cadastrar</button>
		</form>
		<label style="text-align: center;margin-left: 30%;">Já tem conta? Basta logar!</label>
		<br>
		<br>
		<button><a href="login.php"style="text-decoration: none;color:black;">Logar</a></button>
	</div>
	<style type="text/css">
		.caixadecadastro
		{
			margin-left: 25%;
			margin-top: 3%;
			margin-bottom:5%;
			text-align: center;
			width: 50%;
			background-color: rgba(255,255,255,0.4);
			font-family: "Candara";
			font-size: 1.4em;
			border: 2px solid grey;
			padding: 1%;
		}
		input
		{
			padding: 6px 20px;
			margin: 0%;

			float: right;
			width: 40%;
		}
		button
		{
			margin-top: 0px;
			margin-bottom: 5%;
			border:none;
			padding: 15px 32px;
			text-align: center;
			text-decoration: none;
			font-size: 16px;
			width: 50%;
		}
		label
		{
			margin-left: 4%;
			float:left;

		}
		body
		{
			margin: 0px;
			padding: 0px;
			background-image: url("nightstars.jpg");
			background-position: center;
		}
		@media only screen and (min-width: 901px) and (max-width:1024px)
		{
			.caixadecadastro
			{
				width: 35%;
				margin-left: 30%;
				font-size: 0.9em;
			}
		}
		@media only screen and (min-width: 768px) and (max-width:900px)
		{
			.caixadecadastro
			{
				width: 45%;
				margin-left: 30%;
				font-size: 0.9em;
			}
		}
		@media only screen and (min-width: 480px) and (max-width: 767px)
		{
			.caixadecadastro
			{
				width: 60%;
				margin-left: 20%;
				font-size: 0.9em;
			}
		}
		@media only screen and (max-width: 479px)
		{
			.caixadecadastro
			{
				width: 60%;
				margin-left: 15%;
				font-size: 0.9em;
			}
		}
		
	</style>
</body>
</html>