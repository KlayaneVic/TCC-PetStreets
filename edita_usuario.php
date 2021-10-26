<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title></title>
		
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="css/estilo.css" /> 
    	<script src="js/jquery-3.3.1.min.js"></script> 
    	<script src="js/popper.min.js"></script>
    	<script src="js/bootstrap.min.js"></script>
		<script src="js/valida.js"></script>
		<script src="js/arquivo_externo.js"></script>
	
		<style>
			body{
				background-color: #FFFFE0;
			}
		</style>
	</head>
	<body>
		<?php
			include("barra_navegacao3.inc");
		?>
		
		<nav class="nav2" style="background-color: gold; color: black;">
			<h5 style="font-weight: bold;">Editar Dados do Usuario</h5>
		</nav>
		<br/>
		<?php
			include('cabecalho_conexao.php');
		
			$texto = null;
			$id = $_GET['usuario'];
			$SQL = "SELECT * FROM usuario WHERE id_usuario = $id";
			
			$dados_recuperados = mysqli_query($con, $SQL);
            $resultado = mysqli_fetch_assoc($dados_recuperados);
			
		?>
			<div class="conteiner">
				<form action="processa_edita_usu.php" method="POST" class="formCadastro" enctype="multipart/form-data" style="box-shadow: 2px 2px 2em #888; background-color: gold; margin: 2em 9em 2em 9em; border-radius: 5em; padding: 2em 5em 2em 5em;">
					<h5 style="font-weight: bold; color: red;">!!! Campos marcados com * são obrigatorios</h5><br>
					<div class="form-row">
						<div class="form-group col-md-4">
							<label style="font-weight: bold;">*Nome </label>
							<input class="form-control" type="text" id="novo_nome_usuario" name="novo_nome_usuario" onfocusout="validaNomeAtt()" value="<?php echo $resultado['nome_usuario'];?>" required />
							<span id="erroNomeAtt" style="color: red;"></span>
						</div>
						<div class="form-group col-md-4">
							<label style="font-weight: bold;">*Email </label>
							<input class="form-control" type="text" id="novo_email_usuario" name="novo_email_usuario" onfocusout="validaEmailAtt()" value="<?php echo $resultado['email'];?>" required />
							<span id="erroEmailAtt" style="color: red;"></span>
						</div>
						<div class="form-group col-md-4">
							<label for="inputPassword4" style="font-weight: bold;">*Senha </label><br>
							<input class="form-control" type="text" id="nova_senha_usuario"  name="nova_senha_usuario" onfocusout="validaSenhaAtt()" value="<?php echo $resultado['senha']; ?>" required />
							<span id="erroSenhaAtt" style="color: red;"></span>
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-4">
							<label style="font-weight: bold;">*Telefone </label><br>
							<input class="form-control" type="text" id="novo_telefone_usuario" name="novo_telefone_usuario" onfocusout="validaTelefoneAtt()" value="<?php echo $resultado['telefone']; ?>" required />
							<span id="erroTelefoneAtt" style="color: red;"></span>
						</div>
						<div class="form-group col-md-4">
							<label style="font-weight: bold;">*Cidade </label><br>
							<input class="form-control" type="text" id="nova_cidade_usuario" name="nova_cidade_usuario"  onfocusout="validaCidadeAtt()" value="<?php echo $resultado['cidade']; ?>" required /> 
							<span id="erroCidadeAtt" style="color: red;"></span>
						</div>
						<div class="form-group col-md-4">
							<label style="font-weight: bold;">*Bairro </label><br>
							<input class="form-control" type="text" id="novo_bairro_usuario" name="novo_bairro_usuario" onfocusout="validaBairroAtt()" value="<?php echo $resultado['bairro']; ?>" required />
							<span id="erroBairroAtt" style="color: red;"></span>
						</div>
					</div>
						<div class="form-row">
							<label style="font-weight: bold;">Foto </label><br>
							<input class="form-control" type="file" id="nova_foto" name="nova_foto" />
						</div><br>
						<div class="form-group" align="right">
						  <button type="reset" class="btn btn-danger" style="font-weight: bold;">Limpar</button>
						  <button type="submit" class="btn btn-primary" style="font-weight: bold;">Confirmar</button>
						</div>
					</div>
					<input type="hidden" name="id" value="<?php echo $resultado['id_usuario']; ?>" />
				</form>
			</div>
	</body>
</html>