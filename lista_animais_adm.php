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
			<h5>Listas de Animais</h5>
		</nav>
		<br><br>
		<?php
			include('cabecalho_conexao.php');
		?>
		
		<h5 align="center">Animais Não/Adotados Disponiveis no Banco</h5>
			<?php
				$id_usuario = $_SESSION["id_usuario"];
				$SQL = "SELECT a.*, u.*
							FROM animal a 
								INNER JOIN usuario u ON a.usuario_cadastro = u.id_usuario ORDER BY u.nome_usuario ASC
				
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
										<th style="padding: 1em;">Publicante</th>
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
										<th style="padding: 1em;">Funções </th>
									</tr>
								</thead>
								';
								echo "<tbody align='center' bgcolor='white' style='border-bottom: 2px solid gold;'>";
						while(($resultado = mysqli_fetch_assoc($dados_recuperados)) != null){
					
								echo "<tr style='border-bottom: 2px solid gold;'>";
								$foto = $resultado['foto_animal'];
								echo"<td style='padding: 1em;'><img class='foto_banco' src='fotos_banco/".$foto."' style='border-radius: 2em; height: 12em;  width: 23em;'></td>";
								echo "<td style='padding: 1em;'>" . $resultado['nome_usuario'] . "</td>";
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
								if ($resultado['status'] == 0){
									echo "<td style='padding: 1em; color: red;'> Não Adotado <b>X</b></td>";
								}else{
									echo "<td style='padding: 1em; color: green;'>Adotado ✔</td>
									";
									
								}
								if (($resultado['permissao'] == 0) && ($resultado['status'] == 0)){
										echo "<td style='padding: 1em; color: red;'>Não Divulgado <b>X</b></td>";
								}elseif ($resultado['permissao'] == 0){
									echo "<td style='padding: 1em;'><a href='permissao_divulga_adm.php?animal=$resultado[id]' onclick='return permissao_divulga_adm()'><button class='btn btn-primary'>Permitir Divulgação</button></a></td>";
								}else{
									echo "<td style='padding: 1em;'><a href='permissao_remove_adm.php?animal=$resultado[id]' onclick='return permissao_remove_adm()'><button class='btn btn-danger'>Remover Divulgação</button></a></td>";
								}
								echo"<td style='padding: 1em;'> <a href='exclui_animal.php?animal=$resultado[id]' onclick='return permissao_exclui_animal()'><button class='btn btn-danger'>Excluir</button></a><br><br>
								<a href='edita_animal_adm.php?animal=$resultado[id]'> <button class='btn btn-primary'>Editar</button></a></td>";
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
		
		<?php
			include('rodape_conexao.php'); 
			include ('rodape.inc');
		?>
	</body>
</html>