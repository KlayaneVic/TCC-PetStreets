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
		<style>
			body{
				background-color: #FFFFE0;
			}
		</style>
    </head>
    <body>
	
        <!-- Barra de Navegação -->
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
			<h5>Adoções de Sucesso</h5>
		</nav>
		
		<?php
			include('cabecalho_conexao.php');
			
			$texto = null;

            $SQL = "SELECT a.*, u.*
						FROM animal a
							INNER JOIN usuario u 
								ON a.usuario_cadastro = u.id_usuario and a.status = 1 and a.permissao = 1 ORDER BY id DESC LIMIT 16";

            $dados_recuperados = mysqli_query($con, $SQL);
			$resultado =  null;

            echo '<br><br><div class="card-deck" style="margin: 0em 2em 0em 2em;">';
					
                    if($dados_recuperados){
                        if(mysqli_num_rows($dados_recuperados) > 0){
                           while (($resultado =  mysqli_fetch_assoc($dados_recuperados)) != null){
						   $foto = $resultado["foto_animal"];
						   $id = $resultado["id"];
                           echo '
								<div class="form-group col-md-3"><div class="card" style="box-shadow: 2px 2px 2em #888; margin: 0em 0em 2em 0em; border-radius: 2em;">
									<img class="card-img-top" src="fotos_banco/'.$foto.'" alt="Imagem de capa do card" style="height: 15em; padding: 0.8em 0.8em 0em 0.8em; border-radius: 3em;">
									<div class="card-body">
									   <h5 class="card-title" align="center"><b>'. $resultado['nome_animal'].', Porte '. $resultado['porte'].'</b> <br> (' . $resultado['bairro'].', '. $resultado['cidade'] .')</h5>
									  <p class="card-text">
											
									  </p>
									</div>
								  </div></div>
							';
						   }
                        }else{
							echo '
								<br><br><h6 align="center" style="border-radius: 5em; background-color: gold; padding: 1em 27em 1em 27em; margin-left: 5em; margin-right: 5em; margin-bottom: 15em;">Ainda não há descrição recebida!!.</h6><br><br>		
							';
						}
                    }
			echo '</div><br>';
		?>
		<?php
            include ("rodape_conexao.php");
			include ("rodape.inc");
        ?>
    </body>
</html>