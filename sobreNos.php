<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Sobre Nós</title>

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
			<h5>Sobre Nós</h5>
		</nav>
		<br>

		<article>
		<h5 style="margin-left: 2em;">Quem somos nós, e o que fazemos?</h5>
		<div class="container" align="justify">
			<div class="row" >
				<div class="col-md-8">
					<p> Somos um grupo de estudante cerca de <b>20 anos</b>,  fazemos <b>técnico em informática junto ao ensino médio</b> e <b>este site está sendo criado para que no nosso quarto ano (ultimo ano) possamos apresentá-lo como TCC quando formos nos formar</b>.
						Relatando um pouco sobre nosso cotidiano em informática, aprendemos <b>linguagens de programação</b>, bibliotecas de estilização em programas especificos para a criação de sites (php, html, CSS, Jquery, Bootstrap, etc...), como algumas que estão sendo utilizadas neste site.
					</p>

					<h5>Trabalhos Recentes</h5>
					
					<div align="center">
						<img src="img/trabalho_anterior.jpg" style="border-radius: 10px; height: 10em; width: 22.7em;">
						<img src="img/trabalho_anterior2.jpg" style="border-radius: 10px; height: 10em; width: 22.6em;">
					</div><br>
					<p><b>Nos ajude para formar a pagina de adoções de sucesso!! Confirme o botão 'Permitir Divulgação' em sua lista de animais e faça parte do mural!!</b>
					</p>
				</div>

				<div class="col-md-2">
					<div style="margin-left: 5em; background-color: gold; border-radius: 10px; text-align: center; height: 25em; padding: 5px; font-weight: bold ; width: 16em; "> 
							<img src="img/contato.jpg" style="width: 15em; height: 10em; border-radius: 10px;">
					<br><br>

						<span>Informações:</span><br>
							<p>
								Contato: Admnistrador<br>
								email: adote@bolinha.com <br>
								Local: Fazenda da Manga - SP <br>
								telefone: (011) 12365-4789
							</p>	  
					</div>
				<div>
			</div>
		</div>
	</article><br>
	
		<?php
			include ('rodape.inc');
		?>
	</body>
</html>