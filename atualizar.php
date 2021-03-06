<?php 
require_once('connection.php');
session_start();

if(!isset($_SESSION['userlala']))
{
	session_destroy();
	echo"<script> alert('Para acessar essa página é necessário estar logado');window.location.href='perfil.php';</script>";
}
else 
{
	$login=$_SESSION['userlala'];
}
	$sql="SELECT * FROM cadastro WHERE login='".$login."';";
	$result=$conn->query($sql);
	$row=$result->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Atualizar Dados Cadastrais</title>
</head>
<body>
	<div class="caixadecadastro">
		<h2 id="bomdia">Bom dia, <?php echo $row['nome'];?></h2>
		<label align="justify">Você está na página de edição de seus dados. Se isso não é o que gostaria, volte para o perfil <a href="perfil.php" id="link">AQUI</a>. Caso esteja seguro, basta digitar nos espaços em que deseja atualizar.</label>
		<br><br>
		<form method="post" action="atualizarcadastro.php">
			<input type="hidden" name="login" id="login" value="$row['login']">
			<label>Senha </label>
			<input type="password" name="senha" id="senha" placeholder="Digite sua senha entre 6 e 8 caracteres" minlength="6" maxlength="8">
			<br><br>
			<label>Nome Completo</label>
			<input type="text" name="nome" id="nome" placeholder="Digite seu nome completo">
			<br><br>
			<label>Email</label>
			<input type="email" name="email" id="email" placeholder="Digite seu email">
			<br><br>
			<label>CPF</label>
			<input type="text" name="cpf" id="cpf" placeholder="Digite seu CPF">
			<br><br>
			<label>RG</label>
			<input type="text" name="rg" id="rg" placeholder="Digite seu RG">
			<br><br>
			<label>Nome completo do pai</label>
			<input type="text" name="nomedopai" id="nomedopai" placeholder="Nome do pai">
			<br><br>
			<label>Nome completo da mae</label>
			<input type="text" name="nomedamae" id="nomedamae" placeholder="Nome da mae">
			<br><br>
			<label>Data de nascimento (yyyymmdd)</label>
			<input type="text" name="datanasc" id="datanasc" placeholder="Digite sua data de nascimento" minlength="8" maxlength="8">
			<br><br>
			<button>Atualizar</button>
		</form>
	</div>
	<style type="text/css">
	#bomdia
	{
		width: 100%;
		text-align: left;
	}
	#link
	{
		text-decoration: none;
		color: black;
	}
	#link:hover
	{
		font-size: 1.05em;
	}
	#r
	{
		border:0px;
		padding-top: 30px;
		padding-bottom: 30px;
		text-decoration: none;
		color: black;
	}
	#r:hover
	{
		font-size: 1.05em;
	}
	.caixadecadastro
	{
		margin-left: 25%;
		margin-top: 3%;
		margin-bottom:5%;
		text-align: center;
		width: 50%;
		background-color: rgba(255,255,255,0.8);
		font-family: "Candara";
		font-size: 1.4em;
		border: 2px solid grey;
		padding: 1%;
	}
	.classeinfo
	{
		width: 30%;
	}
	body
	{
		margin: 0px;
		padding: 0px;
		background-image: url("nightstars.jpg");
		background-position: center;
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