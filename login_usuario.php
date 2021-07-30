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
		<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
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
				<form action="processa_log_usu.php" method="POST" class="formLogin" style="background-color: gold; margin: 2em 15em 2em 15em; padding: 1em;
				border-radius: 5em; padding: 4em; box-shadow: 2px 2px 2em #888;">
					<div class="form-row">
						<div align="center" class="form-group col-md-12">
							<img src="img/login.gif" style="border-radius: 2em; height: 8em; width: 30em;">
						</div>
					</div><br>
					<div class="form-row">
						<div class="form-group col-md-12">
							<h4 align="center" style="color: purple;"> ------------------------ ❤ ------------------------ </h4>
							<h5 class="text-center">Entre com o seu <b>Usuário</b> e <b>Senha</b></h5>
							<h4 align="center" style="color: purple;"> ---------------------------------------------------- </h4>
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-1">
                            <i class="material-icons">account_circle</i>
						</div>
						<div class="form-group col-md-11">
							<input type="text" class="form-control" name="email_usuario" placeholder="Seu e-mail" required />
							<small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguém.</small>
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-1">
                            <i class="material-icons">lock</i>
                        </div>
						<div class="form-group col-md-11">
							<input type="password" class="form-control" name="senha_usuario" placeholder="Senha" required />
						</div>
					</div><br>
					<div class="form-group" align="right">
						<input type="reset" class="btn btn-danger" value="Limpar" />
						<input type="submit" value="Confirmar" class="btn btn-primary" />
					</div>
			</form>
        </div><br>
		<?php
			include ('rodape.inc');
		?>
    </body>
</html>