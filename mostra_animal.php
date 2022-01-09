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
			<h5 style="font-weight: bold;">Animal Selecionado</h5>
		</nav>
		
		<br><h5 style="margin-left: 2em; font-weight: bold;">PARABÉNS!! Parece que se interessou por este animalzinho! Para adotá-lo, entre em contato com o número do publicante fornecido abaixo! </h5>
<?php
    include ("cabecalho_conexao.php");

    $id_animal = $_GET['animal'];
	$texto = null;
    $SQL = "SELECT a.*, u.*
				FROM animal a INNER JOIN usuario u on a.usuario_cadastro = u.id_usuario 
					 WHERE a.id = $id_animal
			";
							
    $dados_recuperados = mysqli_query($con, $SQL);
	$resultado =  null;

	echo '<br><div class="card" style="background-color: black; border-radius: 50px; margin: 0 auto;
width: 80%; box-shadow: 2px 2px 2em #888; border: none; padding: 1em;">
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
							<p class="card-text"><b>Cidade:</b> '.$resultado["cidade"].', <b>Bairro:</b> '.$resultado["bairro"].' </p>
							<h5 style="color: gold;"><b>Observações do Publicante sobre o Animal</b></h5>
							<p class="card-text" align="justify">'.$resultado["observacoes"].' </p>
							';
							}
							}
							
							
							$SQL = "SELECT ta.*, tp.*
										FROM animal a 
											INNER JOIN animal_tratamento ta ON a.id = ta.idAnimal 
											INNER JOIN tipo_tratamento tp ON ta.idTratamento=tp.id 
												WHERE a.id = $id_animal
							";
							
							echo '<h5 style="color: gold;"><b>Tratamentos do Animal</b></h5>';
							$dados_recuperados = mysqli_query($con, $SQL);
							if($dados_recuperados){
								if(mysqli_num_rows($dados_recuperados) > 0){
									while(($resultado = mysqli_fetch_assoc($dados_recuperados)) != null){
										echo '
											<p class="card-text"><b>('.$resultado["dataTratamento"].')</b> '.$resultado["nome"].' - '.$resultado["categoria"].'</p>
											<p class="card-text" align="justify"> '.$resultado["observacao"].' </p>
										';
									}
								}else{
									echo '<p class="card-text"> Este Animal não Possui Tratamentos</p>';
								}
							}	
								
					echo '</div>';
		echo '
			</div>
			</div><br><br>
		';
   
   echo '
   <div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
		<div class="modal-content" style="width: 100%;">
		  <div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel" style="font-weight: bold;">Que Legal! Mas antes, reflita!!!			<small class="form-text text-muted"><b style="color: red;">Quando estiver pronto, é só clicar "Entendi" na parte inferior da tela!</b></small></h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>
		  <div class="modal-body">
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			  <ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
			  </ol>
			  <div class="carousel-inner">
				<div class="carousel-item active">
				  <img class="d-block w-100" src="img/1.png" alt="Primeiro Slide" style="width: 40em; height: 20em;">
				  <div class="carousel-caption d-none d-md-block">
						<h5 style="font-weight: bold; text-shadow: 
               2px 2px 2px black;">Você terá mesmo o tempo necessário para cuidar?</h5>
				  </div>
				</div>
				<div class="carousel-item">
				  <img class="d-block w-100" src="img/4.png" alt="Segundo Slide" style="width: 40em; height: 20em;">
				  <div class="carousel-caption d-none d-md-block">
						<h5 style="font-weight: bold;  text-shadow: 
               2px 2px 2px black;">O lugar é adequado e seguro?</h5>
				  </div>
				</div>
				<div class="carousel-item">
				  <img class="d-block w-100" src="img/2.png" alt="Terceiro Slide" style="width: 40em; height: 20em;">
					<div class="carousel-caption d-none d-md-block">
						<h5 style="font-weight: bold;  text-shadow: 
               2px 2px 2px black;">As suas condições financeiras coincidem para o bom cuidado?</h5>
					</div>
				</div>
				<div class="carousel-item">
				  <img class="d-block w-100" src="img/3.png" alt="Terceiro Slide" style="width: 40em; height: 20em;">
					<div class="carousel-caption d-none d-md-block">
						<h5 style="font-weight: bold; text-shadow: 
               2px 2px 2px black;">Você é maior de Idade?</h5>
						<p style="font-weight: bold; text-shadow: 
               2px 2px 2px black;">Caso não seja o correto é conversar com seus pais, pois eles saberão o que fazer</p>
				  </div>
				</div>
				<div class="carousel-item">
				  <img class="d-block w-100" src="img/5.png" alt="Terceiro Slide" style="width: 40em; height: 20em;">
					<div class="carousel-caption d-none d-md-block">
						<h5 style="font-weight: bold; text-shadow: 
               2px 2px 2px black;">Não desconsidere estas reflexões!!</h5>
				  </div>
				</div>
			  </div>
			  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Anterior</span>
			  </a>
			  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Próximo</span>
			  </a>
			</div>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-primary" data-dismiss="modal" style="font-weight: bold;">Entendi!</button>
		  </div>
		</div>
	  </div>
	</div>
   ';
?>
	<input type="hidden" id="id" name="id" value="<?php echo $id_animal?>" />

		<?php
		$situacao_propaganda = "ok";
		if($situacao_propaganda == "ok"){ ?>
			<script>
				$(document).ready(function(){
					$('#modalExemplo').modal('show');
				});
			</script>
		<?php } ?>
		
		<?php
			include ('rodape_conexao.php');
			include ('rodape.inc');
		?>
	</body>
</html>
