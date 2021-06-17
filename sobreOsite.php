<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Sobre o Site</title>
		
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
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
			<h5>Sobre o Site</h5>
		</nav>
		
		<h5 style="margin-left: 2em;">Afinal, do que se trata o PetStreets?</h5>
		<p align="justify" style="margin-left: 10em; margin-right: 10em;">O Sistema PetStreets, tem por finalidade ajudar animais que estão em situações de rua abandonados, com fome, sujos e doentes a encontrar um dono e respectivamente bom lar. 
		Nossa proposta é fornecer um local de armazenamento e interação para que haja as possiveis adoções, e com isso, nós desenvolvedores criamos este site com esta finalidade.</p>
	
		<div style="background-color: lightgray; width: 50em; height: 25em; margin-left: 17em; border-radius: 40em;">
		   <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			  <ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			  </ol>
			  <div class="carousel-inner">
				<div class="carousel-item active">
				  <img class="d-block w-100" src="img/programacao.jpg" alt="Primeiro Slide" style="width: 50em; height: 25em; border-radius: 40em;">
				  <div class="carousel-caption d-none d-md-block">
						<h5>Linguagens de Programação</h5>
						<p>A estrutura fundamental para que o site seja Funcional</p>
				  </div>
				</div>
				<div class="carousel-item">
				  <img class="d-block w-100" src="img/tres.jpg" alt="Segundo Slide" style="width: 50em; height: 25em; border-radius: 40em;">
				  <div class="carousel-caption d-none d-md-block">
						<h5>Ajuda Animal</h5>
						<p>Relacionado a causa animal, seja caridoso e ajude como puder, voce pode mudar completamente a vida de alguém</p>
				  </div>
				</div>
				<div class="carousel-item">
				  <img class="d-block w-100" src="img/formatura.jpg" alt="Terceiro Slide" style="width: 50em; height: 25em; border-radius: 40em;">
					<div class="carousel-caption d-none d-md-block">
						<h5>Objetivo</h5>
						<p>Como todos passam um dia, nosso objetivo é nossa formação em nosso curso e ao mesmo tempo temos um cuidado pelos animais, então este site possui duas finalidades bem definidas </p>
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
		<h5 style="margin-left: 2em;">O que Fazemos?</h5>
		<p align="justify" style="margin-left: 10em; margin-right: 10em;">Somos um <b>grupo de estudantes de cerca de 20 anos</b>, fazemos <b>técnico em informática junto ao ensino médio</b>
		e este site está sendo criado <b>para que no nosso quarto ano (ultimo ano) possamos apresentá-lo como TCC quando formos 
		terminar o ensino médio</b>. Relatando um pouco sobre nosso cotidiano em informática, aprendemos <b>linguagens de programação</b>, <b>bibliotecas
		de estilização em programas especificos para a criação de sites</b> (php, html, CSS, Jquery, Bootstrap, etc...), como algumas que estão sendo utilizadas neste site.</p>
	
		<h5 style="margin-left: 2em;">Como Funciona?</h5>
		<p align="justify" style="margin-left: 10em; margin-right: 10em;">O site possui <b>4 abas estáticas para a informação do usuário</b>, que são: 
			<ul style="margin-left: 10em; margin-right: 10em;">
				<li><b>Sobre nós</b> (esta página fala um pouco sobre a nossa historia que somos desenvolvedores)</li>
				<li><b>Sobre o Site</b> (Onde é explicado algumas coisas sobre o funcionamento do site)</li> 
				<li><b>Instruções</b> (Página Dedicada às Instruções de Login e Cadastro, assim como alguns requisitos para adoção)</li> 
				<li><b>Adoções de Sucesso</b> (caso queira saber sobre os relatos de alguns usuários da plataforma).</li>
				O site consiste na <b>adoção de animais abandonados nas ruas</b> (Cães e Gatos) e tem como <b>objetivo econtrar um lar digno aos animais</b>.
			</ul>
		</p>
		
		<p align="justify" style="margin-left: 10em; margin-right: 10em;">O funcionamento do site se baseia em que <b>uma ong ou uma pessoa pode logar e adicionar animais abandonados</b> (podendo editar, 
		remover) mas <b>seguindo as instruções básicas para colocar o animal em adoção</b>, também pode adotar um animal, ao encontrar um animal no site de seu 
		agrado tem um <b>botão escrito "QUERO ADOTAR!!"</b> ao clicar será aberto uma janela com todas as informações fornecidas pelo usuário de contato, podendo assim, conversar sobre.</p>
		
		<p align="center" style="color: red;">ATENÇÃO! Usuários que fazem o uso de forma suspeita terão suas contas deletadas. </p>
		
		<?php
			include ('rodape.inc');
		?>
	</body>
</html>