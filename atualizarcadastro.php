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

if($_POST['nome']!=NULL)
{
	$nome=$_POST['nome'];
	$sql="UPDATE cadastro SET nome='".$nome."' WHERE login='".$login."';";
	$row=$conn->query($sql);
}
if($_POST['senha']!=NULL)
{
	$senha=$_POST['senha'];
	$sql="UPDATE cadastro SET senha='".$senha."' WHERE login='".$login."';";
	$row=$conn->query($sql);
}
if($_POST['email']!=NULL)
{
	$email=$_POST['email'];
	$sql="UPDATE cadastro SET email='".$email."' WHERE login='".$login."';";
	$row=$conn->query($sql);
}
if($_POST['cpf']!=NULL)
{
	$cpf=$_POST['cpf'];
	$sql="UPDATE cadastro SET cpf='".$cpf."' WHERE login='".$login."';";
	$row=$conn->query($sql);
}
if($_POST['rg']!=NULL)
{
	$rg=$_POST['rg'];
	$sql="UPDATE cadastro SET rg='".$rg."' WHERE login='".$login."';";
	$row=$conn->query($sql);
}
if($_POST['nomedopai']!=NULL)
{
	$nomedopai=$_POST['nomedopai'];
	$sql="UPDATE cadastro SET nomedopai='".$nomedopai."' WHERE login='".$login."';";
	$row=$conn->query($sql);
}
if($_POST['nomedamae']!=NULL)
{
	$nomedamae=$_POST['nomedamae'];
	$sql="UPDATE cadastro SET nomedamae='".$nomedamae."' WHERE login='".$login."';";
	$row=$conn->query($sql);
}
if($_POST['datanasc']!=NULL)
{
	$datanasc=$_POST['datanasc'];
	$sql="UPDATE cadastro SET datanasc='".$datanasc."' WHERE login='".$login."';";
	$row=$conn->query($sql);

	$data=$datanasc;
	$ano=$mes=$dia="";
	$ano=substr($data,0,4);
	$mes=substr($data,4,2);
	$dia=substr($data,6,2);
	$hoje = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
    $nascimento = mktime( 0, 0, 0, $mes, $dia, $ano);
   	$idade = floor((((($hoje - $nascimento) / 60) / 60) / 24) / 365.25);

   	$sql="UPDATE cadastro SET idade='".$idade."' WHERE login='".$login."';";
	$row=$conn->query($sql);
}

echo"<script> alert('informações atualizadas');
window.location.href='perfil.php';</script>";

?>