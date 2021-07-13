<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Pagina Inicial</title>
		
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="css/estilo.css" /> 
    	<script src="js/jquery-3.3.1.min.js"></script> 
    	<script src="js/popper.min.js"></script>
    	<script src="js/bootstrap.min.js"></script>
		<style>
			body{
				background-color: #FFFFE0;
			}
		</style>
	</head>
	<body>
		<!-- Barras de Navegação -->
		<?php
			include('barra_navegacao2.inc');
		?>
        <nav class="nav2" style="background-color: gold; color: black;">
			<h5>Animal Selecionado</h5>
		</nav>
		
<?php
    include ("cabecalho_conexao.php");

    $id_animal = $_GET['animal'];
	$texto = null;
    $SQL = "SELECT a.*, u.*
				FROM animal a
					INNER JOIN usuario u ON a.usuario_cadastro = u.id_usuario and a.id = $id_animal";
			
    $dados_recuperados = mysqli_query($con, $SQL);
	$resultado =  null;

	echo '<div class="card" style="max-width: 70em; background-color: black; margin-left: 16em; border-radius: 50px; box-shadow: 2px 2px 2em #888; border: none; margin: 2em; margin-left: 7.5em; padding: 1em;">
    <div class="row no-gutters">';

		if($dados_recuperados){
			if(mysqli_num_rows($dados_recuperados) > 0){
			$resultado = mysqli_fetch_assoc($dados_recuperados);
				$foto = $resultado["foto_animal"];
				echo '
					<div class="col-md-7">
							<img style="border-radius: 20px;" src="fotos_banco/'.$foto.'" class="card-img-top h-100" alt="...">
					</div>&ensp;&ensp;&ensp;
					
					<div class="col-md-4" style="background-color: black; color: white;">
							<h4 class="card-title"><b>'.$resultado["nome_animal"].' ('.$resultado["cidade"].', '.$resultado["bairro"].')</b></h4>
							<h5 style="color: gold;"><b>Características do Animal</b></h5>';
							if ($resultado["idade"] == "Indefinida"){
										echo '<p class="card-text"><b>Idade: </b>Idade Indefinida</p>';
									}elseif($resultado["idade"] == "Filhote"){
										echo '<p class="card-text"><b>Idade: </b>Filhote (- 6 Meses)</p>';
									}elseif($resultado["idade"] == "Jovem"){
										echo '<p class="card-text"><b>Idade: </b>Jovem (7 Meses à 2 Anos)</p>';
									}elseif($resultado["idade"] == "Adulto"){
										echo '<p class="card-text"><b>Idade: </b>Adulto (3 anos à 8 Anos)</p>';
									}else{
										echo '<p class="card-text"><b>Idade: </b>Idoso (+ 9 Anos)</p>';
									}
							echo '
							<p class="card-text"><b>Espécie: </b>'.$resultado["especie"].' </p>
							<p class="card-text"><b>Raça:</b> '.$resultado["raca"].' </p>
							<p class="card-text"><b>Cor:</b> '.$resultado["cor"].' </p>
							<p class="card-text"><b>Porte:</b> '.$resultado["porte"].' </p>
							<p class="card-text"><b>Sexo:</b> '.$resultado["sexo"].' </p>
							<h5 style="color: gold;"><b>Sobre o Publicante</b></h5>
							<p class="card-text"><b>Pessoa que publicou:</b> '.$resultado["nome_usuario"].' </p>
							<p class="card-text"><b>Telefone:</b> '.$resultado["telefone"].' </p>
							<p class="card-text"><b>Cidade:</b> '.$resultado["cidade"].', Bairro: '.$resultado["bairro"].' </p>
							<h5 style="color: gold;"><b>Observações do Publicante sobre o Animal</b></h5>
							<p class="card-text" align="justify">'.$resultado["observacoes"].' </p>
					</div>';
            }
        }
		echo '
			</div>
			</div>
		';
   
?>
	<input type="hidden" id="id" name="id" value="<?php echo $id_animal?>" />


<?php
		include ('rodape_conexao.php');
		include ('rodape.inc');
?>
	</body>
</html>
