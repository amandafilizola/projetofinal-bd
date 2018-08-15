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
	<h1>Bom dia, <?php echo $row['nome'];?></h1>
</body>
</html>