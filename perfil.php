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
if(($_GET['login']==NULL)||($_GET['senha']==NULL)||($_GET['nome']==NULL)||($_GET['cpf']==NULL)||($_GET['email']==NULL)||($_GET['rg']==NULL)||($_GET['idade']==NULL)||($_GET['nomedopai']==NULL)||($_GET['nomedamae']==NULL)||($_GET['datanasc']==NULL))
{
	echo $_GET['login'];
	echo "<script><!--alert('Redirecionando para home');
	window.location = 'index.php';--></script>";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>LALALALA</h1>
</body>
</html>