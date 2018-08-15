<!DOCTYPE html>
<html>
<head>
	<title>Redefinir Senha</title>
</head>
<body>
	<div class="caixadecadastro">
		<label align="justify">Esqueceu sua senha? Basta informar o cpf, seu nome completo e nova senha desejada. </label>
		<br><br>
		<form method="post" action="redefinirsenha.php">
			<label>Nova Senha</label>
			<input type="password" name="senha" id="senha" placeholder="Digite sua senha entre 6 e 8 caracteres" minlength="6" maxlength="8">
			<br><br>
			<label>Nome Completo</label>
			<input type="text" name="nome" id="nome" placeholder="Digite seu nome completo">
			<br><br>
			<label>CPF</label>
			<input type="text" name="cpf" id="cpf" placeholder="Digite seu CPF">
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