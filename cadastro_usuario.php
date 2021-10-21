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
				<form action="processa_cad_usu.php" method="POST" class="formCadastro" enctype="multipart/form-data" 
				style="background-color: gold; border-radius: 5em; box-shadow: 2px 2px 2em #888; margin: 2em 4em 2em 4em; padding: 2em 6em 1em 6em;">
						<small class="form-text text-muted">Campos marcados com * são obrigatorios</small>
						<small id="emailHelp3" class="form-text text-muted">Todos os dados, exceto senha, email e foto, serão visiveis a outros usuários.</small><br>
						<div class="form-row">
								<div class="form-group col-md-8">
									<label>*Nome Completo</label><br>
									<input class="form-control" type="text" id="nome_usuario" name="nome_usuario" style="text-transform: capitalize;" onfocusout="validaNome()" placeholder="Seu Nome" required />
									<span id="erroNome" style="color: red;"></span>
								</div>
						<div class="form-group col-md-4">
							<label>*Senha</label><br>
						<input class="form-control" type="text" id="senha_usuario" name="senha_usuario" onfocusout="validaSenha()" placeholder="Senha" required />
						<span id="erroSenha" style="color: red;"></span>
						</div>
					</div>
					<div class="form-row">
								<div class="form-group col-md-6">
									<label>*Cidade</label><br>
									<input class="form-control" type="text" id="cidade_usuario" name="cidade_usuario" style="text-transform: capitalize;" onfocusout="validaCidade()" placeholder="Cidade" required />
									<span id="erroCidade" style="color: red;"></span>
								</div>
								<div class="form-group col-md-6">
									<label>*Bairro</label><br>
									<input class="form-control" type="text" id="bairro_usuario" name="bairro_usuario" style="text-transform: capitalize;" onfocusout="validaBairro()" placeholder="Bairro" required />
									<span id="erroBairro" style="color: red;"></span>
								</div>
					</div>
					<div class="form-row">
								<div class="form-group col-md-8">
									<label>*E-mail</label><br>
									<div class="input-group mb-2">
										<div class="input-group-prepend">
										  <div class="input-group-text">@</div>
										</div>
											<input class="form-control" type="text" id="email_usuario" name="email_usuario" onfocusout="validaEmail()" placeholder="nome@exemplo.com" required />
									  </div>
									<span id="erroEmail" style="color: red;"></span>
								</div>
								<div class="form-group col-md-4">
									<label>*Tipo de Usuário</label><br>
									<select class="form-control" name="tipo_usuario" required>
										<option value="" selected hidden >---</option>
										<option value="Usuário Comum">Usuário Comum</option>
										<option value="Usuário Comum ONG">Usuário Comum ONG</option>
									</select>
								</div>
					</div>
					<div class="form-row">
					<label>*Telefone (As outras pessoas poderão entrar em contato com você por meio deste número)</label><br>
							<input class="form-control" type="text" id="telefone_usuario" name="telefone_usuario" onfocusout="validaTelefone()" placeholder="(XX) 9XXXX-XXXX" required />
							<span id="erroTelefone" style="color: red;"></span>
						
					</div>
					<div class="form-row">
						<label>Foto</label><br>
						<input class="form-control" type="file" name="foto_usuario" /></br>
					</div>
					<br><br><div class="form-group" align="right">
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