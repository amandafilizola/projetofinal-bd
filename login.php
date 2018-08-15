<!DOCTYPE html>
<html>
<head>
	<title>Cadastro Lala</title>
</head>
<body>
	<div class="caixadecadastro">
		<img src="logo.png" width="45%">
		<br>
		<form method="post" action="logar.php">
			<label>Login </label>
			<input type="text" name="login" id="login" placeholder="Digite seu nome" required>
			<br>
			<label>Senha </label>
			<input type="password" name="senha" id="senha" placeholder="Digite sua senha" required>
			<br>
			<br>
			<button>Logar</button>
		</form>
		<label>Ainda não tem cadastro? Se inscreva!</label><br>
		<button><a href="cadastro.php"style="text-decoration: none;color:black;">Cadastro</a></button><br>
		<label>Esqueceu sua senha?</label><br>
		<button><a href="atualizarsenha.php"style="text-decoration: none;color:black;">Esqueci minha senha!</a></button>
	</div>
	<style type="text/css">
		.caixadecadastro
		{
			margin-left: 35%;
			margin-top: 5%;
			text-align: center;
			float: left;
			width: 30%;
			background-color: rgba(255,255,255,0.4);
			font-family: "Candara";
			font-size: 1.4em;
			border: 2px solid grey;
			padding: 1%;
		}
		input
		{
			padding: 6px 20px;
			margin: 0px 0;
			margin-top: 5%;
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
			width: 40%;
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
			}
		}
		@media only screen and (min-width: 768px) and (max-width:900px)
		{
			.caixadecadastro
			{
				width: 45%;
				margin-left: 30%;
			}
		}
		@media only screen and (min-width: 480px) and (max-width: 767px)
		{
			.caixadecadastro
			{
				width: 60%;
				margin-left: 20%;
			}
		}
		@media only screen and (max-width: 479px)
		{
			.caixadecadastro
			{
				width: 60%;
				margin-left: 15%;
			}
		}
		
	</style>
</body>
</html>