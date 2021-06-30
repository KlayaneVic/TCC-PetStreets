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
			<h5>Editar Dados Do Animal</h5>
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
			<form action="processa_edita_ani.php" method="POST" align="center" class="formCadastro" enctype="multipart/form-data" style="background-color: gold; margin: 2em; border-radius: 10em; padding: 5em;">
				<h5>Editar Informações do Animal: </h5><br/>
				<p>
					<label>Nome: </label>
					<input type="text" id="novo_nome_animal" name="novo_nome_animal" onfocusout="validaNomeAnimalAtt()" value="<?php echo $resultado['nome'];?>" required />
					<br/><span id="erroNomeAnimal" style="color: red;"></span>
				</p>
				<p>
					<label>Espécie: </label>&emsp;&emsp;
					<select name="nova_especie" required>
						<option value="1">Gato</option>
						<option value="2">Cachorro </option>
					</select>
				</p>
				<p>
					<label>Raça: </label>
					<input type="text" id="nova_raca_animal" name="nova_raca_animal" onfocusout="validaRacaAnimalAtt()" value="<?php echo $resultado['raca'];?>" required />
					<br/><span id="erroRacaAtt" style="color: red;"></span>
				</p>
				<p>
					<label>Cor: </label>
					<input type="text" id="nova_cor_animal" name="nova_cor_animal" onfocusout="validaCorAnimalAtt()" value="<?php echo $resultado['cor'];?>" required />
					<br/><span id="erroCorAtt" style="color: red;"></span>
				</p>
				<p>
					<label>Porte: </label>
					<input type="text" id="novo_porte_animal" name="novo_porte_animal" onfocusout="validaPorteAnimalAtt()" value="<?php echo $resultado['porte'];?>" required />
					<br/><span id="erroPorteAtt" style="color: red;"></span>
				</p>
				<p>
					<label>Sexo: </label>&emsp;&emsp;
					<input type="radio" id="novo_sexo_animal" name="novo_sexo_animal" value="f" onfocusout="validaSexoAnimalAtt()" required />Fêmea&ensp;
					<input type="radio" id="novo_sexo_animal" name="novo_sexo_animal" value="m" onfocusout="validaSexoAnimalAtt()" required />Macho
				</p>
				<p>
					<label>Idade: </label>
					<input type="number" id="nova_idade_animal" name="nova_idade_animal" onfocusout="validaIdadeAnimalAtt()" value="<?php echo $resultado['idade'];?>" required />
					<br/><span id="erroIdadeAtt" style="color: red;"></span>
				</p>
				<p>
					<label>Observações: </label>
					<textarea id="nova_Observacoes_animal" name="nova_Observacoes_animal" required><?php echo $resultado['observacoes'];?></textarea>
				</p>
				<p>
					<label>Foto:</label>
					<input type="file" id="nova_foto_animal" name="nova_foto_animal" required /></br>
				</p>

                <input type="hidden" id="id" name="id" value="<?php echo $id_animal ?>" />
				
				<input type="submit" value="Confirmar" />
			</form>
		</div>

        <?php
            include ("rodape_conexao.php");
			include ("rodape.inc");
        ?>
    </body>
</html>