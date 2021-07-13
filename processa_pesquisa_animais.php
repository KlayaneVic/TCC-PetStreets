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
			<h5>Pesquisa do Animal</h5>
		</nav>
		<?php
			include('cabecalho_conexao.php');

            $texto = null;
            $SQL = "SELECT a.*, u.*
						FROM animal a
							INNER JOIN usuario u 
								ON a.usuario_cadastro = u.id_usuario and a.status = 0";
			if ($_POST['sexo'] != ""){
				$sexo = $_POST['sexo'];
				$SQL .= " and a.sexo = '$sexo'";
			}
			if ($_POST['idade'] != ""){
				$idade = $_POST['idade'];
				$SQL .= " and a.idade = '$idade'";
			}
			if ($_POST['raca'] != ""){
				$raca = $_POST['raca'];
				$SQL .= " and a.raca = '$raca'";
			}
			if ($_POST['porte'] != ""){
				$porte = $_POST['porte'];
				$SQL .= " and a.porte = '$porte'";
			}
			if ($_POST['especie'] != ""){
				$especie = $_POST['especie'];
				$SQL .= " and a.especie = '$especie'";
			}
			if ($_POST['cor'] != ""){
				$cor = $_POST['cor'];
				$SQL .= " and a.cor = '$cor'";
			}
			if ($_POST['cidade'] != ""){
				$cidade = $_POST['cidade'];
				$SQL .= " and u.cidade = '$cidade'";
			}
			if ($_POST['bairro'] != ""){
				$bairro = $_POST['bairro'];
				$SQL .= " and u.bairro = '$bairro'";
			}
			

            $dados_recuperados = mysqli_query($con, $SQL);
			$resultado= null;
			
			echo '<br><br><div class="card-deck" style="margin: 0em 2em 0em 2em;">';
			
				if(mysqli_num_rows($dados_recuperados) > 0){
					while (($resultado = mysqli_fetch_assoc($dados_recuperados)) != null){
						$foto = $resultado["foto_animal"];
						$id = $resultado["id"];
						echo "
						<div class='form-group col-md-3'><div class='card' style='box-shadow: 2px 2px 2em #888; margin: 0em 0em 2em 0em; border-radius: 2em;'>
									<img class='card-img-top' src='fotos_banco/".$foto."' alt='Imagem de capa do card' style='height: 15em; padding: 0.8em 0.8em 0em 0.8em; border-radius: 3em;'>
									<div class='card-body'>
									  <h5 class='card-title' align='center'><b>". $resultado['nome_animal'].", Porte ". $resultado['porte']."</b> <br> (" . $resultado['bairro'].", ". $resultado['cidade'] .")</h5>
									  <p class='card-text'>
											<p align='justify'>". $resultado['observacoes']."</p>
									  </p>
									</div>
									<div class='card-footer' align='center'>
										<h4><a href='mostra_animal.php?animal=$resultado[id]' <button class='btn btn-primary'>QUERO ADOTAR!!</a></h4>
									</div>
									
								</div></div>
						";
					}
				} else {
					echo ("<script language='JavaScript'>
									window.alert('Não encontramos animal com esta informação, tente procurar por outra.')
									window.location.href='pesquisa_animais.php';
						</script>");
				}
			
			echo '</div><br>';
			
			include ("rodape_conexao.php");
		?>
	</body>
</html>