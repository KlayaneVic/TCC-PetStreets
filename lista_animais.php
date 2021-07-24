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
			<h5>Suas Listas de Animais</h5>
		</nav>
		<br><br>
		<?php
			include('cabecalho_conexao.php');
		?>
		
		<h5 align="center">Seus Animais Disponiveis para Adoção</h5>
			<?php
				$id_usuario = $_SESSION["id_usuario"];
				$SQL = "SELECT a.*, u.*
							FROM animal a
								INNER JOIN usuario u ON a.usuario_cadastro = u.id_usuario 
									WHERE u.id_usuario = $id_usuario AND a.status = 0 ORDER BY a.id DESC
				
						";
				$dados_recuperados = mysqli_query($con, $SQL);
				
					if($dados_recuperados){
						if(mysqli_num_rows($dados_recuperados) > 0){
							$texto = null;
							echo '
							<div class="conteiner" align="center" enctype="multipart/form-data" style="background-color: #FCF6A8; border-radius: 2em; overflow-y: auto; height: 35em; margin: 0em 5em 2em 5em;">
							<table style="border-bottom: 10px solid gold;">
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
										<th style="padding: 1em;">Status </th>
									</tr>
								</thead>
								';
								echo "<tbody align='center' bgcolor='white' style='border-bottom: 2px solid gold;'>";
						while(($resultado = mysqli_fetch_assoc($dados_recuperados)) != null){
					
								echo "<tr style='border-bottom: 2px solid gold;'>";
								$foto = $resultado['foto_animal'];
								echo"<td style='padding: 1em;'><img class='foto_banco' src='fotos_banco/".$foto."' style='border-radius: 2em; height: 12em;  width: 23em;'></td>";
								echo "<td style='padding: 1em;'>" . $resultado['nome_animal'] . "</td>";
								echo "<td style='padding: 1em;'>" . $resultado['especie'] . "</td>";
								echo "<td style='padding: 1em;'>" . $resultado['raca'] . "</td>";
								echo "<td style='padding: 1em;'>" . $resultado['cor'] . "</td>";
								echo "<td style='padding: 1em;'>" . $resultado['porte'] . "</td>";
								echo "<td style='padding: 1em;'>" . $resultado['sexo'] . "</td>";
								if ($resultado['idade'] == 'Indefinida'){
										echo "<td style='padding: 1em;'>Idade Indefinida</td>";
									}elseif($resultado['idade'] == 'Filhote'){
										echo "<td style='padding: 1em;'>Filhote <br>(- 6 Meses)</td>";
									}elseif($resultado['idade'] == 'Jovem'){
										echo "<td style='padding: 1em;'>Jovem <br>(7 Meses à 2 Anos)</td>";
									}elseif($resultado['idade'] == 'Adulto'){
										echo "<td style='padding: 1em;'>Adulto <br>(3 anos à 8 Anos)</td>";
									}else{
										echo "<td style='padding: 1em;'>Idoso <br>(+ 9 Anos)</td>";
									}
								echo "<td style='padding: 1em;' align='justify'>" . $resultado['observacoes'] . "</td>";
								echo"<td style='padding: 1em;'> <a href='edita_animal.php?animal=$resultado[id]' <button class='btn btn-primary'>Editar</button></a></td>";
								echo"<td style='padding: 1em;'> <a href='modifica_status_animal.php?animal=$resultado[id]' onclick='return permissao_status_animal()'><button class='btn btn-primary'>+ Confirmar Adoção</button></a></td>";
							
							echo "</tr>";
							
						}
						echo "</tbody>";
		
						}else{
							$texto = null;
							echo "<h6 align='center' style='border-radius: 5em; background-color: gold; padding: 1em; margin-left: 5em; margin-right: 5em;'>... Você não Possui Animais Cadastrados ...</h6>";
						}
					}
						echo "</table></div>";
						
			?>
			<br><br><br>
		
		<h5 align="center">Seus Animais que Foram Adotados</h5>
			<?php
				$id_usuario = $_SESSION["id_usuario"];
				$SQL = "SELECT a.*, u.*
							FROM animal a
								INNER JOIN usuario u ON a.usuario_cadastro = u.id_usuario 
									WHERE u.id_usuario = $id_usuario AND a.status = 1 ORDER BY a.id DESC
				
						";
				$dados_recuperados = mysqli_query($con, $SQL);
				
					if($dados_recuperados){
						if(mysqli_num_rows($dados_recuperados) > 0){
							$texto = null;
							echo '
							<div class="conteiner" align="center" enctype="multipart/form-data" style="background-color: #FCF6A8; border-radius: 2em; overflow-y: auto; height: 35em; margin: 0em 5em 0em 5em;">
								<table style="border-bottom: 10px solid gold;">
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
										<th style="padding: 1em;">Status </th>
										<th style="padding: 1em;">Permissão </th>
									</tr>
								</thead>
								';
						while(($resultado = mysqli_fetch_assoc($dados_recuperados)) != null){
							echo "<tbody align='center' bgcolor='white' style='border-bottom: 2px solid gold;'>
								<tr style='border-bottom: 2px solid gold;'>";
								$foto = $resultado['foto_animal'];
								echo"<td style='padding: 1em;'><img class='foto_banco' src='fotos_banco/".$foto."' style='border-radius: 2em; height: 12em;  width: 23em;'></td>";
								echo "<td style='padding: 1em;'>" . $resultado['nome_animal'] . "</td>";
								echo "<td style='padding: 1em;'>" . $resultado['especie'] . "</td>";
								echo "<td style='padding: 1em;'>" . $resultado['raca'] . "</td>";
								echo "<td style='padding: 1em;'>" . $resultado['cor'] . "</td>";
								echo "<td style='padding: 1em;'>" . $resultado['porte'] . "</td>";
								echo "<td style='padding: 1em;'>" . $resultado['sexo'] . "</td>";
									if ($resultado['idade'] == 'Indefinida'){
										echo "<td style='padding: 1em;'>Idade Indefinida</td>";
									}elseif($resultado['idade'] == 'Filhote'){
										echo "<td style='padding: 1em;'>Filhote <br>(- 6 Meses)</td>";
									}elseif($resultado['idade'] == 'Jovem'){
										echo "<td style='padding: 1em;'>Jovem <br>(7 Meses à 2 Anos)</td>";
									}elseif($resultado['idade'] == 'Adulto'){
										echo "<td style='padding: 1em;'>Adulto <br>(3 anos à 8 Anos)</td>";
									}else{
										echo "<td style='padding: 1em;'>Idoso <br>(+ 9 Anos)</td>";
									}
								echo "<td style='padding: 1em;' align='justify'>" . $resultado['observacoes'] . "</td>";
								echo "<td style='padding: 1em; color: green;'> Animal Adotado ✔</td>";
								if ($resultado['permissao'] == 0){
								echo "<td style='padding: 1em;'><a href='modifica_permissao_animal.php?animal=$resultado[id]' onclick='return permissao_divulga_animal()'><button class='btn btn-primary'>Permitir Divulgação</button></a></td>";
								}else{
									echo "<td style='padding: 1em; color: green;'> Animal Divulgado ✔</td>";
								}
							echo "</tr>
							</tbody>";
						} 
						}else{
							$texto = null;
							echo "<h6 align='center' style='border-radius: 5em; background-color: gold; padding: 1em; margin-left: 5em; margin-right: 5em;'>... Você não Possui Animais que foram Adotados ...</h6>";
						}
					}
					echo "</table></div>";
				?>
		<br><br>
		
		<?php
			include('rodape_conexao.php'); 
			include ('rodape.inc');
		?>
	</body>
</html>