<?php
	session_start();
	$_SESSION['i'] = 0;
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
		<script src="js/arquivo_externo.js"></script>
	
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
			<form action="processa_cad_ani.php" id="form_animal" method="POST" class="formCadastro" enctype="multipart/form-data" 
			style="background-color: gold; border-radius: 5em; box-shadow: 2px 2px 2em #888; margin: 2em 9em 2em 9em; padding: 2em 5em 2em 5em;">
				<div class="form-row">
						<div class="form-group col-md-6">
								<label>Nome </label><br>
								<input class="form-control" type="text" id="nome_animal" name="nome_animal" style="text-transform: capitalize;" onfocusout="validaNomeAnimal()" placeholder="Nome do Animal" required />
								<span id="erroNomeA" style="color: red;"></span>
						</div>
						<div class="form-group col-md-2">
							<label>Idade </label>
							<select class="form-control" id="idade_animal" name="idade_animal" onfocusout="validaIdadeAnimal()" required>
								<option value="" selected hidden >---</option>
								<option value="Indefinida">Não Sei</option>
								<option value="Filhote"> Filhote (- 6 Meses)</option>
								<option value="Jovem">Jovem (7 Meses à 2 Anos)</option>
								<option value="Adulto">Adulto (3 anos à 8 Anos)</option>
								<option value="Idoso">Idoso (+ 9 Anos)</option>
							</select>
							<span id="erroIdadeA" style="color: red;"></span>
						</div>
						<div class="form-group col-md-4">
							<label>Espécie </label>&emsp;&emsp;<br>
							<select class="form-control" name="especie" id="especie" onfocusout="validaEspecieAnimal()" required>
								<option value="" selected hidden >---</option>
								<option value="Gato">Gato</option>
								<option value="Cachorro">Cachorro </option>
							</select>
							<span id="erroEspecieA" style="color: red;"></span>
						</div>
				</div>
				<div class="form-row">
						<div class="form-group col-md-2">
							<label>Sexo </label><br>
							<input type="radio" id="sexo_animal" name="sexo_animal" value="Fêmea" onfocusout="validaSexoAnimal()" required />Fêmea&ensp;
							<input type="radio" id="sexo_animal" name="sexo_animal" value="Macho" onfocusout="validaSexoAnimal()" required />Macho
						</div>
						<div class="form-group col-md-4">
								<label>Raça </label>
								<input class="form-control" type="text" id="raca" name="raca" style="text-transform: capitalize;" onfocusout="validaRacaAnimal()" placeholder="Raça" required />
								<span id="erroRacaA" style="color: red;"></span>
						</div>
						<div class="form-group col-md-4">
							<label>Cor </label>
							<input class="form-control" type="text" id="cor" name="cor" style="text-transform: capitalize;" onfocusout="validaCorAnimal()" placeholder="Cor" required />
							<span id="erroCorA" style="color: red;"></span>
						</div>
						<div class="form-group col-md-2">
							<label>Porte </label>
							<select class="form-control" name="porte" id="porte" onfocusout="validaPorteAnimal()" required>
								<option value="" selected hidden >---</option>
								<option value="Mini">Mini/Toy</option>
								<option value="Pequeno">Pequeno</option>
								<option value="Médio">Médio</option>
								<option value="Grande">Grande</option>
								<option value="Gigante">Gigante</option>
							</select>
							<span id="erroPorteA" style="color: red;"></span>
						</div>
				</div>
				<div class="form-row">
							<label>Foto</label>
							<input class="form-control" type="file" name="foto_animal" required /></br>
				</div>
				<div class="form-row">
							<label>Observações </label>
							<textarea class="form-control" id="observacao_animal" name="Observacao_animal" placeholder="Conte um pouco mais sobre este animal, como sugestão pode ser o que ele gosta, alguma mania, ou até onde o encontrou." required></textarea>
				</div>
						<p>
							<label style="display: none" id="label">Tratamentos</label>
							<div id="tratamento_input"></div></br>
						</p>
				<div class="form-group" align="right">
					<button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#modalAdicionarTratamento">Adicionar Tratamento</button>
					<input type="reset" class="btn btn-danger" value="Limpar" />
					<input type="submit" value="Confirmar" class="btn btn-primary" />
				</div>
			</form>
		</div><br>
		
		<?php
			include ('rodape.inc');
		?>
		
		 <!-- Modal Adicionar -->
        <div class="modal" id="modalAdicionarTratamento" tabindex="-1" role="dialog">
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
									<label>Data Tratamento </label><br>
									<input class="form-control" type="date" id="data_tratamento" name="data_tratamento" required />
							</div>
							<div class="form-group col-md-6">
								<label>Tipo Tratamento </label><br>
								<select class="form-control" id="tratamento" name="tratamento">
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
										<label>Observações </label><br>
										<textarea class="form-control" id="observacao_tratamento" name="observacao_tratamento" required></textarea>
									</div><br><br>
									
									<div class="form-group" align="right">
									 <button type="button" class="btn btn-primary" id="adicionar">+ Adicionar</button>
									</div>
							</div>
					</div>
            </div>
        </div> 
	</body>
</html>