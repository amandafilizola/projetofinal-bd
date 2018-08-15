<?php 

require_once('connection.php');

	$login = $_GET['login'];
	$senha = $_GET['senha'];
	$nome = $_GET['nome'];
	$cpf = $_GET['cpf'];
	$email = $_GET['email'];
	$rg = $_GET['rg'];
	$idade = "";
	$nomedopai = $_GET['nomedopai'];
	$nomedamae = $_GET['nomedamae'];
	$datanasc = $_GET['datanasc'];


	$sql = "SELECT * FROM cadastro WHERE cpf = '".$cpf."' or rg = '".$rg."' or login = '".$login."' or email = '".$email."' LIMIT 1;";
 	$check = $conn->query($sql);
 	$check->fetch_assoc();
 	if($check->num_rows>0)
 	{
 		echo "<script> alert('Cadastro duplicado, este usuário já existe! $sql'); 
    	window.location = 'cadastro.php';  </script>";
 	}
 	else
 	{
 		//para inserir a idade no bd
 		//--------------------------------------------------------------------------------------
 		$data=$datanasc;
		$ano=$mes=$dia="";
		$ano=substr($data,0,4);
		$mes=substr($data,4,2);
		$dia=substr($data,6,2);
		$hoje = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
    	$nascimento = mktime( 0, 0, 0, $mes, $dia, $ano);
   		$idade = floor((((($hoje - $nascimento) / 60) / 60) / 24) / 365.25);
   		//--------------------------------------------------------------------------------------

		$sql = "INSERT INTO cadastro (login, senha, nome, cpf, email, rg, idade, nomedopai, nomedamae, datanasc) VALUES ('".$login."','".$senha."','".$nome."','".$cpf."','".$email."','".$rg."',".$idade.",'".$nomedopai."','".$nomedamae."','".$datanasc."');";
		$result=$conn->query($sql);
		echo "<script>alert('cadastrado!');
		window.location = 'login.php';</script>";	
	}

?>
