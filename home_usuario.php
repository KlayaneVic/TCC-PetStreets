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
			<h5 style="font-weight: bold;">Ultimos Adicionados...</h5>
		</nav>
		
		 <?php

            //abrindo a conexão com bd
            include('cabecalho_conexao.php');

            $texto = null;

            $SQL = "SELECT a.*, u.*
						FROM animal a
							INNER JOIN usuario u 
								ON a.usuario_cadastro = u.id_usuario and a.status = 0 ORDER BY id DESC LIMIT 8";

            $dados_recuperados = mysqli_query($con, $SQL);
			$resultado =  null;
					
                    if($dados_recuperados){
                        if(mysqli_num_rows($dados_recuperados) > 0){
						   echo '<br><br><div class="card-deck" style="margin: 0em 2em 0em 2em;">';
                           while (($resultado =  mysqli_fetch_assoc($dados_recuperados)) != null){
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
										<h4><a href='mostra_animal.php?animal=$resultado[id]' <button class='btn btn-primary' style='font-weight: bold;'>QUERO ADOTAR!!</a></h4>
									</div>
									
								</div></div>
							";
						   }
						   echo '</div><br>';
                        }else{
							echo "<br><br><h6 align='center' style='border-radius: 5em; background-color: gold; padding: 1em; margin-left: 5em; margin-right: 5em; margin-bottom: 10em;'>Não há animais disponiveis para Adoção.</h6><br><br>";
						}
                    }

			include ('rodape_conexao.php');
			include ('rodape.inc');

        ?>	
	</body>
</html>