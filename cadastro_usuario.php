<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Cadastro de Usuário</title>

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
			<h5>Cadastro de Usuário</h5>
		</nav>
		<br/>
			<div class="container">
				<form action="processa_cad_usu.php" method="POST" align="center" class="formCadastro" onsubmit="return validaForm()" enctype="multipart/form-data" style="background-color: gold; margin: 2em; border-radius: 10em; padding: 5em;">
					<h5>Cadastre-se Agora e Faça a Diferença!! </h5><br>
					<p>
						<label>Nome Completo:</label>
						<input type="text" id="nome_usuario" name="nome_usuario" onchange="validaNome()" required />
						<br><span id="erroNome" style="color: red;"></span>
					</p>
					<p>
						<label>Telefone:</label>
						<input type="text" id="telefone_usuario" name="telefone_usuario" onchange="validaTelefone()" required />
						<br><span id="erroTelefone" style="color: red;"></span>
					</p>
					<p>
						<label>Cidade:</label>
						<input type="text" id="cidade_usuario" name="cidade_usuario" onchange="validaCidade()" required />
						<br><span id="erroCidade" style="color: red;"></span>
					</p>
					<p>
						<label>Bairro:</label>
						<input type="text" id="bairro_usuario" name="bairro_usuario" onchange="validaBairro()" required />
						<br><span id="erroBairro" style="color: red;"></span>
					</p>
					<p>
						<label>E-mail:</label>
						<input type="text" id="email_usuario" name="email_usuario" onchange="validaEmail()" required />
						<br><span id="erroEmail" style="color: red;"></span>
					</p>
					<p>
						<label>Tipo de Usuário:</label>
						<select name="tipo_usuario" required>
							<option value="1" selected="selected">Usuário Comum</option>
							<option value="2">Usuário Comum ONG</option>
						</select>
					</p>
					<p>
						<label>Senha:</label> 
						<input type="text" id="senha_usuario" name="senha_usuario" onchange="validaSenha()" required />
						<br><span id="erroSenha" style="color: red;"></span>
					</p>
					<p>
						<label>Foto:</label>
						<input type="file" name="foto_usuario" /></br>
					</p>
					<input type="submit" value="Confirmar" />
			</form>
        </div>
		<?php
			include ('rodape.inc');
		?>
    </body>
</html>