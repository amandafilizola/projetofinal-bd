
<!DOCTYPE html>
<html>
<head>
	<title>Company Name</title>
</head>
<body>
	<div class="caixadecadastro">
		<img src="logo.png" width="40%">
		<br><br><br>
		<button><a href="cadastro.php" style="text-decoration: none;color:black;">Cadastrar</a></button>
		<button><a href="login.php" style="text-decoration: none;color:black;">Logar</a></button>
	</div>
	<style type="text/css">
		.caixadecadastro
		{
			margin-left: 35%;
			margin-top: 12%;
			text-align: center;
			float: left;
			width: 30%;
			background-color: rgba(255,255,255,0.4);
			font-family: "Candara";
			font-size: 1.4em;
			border: 2px solid grey;
			padding: 1%;
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
			text-decoration: none;
		}
		button:hover
		{
			background-color: rgba(62,78,219,1);
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
				width: 50%;
				margin-left: 30%;
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