<?php 
require_once('connection.php');

$nome=$_POST['nome'];
$cpf=$_POST['cpf'];
$senha=$_POST['senha'];

$sql="SELECT * FROM cadastro WHERE nome='".$nome."' AND cpf='".$cpf."'";
$row=$conn->query($sql);
$row->fetch_assoc();

if($row->num_rows>0)
{
		$sql = "UPDATE cadastro SET senha = '".$senha."' WHERE nome='".$nome."' AND cpf='".$cpf."';";
		$row= $conn->query($sql);
		echo "<script>alert('senha redefinida!');
		window.location.href='login.php';</script>";
}
else
{
	echo "<script>alert('este cadastro não existe! Tente novamente.');
		window.location.href='atualizarsenha.php';</script>";
}



?>