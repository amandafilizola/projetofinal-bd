<?php 

require_once('connection.php');

	$login = $_POST['login'];
	$senha = $_POST['senha'];
	$nome = $_POST['nome'];
	$cpf = $_POST['cpf'];
	$email = $_POST['email'];
	$rg = $_POST['rg'];
	$idade = "";
	$nomedopai = $_POST['nomedopai'];
	$nomedamae = $_POST['nomedamae'];
	$datanasc = $_POST['datanasc'];


	$sql = "SELECT * FROM cadastro WHERE cpf = '".$cpf."' OR rg = '".$rg."' OR login = '".$login."' OR email = '".$email."' LIMIT 1;";
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
