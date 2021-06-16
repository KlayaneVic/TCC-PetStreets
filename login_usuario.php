<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Login de Usuário</title>

        <link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="css/estilo.css" /> 
    	<script src="js/jquery-3.3.1.min.js"></script> 
    	<script src="js/popper.min.js"></script>
    	<script src="js/bootstrap.min.js"></script>
		<script src="js/valida.js"></script>
		<style>
			body{
				background-color: #FFFFE0;
			}
		</style>
    </head>
    <body>
        <?php
			include('barra_navegacao1.inc');
		?>
        <nav class="nav2" style="background-color: gold; color: black;">
			<h5>Login de Usuário</h5>
		</nav>
		<br/>
			<div class="container">
				<form action="processa_log_usu.php" method="POST" align="center" class="formLogin" style="background-color: gold; margin: 2em; border-radius: 10em; padding: 5em;">
					<h5>Entre com seus dados previamente cadastrados.</h5><br>
					<p>
						E-mail: <input type="text" name="email_usuario" required />
					</p>
					<p>
						Senha: <input type="text" name="senha_usuario" required />
					</p>
					
					<input type="submit" value="Confirmar" />
			</form>
        </div>
		<?php
			include ('rodape.inc');
		?>
    </body>
</html>