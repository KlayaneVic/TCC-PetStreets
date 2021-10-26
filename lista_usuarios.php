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
			include("barra_navegacao3.inc");
		?>
		
		<nav class="nav2" style="background-color: gold; color: black;">
			<h5 style="font-weight: bold;">Listas de Usuários</h5>
		</nav>
		<br><br>
		<?php
			include('cabecalho_conexao.php');
		?>
		
		<h5 align="center" style="font-weight: bold;">Usuários Cadastrados no Banco</h5>
			<?php
				$id_usuario = $_SESSION["id_usuario"];
				$SQL = 'SELECT * FROM usuario';
			
				$dados_recuperados = mysqli_query($con, $SQL);
				
					if($dados_recuperados){
						if(mysqli_num_rows($dados_recuperados) > 0){
							$texto = null;
							echo '
							<div class="conteiner" align="center" enctype="multipart/form-data" style="background-color: #FCF6A8; border-radius: 2em; overflow-y: auto; height: 35em; margin: 0em 5em 2em 5em;">
							<table style="border-bottom: 10px solid gold;">
								<thead  align="center" bgcolor="gold">
									<tr>
										<th style="padding: 1em;">ID </th>
										<th style="padding: 1em;">Foto </th>
										<th style="padding: 1em;">Especial </th>
										<th style="padding: 1em;">Nome </th>
										<th style="padding: 1em;">Email </th>
										<th style="padding: 1em;">Senha </th>
										<th style="padding: 1em;">Telefone </th>
										<th style="padding: 1em;">Cidade </th>
										<th style="padding: 1em;">Bairro </th>
										<th style="padding: 1em;">Funções</th>
									</tr>
								</thead>
								';
								echo "<tbody align='center' bgcolor='white' style='border-bottom: 2px solid gold;'>";
						while(($resultado = mysqli_fetch_assoc($dados_recuperados)) != null){
					
								echo "<tr style='border-bottom: 2px solid gold;'>";
								$foto = $resultado['foto_usuario'];
								$id = $resultado['id_usuario'];
								echo "<td style='padding: 1em;'>" . $resultado['id_usuario'] . "</td>";
								if ($foto != ""){
									echo"<td style='padding: 1em;'><img class='foto_banco' src='fotos_banco/".$foto."' style='border-radius: 2em; height: 12em;  width: 23em;'></td>";
								}else{
									echo'<td style="padding: 1em;"><img class="foto_banco" src="img/usuario.png" style="border-radius: 2em; height: 12em;  width: 23em;"></td>';
								}
								if($resultado['adm'] == 0){
									echo "<td style='padding: 1em;'> ".$resultado['tipo']." </td>";
								}else{
									if ($id_usuario == $id){
										echo "<td style='padding: 1em; color: blue;'> ADMIN (Você) </td>";
									}else{
										echo "<td style='padding: 1em;'> ADMIN </td>";
									}
								}
								echo "<td style='padding: 1em;'>" . $resultado['nome_usuario'] . "</td>";
								echo "<td style='padding: 1em;'>" . $resultado['email'] . "</td>";
								if($resultado['adm'] == 0){
									echo "<td style='padding: 1em;'>" . $resultado['senha'] . "</td>";
									echo "<td style='padding: 1em;'>" . $resultado['telefone'] . "</td>";
									echo "<td style='padding: 1em;'>" . $resultado['cidade'] . "</td>";
									echo "<td style='padding: 1em;'>" . $resultado['bairro'] . "</td>";
									echo"<td style='padding: 1em;'><a href='excluir_usuario.php?usuario=$resultado[id_usuario]' <button class='btn btn-danger' style='font-weight: bold;' onclick=' return permissao_excluir_usuario()'>Excluir</button></a><br><br>
									<a href='edita_usuario.php?usuario=$resultado[id_usuario]' <button class='btn btn-primary' style='font-weight: bold;'>Editar</button></a></td>";
								}else{
									echo "
										<td style='padding: 1em;'> --- </td>
										<td style='padding: 1em;'> --- </td>
										<td style='padding: 1em;'> --- </td>
										<td style='padding: 1em;'> --- </td>
										<td style='padding: 1em;'> --- </td>
									";
								}
}
						echo "</tbody>";
		
						}else{
							$texto = null;
							echo "<h6 align='center' style='border-radius: 5em; background-color: gold; padding: 1em; margin-left: 5em; margin-right: 5em; font-weight: bold;'>... Não Possui Usuários Cadastrados ...</h6>";
						}
					}
						echo "</table></div>";			
			?>
		<?php
		include('rodape_conexao.php'); 
		include ('rodape.inc');
		?>
	</body>
</html>