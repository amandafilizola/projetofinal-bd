<?php 

require_once('connection.php');

	$login = $_POST['login'];
	$senha = $_POST['senha'];


	$sql = "SELECT * FROM cadastro WHERE login = '".$login."' AND senha = '".$senha."';";
	$row= $conn->query($sql);
	$row->fetch_assoc(); 
	
	if($row->num_rows>0)
	{
		session_start();
		$_SESSION['userlala']="$login";
		echo "<script> alert('login correto');
		window.location = 'perfil.php';</script>
		";

	}
	else
	{
		echo "<script> alert('login incorreto');
		window.location = 'login.php';</script>";
	
	}

?>