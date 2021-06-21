<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Cadastro de Animal</title>
		
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
	<head>
	<body>
		<?php
			include ("barra_navegacao2.inc");
		?>
		
		<nav class="nav2" style="background-color: gold; color: black;">
			<h5>Cadastro de Animais</h5>
		</nav>
		<br/>
		<div class="conteiner">
			<form action="processa_cad_ani.php" method="POST" align="center" class="formCadastro" enctype="multipart/form-data" style="background-color: gold; margin: 2em; border-radius: 10em; padding: 5em;">
				<h5>Cadastre seu animalzinho agora e ajude-o!! </h5><br/>
				<p>
					<label>Nome: </label>
					<input type="text" id="nome_animal" name="nome_animal" onfocusout="validaNomeAnimal()" required />
					<br/><span id="erroNomeA" style="color: red;"></span>
				</p>
				<p>
					<label>Espécie: </label>&emsp;&emsp;
					<select name="especie" required>
						<option value="1">Gato</option>
						<option value="2">Cachorro </option>
					</select>
				</p>
				<p>
					<label>Raça: </label>
					<input type="text" id="raca" name="raca" onfocusout="validaRacaAnimal()" required />
					<br/><span id="erroRacaA" style="color: red;"></span>
				</p>
				<p>
					<label>Cor: </label>
					<input type="text" id="cor" name="cor" onfocusout="validaCorAnimal()" required />
					<br/><span id="erroCorA" style="color: red;"></span>
				</p>
				<p>
					<label>Porte: </label>
					<input type="text" id="porte" name="porte" onfocusout="validaPorteAnimal()" required />
					<br/><span id="erroPorteA" style="color: red;"></span>
				</p>
				<p>
					<label>Sexo: </label>&emsp;&emsp;
					<input type="radio" id="sexo_animal" name="sexo_animal" value="f" onfocusout="validaSexoAnimal()" required />Fêmea&ensp;
					<input type="radio" id="sexo_animal" name="sexo_animal" value="m" onfocusout="validaSexoAnimal()" required />Macho
				</p>
				<p>
					<label>Idade: </label>
					<input type="number" id="idade_animal" name="idade_animal" onfocusout="validaIdadeAnimal()" required />
					<br/><span id="erroIdadeA" style="color: red;"></span>
				</p>
				<p>
					<label>Observações: </label>
					<textarea id="observacao_animal" name="Observacao_animal" required></textarea>
				</p>
				<p>
					<label>Foto:</label>
					<input type="file" name="foto_animal" required /></br>
				</p>
				
				<input type="submit" value="Confirmar" />
			</form>
		</div>
		<?php
			include ('rodape.inc');
		?>
	</body>
</html>