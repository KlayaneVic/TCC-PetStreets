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
	
		<style>
			body{
				background-color: #FFFFE0;
			}
		</style>
	</head>
	<body>
		<?php
			include('barra_navegacao2.inc');
		?>
		<nav class="nav2" style="background-color: gold; color: black;">
			<h5>Pesquisa do Animal</h5>
		</nav><br>
		
			<form action="processa_pesquisa_animais.php" method="POST" style="background-color: gold; border-radius: 5em; box-shadow: 2px 2px 2em #888; 
			margin: 2em 9em 2em 9em; padding: 2em 5em 2em 5em;">
				<div class="form-row">
						<div class="form-group col-md-4">
							<label>Idade </label>
							<select class="form-control" id="idade" name="idade">
								<option value="" selected hidden >---</option>
								<option value="Indefinida">Idade Indefinida</option>
								<option value="Filhote"> Filhote (- 6 Meses)</option>
								<option value="Jovem">Jovem (7 Meses à 2 Anos)</option>
								<option value="Adulto">Adulto (3 anos à 8 Anos)</option>
								<option value="Idoso">Idoso (+ 9 Anos)</option>
							</select>
						</div>	
						<div class="form-group col-md-4">
							<label>Espécie </label>&emsp;&emsp;<br>
										<select class="form-control" name="especie" >
											<option value="" selected hidden >---</option>
											<option value="Gato">Gato</option>
											<option value="Cachorro">Cachorro </option>
										</select>
						</div>
						<div class="form-group col-md-4">
							<label>Porte </label>
								<select class="form-control" name="porte" id="porte">
									<option value="" selected hidden >---</option>
									<option value="Mini">Mini/Toy</option>
									<option value="Pequeno">Pequeno</option>
									<option value="Médio">Médio</option>
									<option value="Grande">Grande</option>
									<option value="Gigante">Gigante</option>
								</select>
						</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-6">
						<label>Cidade </label>
						<input class="form-control" type="text" id="cidade" name="cidade" style="text-transform: capitalize;" placeholder="Cidade"/>
					</div>
					<div class="form-group col-md-6">
						<label>Bairro </label>
						<input class="form-control" type="text" id="bairro" name="bairro" style="text-transform: capitalize;" placeholder="Bairro"/>
					</div>
				</div>
				<div class="form-row">
						<div class="form-group col-md-2">
							<label>Sexo </label><br>
								<input type="radio" hidden id="sexo" name="sexo" value="" checked />
								<input type="radio" id="sexo" name="sexo" value="Fêmea" />Fêmea&ensp;
								<input type="radio" id="sexo" name="sexo" value="Macho" />Macho
						</div>
						<div class="form-group col-md-6">
							<label>Raça </label>
								<input class="form-control" type="text" id="raca" name="raca" style="text-transform: capitalize;" placeholder="Raça"/>
						</div>
						<div class="form-group col-md-4">
							<label>Cor </label>
								<input class="form-control" type="text" id="cor" name="cor" style="text-transform: capitalize;" placeholder="Cor"/>
						</div>
				</div>
				<small class="form-text text-muted">Possiveis Buscas: Espécie, Raça, Cor, Porte, Sexo, Idade, Cidade, Bairro. <br> Obs: Se clicar no botão
				para procurar sem ter selecionado algum campo o sistema ira procurar por todos os animais possiveis para adoção no banco.</small><br>
				<div align="right">
					<input type="reset" class="btn btn-danger" value="Limpar" />
					<input type="submit" value="Procurar" class="btn btn-primary" />
				</div>
			</form>
			<br>
			<?php
				include('rodape.inc');
			?>
	</body>
</html>