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
			<h5>Suas listas de animais</h5>
		</nav>
		<br/>
		<?php
			include('cabecalho_conexao.php');
		?>
		<div class="conteiner" align="center" enctype="multipart/form-data" style="overflow: auto; width: 100%; height: 100%;">
			<h5>Lista de Animais Cadastrados</h5><br/>
			<?php
				$id_usuario = $_SESSION["id_usuario"];
				$SQL = "SELECT * FROM animal WHERE usuario_cadastro = $id_usuario";
				
				$dados_recuperados = mysqli_query($con, $SQL);
					echo "<table style='border-bottom: 10px solid gold;'>";
					if($dados_recuperados){
						if(mysqli_num_rows($dados_recuperados) > 0){
							$texto = null;
							echo '
								<thead  align="center" bgcolor="gold">
									<tr>
										<th style="padding: 1em;">Foto </th>
										<th style="padding: 1em;">Nome </th>
										<th style="padding: 1em;">Espécie </th>
										<th style="padding: 1em;">Raça </th>
										<th style="padding: 1em;">Cor </th>
										<th style="padding: 1em;">Porte </th>
										<th style="padding: 1em;">Sexo </th>
										<th style="padding: 1em;">Idade </th>
										<th style="padding: 1em;">Observações </th>
										<th style="padding: 1em;">Alterar </th>
										<th style="padding: 1em;">Excluir </th>
									</tr>
								</thead>
								';
								echo "<tbody align='center' bgcolor='white' style='border-bottom: 2px solid gold;'>";
						while(($resultado = mysqli_fetch_assoc($dados_recuperados)) != null){
					
								echo "<tr style='border-bottom: 2px solid gold;'>";
								$foto = $resultado['foto'];
								echo"<td style='padding: 1em;'><img class='foto_banco' src='fotos_banco/".$foto."' style='border-radius: 2em; height: 12em;  width: 23em;'></td>";
								echo "<td style='padding: 1em;'>" . $resultado['nome'] . "</td>";
								echo "<td style='padding: 1em;'>" . $resultado['especie'] . "</td>";
								echo "<td style='padding: 1em;'>" . $resultado['raca'] . "</td>";
								echo "<td style='padding: 1em;'>" . $resultado['cor'] . "</td>";
								echo "<td style='padding: 1em;'>" . $resultado['porte'] . "</td>";
								echo "<td style='padding: 1em;'>" . $resultado['sexo'] . "</td>";
								echo "<td style='padding: 1em;'>" . $resultado['idade'] . "</td>";
								echo "<td style='padding: 1em;'>" . $resultado['observacoes'] . "</td>";
								echo"<td style='padding: 1em;'> <a href='edita_animal.php?animal=$resultado[id]' <button class='btn btn-primary'>Editar</button></a></td>";
								echo"<td style='padding: 1em;'> <a href='remove_animal.php?animal=$resultado[id]' onclick='return permissao_excluir_animal()'><button class='btn btn-primary'>Excluir</button></a></td>";
							
							echo "</tr>";
							
						}
						echo "</tbody>";
		
						}else{
							$texto = null;
							echo "<h6 style='border-radius: 5em; background-color: gold; padding: 1em; margin-left: 5em; margin-right: 5em;'>... Você não Possui Animais Cadastrados ...</h6>";
						}
					}
						echo "</table>";
						
			?>
		</div>
		
		<br/><br/><br/>
		
		<div class="conteiner" align="center" enctype="multipart/form-data">
			<h5>Lista de Animais Adotados</h5><br/>
			<?php
				$id_usuario = $_SESSION["id_usuario"];
				$SQL = "SELECT * FROM animal WHERE usuario_adocao = $id_usuario";
					
					$dados_recuperados = mysqli_query($con, $SQL);
					echo "<table style='border-bottom: 10px solid gold;'>";
					if($dados_recuperados){
						if(mysqli_num_rows($dados_recuperados) > 0){
							$texto = null;
							echo '
								<thead  align="center" bgcolor="gold">
									<tr>
										<th style="padding: 1em; ">Foto </th>
										<th style="padding: 1em;">Nome </th>
										<th style="padding: 1em;">Espécie </th>
										<th style="padding: 1em;">Raça </th>
										<th style="padding: 1em;">Cor </th>
										<th style="padding: 1em;">Porte </th>
										<th style="padding: 1em;">Sexo </th>
										<th style="padding: 1em;">Idade </th>
										<th style="padding: 1em;">Observações </th>
										<th style="padding: 1em;">Excluir </th>
									</tr>
								</thead>
								';
						while(($resultado = mysqli_fetch_assoc($dados_recuperados)) != null){
							echo "<tbody align='center' bgcolor='white' style='border-bottom: 2px solid gold;'>
								<tr style='border-bottom: 2px solid gold;'>";
								$foto = $resultado['foto'];
								echo"<td style='padding: 1em;'><img class='foto_banco' src='fotos_banco/".$foto."' style='border-radius: 2em; height: 12em;  width: 23em;'></td>";
								echo "<td style='padding: 1em;'>" . $resultado['nome'] . "</td>";
								echo "<td style='padding: 1em;'>" . $resultado['especie'] . "</td>";
								echo "<td style='padding: 1em;'>" . $resultado['raca'] . "</td>";
								echo "<td style='padding: 1em;'>" . $resultado['cor'] . "</td>";
								echo "<td style='padding: 1em;'>" . $resultado['porte'] . "</td>";
								echo "<td style='padding: 1em;'>" . $resultado['sexo'] . "</td>";
								echo "<td style='padding: 1em;'>" . $resultado['idade'] . "</td>";
								echo "<td style='padding: 1em;'>" . $resultado['observacoes'] . "</td>";
								echo"<td> <a href='remove_animal.php?animal=$resultado[id]' onclick='return permissao_excluir_animal()'><button class='btn btn-primary'>Excluir</button></a></td>";
							echo "</tr>
							</tbody>";
						} 
						}else{
							$texto = null;
							echo "<h6 style='border-radius: 5em; background-color: gold; padding: 1em; margin-left: 5em; margin-right: 5em;'>... Você não Possui Animais Adotados ...</h6>";
						}
					}
					echo "</table><br>";
				?>
		</div>
		
		<?php
			include('rodape_conexao.php'); 
			include ('rodape.inc');
		?>
	</body>
</html>