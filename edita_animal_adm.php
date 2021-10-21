<?php
	session_start();
	$_SESSION['i'] = 0;
	$_SESSION['j'] = 0;
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
			if(empty($_SESSION)){
				include ('barra_navegacao1.inc');
			}else{
				if($_SESSION["identificador_usu"] == 0){
					include ('barra_navegacao2.inc');
				}else{
					include ('barra_navegacao3.inc');
				}
			}
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
			<form action="processa_edita_ani_adm.php" method="POST" class="formCadastro" enctype="multipart/form-data" style="box-shadow: 2px 2px 2em #888; background-color: gold; margin: 2em 9em 2em 9em; border-radius: 5em; padding: 2em 5em 2em 5em;">
				<small class="form-text text-muted">Campos marcados com * são obrigatorios</small><br>
				<div class="form-row">
						<div class="form-group col-md-4">
							<label>*Nome </label>
							<input class="form-control" type="text" id="novo_nome_animal" name="novo_nome_animal" onfocusout="validaNomeAnimalAtt()" value="<?php echo $resultado['nome_animal'];?>" required />
							<span id="erroNomeAnimal" style="color: red;"></span>
						</div>
						<div class="form-group col-md-4">
							<label>*Espécie </label>&emsp;&emsp;
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
							<label>*Raça </label>
							<input class="form-control" type="text" id="nova_raca_animal" name="nova_raca_animal" onfocusout="validaRacaAnimalAtt()" value="<?php echo $resultado['raca'];?>" required />
							<span id="erroRacaAtt" style="color: red;"></span>
						</div>
				</div>
				<div class="form-row">
						<div class="form-group col-md-6">
							<label>*Cor </label>
							<input class="form-control" type="text" id="nova_cor_animal" name="nova_cor_animal" onfocusout="validaCorAnimalAtt()" value="<?php echo $resultado['cor'];?>" required />
							<span id="erroCorAtt" style="color: red;"></span>
						</div>
						<div class="form-group col-md-6">
							<label>*Porte </label>
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
							<label>*Sexo </label><br>
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
						<div class="form-group col-md-6">
							<label>*Idade </label>
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
								<div class="form-group col-md-4">
								<label>*Status</label>
								<select class="form-control" name="novo_status">
										<option value="" selected hidden>Status Atual</option>
										<option value="1">Adotado</option>
										<option value="0">Não Adotado</option>
								</select>
							</div>
				</div>
				<div class="form-row">
					<label>*Observações </label>
					<textarea class="form-control" id="nova_Observacoes_animal" name="nova_Observacoes_animal" required><?php echo $resultado['observacoes'];?></textarea>
				</div>
				<div class="form-row">
					<label>Foto</label>
					<input class="form-control" type="file" id="nova_foto_animal" name="nova_foto_animal" /></br>
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
									echo "<label id='label_ant'>*Tratamentos (Antigos)</label>";
									while(($resultado = mysqli_fetch_assoc($dados_recuperados)) != null){
										$i = $_SESSION['i'];
										$id = $resultado['id_at'];
										$nome = $resultado['nome'];
										$cat = $resultado['categoria'];
										$data = $resultado['dataTratamento'];
										$obs = $resultado['observacao'];
										$_SESSION["id_at$i"] = $id;
										echo "
											<p align='center' id='paragrafo".$i."' class='paragrafo_trat_ant'>
												Tipo: <input type='text' name='tratamento_inp".$i."' value='$nome - $cat' disabled />
												Data: <input type='date' name='tratamento_data".$i."' value='$data' />
												Observações: <input type='text' name='tratamento_obs".$i."' value='$obs' />
												<button type='button' id='remover_ant".$i."' class='btn btn-danger' value='".$i."' onclick='remover_linha_ant(this);'>Remover</button>
											</p>
											<input type='hidden' id='escondido_ant".$i."' name='hidden_ant".$i."' value='0' />
										";
										$_SESSION['i']++;
									}
								}
							}
				?>
						<p>
							<label style="display: none" id="label_nv">Tratamentos (Novos)</label><br>
							<div id="tratamento_input_nv"></div>
						</p>
				<br><br><div class="form-group" align="right">
					<button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#modalAdicionarNvTratamento">Adicionar Tratamento</button>
					<input type="reset" class="btn btn-danger" value="Limpar" />
					<input type="submit" value="Confirmar" class="btn btn-primary" />
				</div>
			</form>
		</div><br>

        <?php
            include ("rodape_conexao.php");
			include ("rodape.inc");
        ?>
		 <!-- Modal Adicionar -->
        <div class="modal" id="modalAdicionarNvTratamento" tabindex="-1" role="dialog">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header" style="background-color: gold;">
                  <h5 class="modal-title" id="exampleModalLabel">Adicionar Tratamento</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
						<div class="form-row">
							<div class="form-group col-md-6">
									<label>*Data Tratamento </label><br>
									<input class="form-control" type="date" id="data_tratamento_nv" name="data_tratamento_nv" required />
							</div>
							<div class="form-group col-md-6">
								<label>*Tipo Tratamento </label><br>
								<select class="form-control" id="tratamento_nv" name="tratamento_nv">
									<option value="" selected="selected">Selecione o Tratamento</option>
									<?php
										include("cabecalho_conexao.php");
										$SQL = "SELECT * FROM tipo_tratamento";
										$dados_recuperados = mysqli_query($con, $SQL);
										if(mysqli_num_rows($dados_recuperados) > 0){
										
											while (($resultado = mysqli_fetch_assoc($dados_recuperados)) != null) {

												$nome = $resultado['nome'];
												$id = $resultado['id'];
												$categoria = $resultado['categoria'];
												echo "<option value='$id'>$categoria - $nome</option>";
											}
										}else {
											echo "Nao possui Tratamento. <br>";
										}

										include("rodape_conexao.php");
									?>
									
									</select>
									</div>
								</div>
									<div class="form-row">
										<label>*Observações </label><br>
										<textarea class="form-control" id="observacao_tratamento_nv" name="observacao_tratamento_nv" required></textarea>
									</div><br><br>
									
									<div class="form-group" align="right">
									 <button type="button" class="btn btn-primary" id="adicionar_nv_adm">+ Adicionar</button>
									</div>
							</div>
					</div>
            </div>
        </div> 
    </body>
</html>