<?php 
	include 'conexao/conexao.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Better Parking</title>
		<link rel="stylesheet" type="text/css" href="css/estilos.css">
	</head>
	<body>
		<div id="conteudo">
			<img src="img/betterparking.png" alt="Logotipo" />
		</div>
		<div id="cadastro">
				<div class="titulo"><span>Login</span></div>
				
				<form id="cadastrado" method="post" action="arquivos/login.process.php">
					<label for="usuario">Usuário</label>
					<input type="text" name="usuarioLogin" id="usuario" />
					<br />
					<label for="senha">Senha</label>
					<input type="password" name="senhaLogin" id="senha" />
					<br />
					<div style="text-align: right;"><input class="botao" type="submit" name="entrar" id="entrar" value="Entrar" /></div>
				</form>
				
			</div>
	</body>
</html>