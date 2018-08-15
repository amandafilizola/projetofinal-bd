<?php
require_once 'connection.php';
session_start();

if(!isset($_SESSION['userlala']))
{
  session_destroy();
  echo"<script> alert('Para acessar essa página é necessário logar');window.location.href='index.php';</script>";
}
 else 
{
  $login=$_SESSION['userlala'];
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Usuário</title>
</head>
<body>
	<?php 
	$sql="SELECT * FROM cadastro WHERE login='".$login."';";
	$result=$conn->query($sql);
	$row=$result->fetch_assoc();
	?>
	<div class="tabeladousuario">
		<table border="1" class="caixadecadastro">
			<tr>
				<td class="classeinfo">Usuário</td>
				<td><?php echo $row['login'];?></td>
			</tr>
			<tr>
				<td class="classeinfo">Senha</td>
				<td><?php echo $row['senha'];?></td>
			</tr>
			<tr>
				<td class="classeinfo">Nome Completo</td>
				<td><?php echo $row['nome'];?></td>
			</tr>
			<tr>
				<td class="classeinfo">CPF</td>
				<td><?php echo $row['cpf'];?></td>
			</tr>
			<tr>
				<td class="classeinfo">RG</td>
				<td><?php echo $row['rg'];?></td>
			</tr>
			<tr>
				<td class="classeinfo">Email</td>
				<td><?php echo $row['email'];?></td>
			</tr>
			<tr>
				<td class="classeinfo">Nome do Pai</td>
				<td><?php echo $row['nomedopai'];?></td>
			</tr>
			<tr>
				<td class="classeinfo">Nome da Mãe</td>
				<td><?php echo $row['nomedamae'];?></td>
			</tr>
				<tr>
				<td class="classeinfo">Idade</td>
				<td><?php echo $row['idade'];?></td>
			</tr>
			<tr>
				<td class="classeinfo">Data de nascimento</td>
				<td>
				<?php
				$data=$row['datanasc'];
				$ano=$mes=$dia="";
				$ano=substr($data,0,4);
				$mes=substr($data,4,2);
				$dia=substr($data,6,2);
				echo "$dia/$mes/$ano";
				?>
				</td>
			</tr>
			<tr>
				<td colspan="2" id="r"><a href="atualizar.php" id="r">Gostaria de editar seus dados?</a></th>
				
			</tr>
			<tr>
				<td colspan="2" id="r"><a href="logout.php" id="r">Logout</a></td>
			</tr>
		</table>
	</div>
	<style type="text/css">
		#r
		{
			border:0px;
			padding-top: 20px;
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