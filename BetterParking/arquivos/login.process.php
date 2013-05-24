<?php
require 'conexao/conexao.php';

try {
	
	if (isset($_POST["entrar"])) {
		
		$usuario = $_POST["usuarioLogin"];
		$senha = $_POST["senhaLogin"];
		
		if (empty($usuario))
			throw new Exception('Usu�rio não informado.', 1);
		
		if (empty($senha)) 
			throw new Exception('Senha não informada.', 1);
		
		$sql = "SELECT u_id FROM b_usuario WHERE u_nome = '".$usuario."' AND u_senha = '".$senha."'";
		
		$dados = mysql_fetch_object(mysql_query($sql));
		
		if (empty($dados)) {
			throw new Exception('E-mail ou senha inválida.', 1);
		
		} else {
			$_SESSION["dadosLogin"]["codUsuario"] = $dados->u_id;
		}
		
		header("Location: ../index.php");
	}
	
} catch (Exception $e) {}
