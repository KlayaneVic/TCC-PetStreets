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
			include("barra_navegacao2.inc");
		?>
		
		<nav class="nav2" style="background-color: gold; color: black;">
			<h5>Editar Dados do Animal</h5>
		</nav>
		<br/>
		<?php
			include('cabecalho_conexao.php');

            $texto = null;
            $id_animal = $_GET['animal'];
            $SQL = "SELECT * FROM animal WHERE id = $id_animal";

            $dados_recuperados = mysqli_query($con, $SQL);
            $resultado = mysqli_fetch_assoc($dados_recuperados);
		?>
            <div class="conteiner">
			<form action="processa_edita_ani.php" method="POST" class="formCadastro" enctype="multipart/form-data" style="box-shadow: 2px 2px 2em #888; background-color: gold; margin: 2em 9em 2em 9em; border-radius: 5em; padding: 2em 5em 2em 5em;">
				<div class="form-row">
						<div class="form-group col-md-4">
							<label>Nome </label>
							<input class="form-control" type="text" id="novo_nome_animal" name="novo_nome_animal" onfocusout="validaNomeAnimalAtt()" value="<?php echo $resultado['nome_animal'];?>" required />
							<span id="erroNomeAnimal" style="color: red;"></span>
						</div>
						<div class="form-group col-md-4">
							<label>Espécie </label>&emsp;&emsp;
							<select class="form-control" name="nova_especie" required>
							<?php
								if($resultado['especie'] == 'Cachorro'){
									echo '
									<option value="Gato">Gato</option>
									<option value="Cachorro" selected>Cachorro </option>
									';
								}else{
									echo '
									<option value="Gato" selected>Gato</option>
									<option value="Cachorro">Cachorro </option>
									';
								}
							?>
							</select>
						</div>
						<div class="form-group col-md-4">
							<label>Raça </label>
							<input class="form-control" type="text" id="nova_raca_animal" name="nova_raca_animal" onfocusout="validaRacaAnimalAtt()" value="<?php echo $resultado['raca'];?>" required />
							<span id="erroRacaAtt" style="color: red;"></span>
						</div>
				</div>
				<div class="form-row">
						<div class="form-group col-md-6">
							<label>Cor </label>
							<input class="form-control" type="text" id="nova_cor_animal" name="nova_cor_animal" onfocusout="validaCorAnimalAtt()" value="<?php echo $resultado['cor'];?>" required />
							<span id="erroCorAtt" style="color: red;"></span>
						</div>
						<div class="form-group col-md-6">
							<label>Porte </label>
							<select class="form-control" name="novo_porte_animal" id="novo_porte_animal" onfocusout="validaPorteAnimalAtt()" required>
								<?php
									if($resultado['porte'] == 'Mini'){
										echo '
											<option value="Mini" selected>Mini/Toy</option>
											<option value="Pequeno">Pequeno</option>
											<option value="Médio">Médio</option>
											<option value="Grande">Grande</option>
											<option value="Gigante">Gigante</option>
										';
									}elseif($resultado['porte'] == 'Pequeno'){
										echo '
											<option value="Mini">Mini/Toy</option>
											<option value="Pequeno" selected>Pequeno</option>
											<option value="Médio">Médio</option>
											<option value="Grande">Grande</option>
											<option value="Gigante">Gigante</option>
										';
									}elseif($resultado['porte'] == 'Médio'){
										echo '
											<option value="Mini">Mini/Toy</option>
											<option value="Pequeno">Pequeno</option>
											<option value="Médio" selected>Médio</option>
											<option value="Grande">Grande</option>
											<option value="Gigante">Gigante</option>
										';
									}elseif($resultado['porte'] == 'Grande'){
										echo '
											<option value="Mini">Mini/Toy</option>
											<option value="Pequeno">Pequeno</option>
											<option value="Médio">Médio</option>
											<option value="Grande" selected>Grande</option>
											<option value="Gigante">Gigante</option>
										';
									}else{
										echo '
											<option value="Mini">Mini/Toy</option>
											<option value="Pequeno">Pequeno</option>
											<option value="Médio">Médio</option>
											<option value="Grande">Grande</option>
											<option value="Gigante" selected>Gigante</option>
										';
									}
							?>
							</select>
							<span id="erroPorteAtt" style="color: red;"></span>
						</div>
				</div>
				<div class="form-row">
						<div class="form-group col-md-2">
							<label>Sexo </label><br>
							<?php
								if($resultado['sexo'] == 'Macho'){
									echo '
										<input type="radio" id="novo_sexo_animal" name="novo_sexo_animal" value="Fêmea" onfocusout="validaSexoAnimalAtt()" required />Fêmea&ensp;
										<input type="radio" id="novo_sexo_animal" name="novo_sexo_animal" value="Macho" onfocusout="validaSexoAnimalAtt()" required checked />Macho			
									';
								}else{
									echo '
										<input type="radio" id="novo_sexo_animal" name="novo_sexo_animal" value="Fêmea" onfocusout="validaSexoAnimalAtt()" required checked />Fêmea&ensp;
										<input type="radio" id="novo_sexo_animal" name="novo_sexo_animal" value="Macho" onfocusout="validaSexoAnimalAtt()" required />Macho			
									';
								}
							?>
						</div>
						<div class="form-group col-md-10">
							<label>Idade </label>
							<select class="form-control" id="nova_idade_animal" name="nova_idade_animal" onfocusout="validaIdadeAnimalAtt()" required>
								<?php
									if($resultado['idade'] == 'Indefinida'){
										echo '
											<option value="Indefinida" selected>Não Sei</option>
											<option value="Filhote"> Filhote (- 6 Meses)</option>
											<option value="Jovem">Jovem (7 Meses à 2 Anos)</option>
											<option value="Adulto">Adulto (3 anos à 8 Anos)</option>
											<option value="Idoso">Idoso (+ 9 Anos)</option>
										';
									}elseif($resultado['idade'] == 'Filhote'){
										echo '
											<option value="Indefinida">Não Sei</option>
											<option value="Filhote" selected> Filhote (- 6 Meses)</option>
											<option value="Jovem">Jovem (7 Meses à 2 Anos)</option>
											<option value="Adulto">Adulto (3 anos à 8 Anos)</option>
											<option value="Idoso">Idoso (+ 9 Anos)</option>
										';
									}elseif($resultado['idade'] == 'Jovem'){
										echo '
											<option value="Indefinida">Não Sei</option>
											<option value="Filhote"> Filhote (- 6 Meses)</option>
											<option value="Jovem" selected>Jovem (7 Meses à 2 Anos)</option>
											<option value="Adulto">Adulto (3 anos à 8 Anos)</option>
											<option value="Idoso">Idoso (+ 9 Anos)</option>
										';
									}elseif($resultado['idade'] == 'Adulto'){
										echo '
											<option value="Indefinida">Não Sei</option>
											<option value="Filhote"> Filhote (- 6 Meses)</option>
											<option value="Jovem">Jovem (7 Meses à 2 Anos)</option>
											<option value="Adulto" selected>Adulto (3 anos à 8 Anos)</option>
											<option value="Idoso">Idoso (+ 9 Anos)</option>
										';
									}else{
										echo '
											<option value="Indefinida">Não Sei</option>
											<option value="Filhote"> Filhote (- 6 Meses)</option>
											<option value="Jovem">Jovem (7 Meses à 2 Anos)</option>
											<option value="Adulto">Adulto (3 anos à 8 Anos)</option>
											<option value="Idoso" selected>Idoso (+ 9 Anos)</option>
										';
									}
							?>
							</select>
							<span id="erroIdadeAtt" style="color: red;"></span>
						</div>
				</div>
				<div class="form-row">
					<label>Observações </label>
					<textarea class="form-control" id="nova_Observacoes_animal" name="nova_Observacoes_animal" required><?php echo $resultado['observacoes'];?></textarea>
				</div>
				<div class="form-row">
					<label>Foto</label>
					<input class="form-control" type="file" id="nova_foto_animal" name="nova_foto_animal" required /></br>
				</div>

                <input type="hidden" id="id" name="id" value="<?php echo $id_animal ?>" />
				<?php
					$SQL = "SELECT ta.*, tp.*
										FROM animal a 
											INNER JOIN animal_tratamento ta ON a.id = ta.idAnimal 
											INNER JOIN tipo_tratamento tp ON ta.idTratamento=tp.id 
												WHERE a.id = $id_animal";
					$dados_recuperados = mysqli_query($con, $SQL);
							if($dados_recuperados){
								if(mysqli_num_rows($dados_recuperados) > 0){
									echo "<label>Tratamentos</label>";
									while(($resultado = mysqli_fetch_assoc($dados_recuperados)) != null){
										$nome = $resultado['nome'];
										$cat = $resultado['categoria'];
										$data = $resultado['dataTratamento'];
										$obs = $resultado['observacao'];
										echo "
											<p align='center'>
												Tipo: <input type='text' name='tratamento_inp' value='$nome - $cat' disabled />
												Data: <input type='date' name='tratamento_data' value='$data' />
												Observações: <input type='text' name='tratamento_obs' value='$obs' />
											</p><br>
										";
									}
								}
							}
				?>
				<br><br><div class="form-group" align="right">
					<input type="reset" class="btn btn-danger" value="Limpar" />
					<input type="submit" value="Confirmar" class="btn btn-primary" />
				</div>
			</form>
		</div><br>

        <?php
            include ("rodape_conexao.php");
			include ("rodape.inc");
        ?>
    </body>
</html>