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
		<table border="1">
			<tr>
				<td>Usuário</td>
				<td><?php echo $row['login'];?></td>
			</tr>
			<tr>
				<td>Nome Completo</td>
				<td><?php echo $row['nome'];?></td>
			</tr>
			<tr>
				<td>CPF</td>
				<td><?php echo $row['cpf'];?></td>
			</tr>
			<tr>
				<td>RG</td>
				<td><?php echo $row['rg'];?></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><?php echo $row['email'];?></td>
			</tr>
			<tr>
				<td>Nome do Pai</td>
				<td><?php echo $row['nomedopai'];?></td>
			</tr>
			<tr>
				<td>Nome da Mãe</td>
				<td><?php echo $row['nomedamae'];?></td>
			</tr>
				<tr>
				<td>Idade</td>
				<td><?php echo $row['idade'];?></td>
			</tr>
			<tr>
				<td>Data de nascimento</td>
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
		</table>
		
	</div>
	<style type="text/css">
		
	</style>
</body>
</html>