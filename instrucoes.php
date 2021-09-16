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
			<h5>Instruções</h5>
        </nav>
        <br/>
		<h5 style="margin-left: 2em;">Cadastro (Usuário é Inexistente na Plataforma):</h5>
		<p align="justify" style="margin-left: 10em; margin-right: 10em;">Para fazer seu cadastro é simples... Vá até o <b>canto superior direito da tela</b> e clique no botão de cadastro. Aperecerá um formulário, nele você deve informar seus dados assim como o seu tipo de usuário, depois que digitar tudo corretamente, <b>clique em Afirmar para ir para a próxima etapa</b>.</p>
		
		<h5 style="margin-left: 2em;">Login (Usuário Existe na plataforma, mas ainda não acessou sua conta):</h5>
		<p align="justify" style="margin-left: 10em; margin-right: 10em;"> Com seu <b>cadastro feito</b>, você já faz parte do nosso banco de usuários e poderá efetuar o login, <b>ao lado do botão de cadastrar</b>, com seu email e senha.<br>
		</p>
		<h5 style="margin-left: 2em;">Pós Login (Usuário Logado na Plataforma):</h5>
		<p align="justify" style="margin-left: 10em; margin-right: 10em;"> Agora <b>você já pode navegar</b> à procura de um parceiro ou cadastrar um animalzinho. Em <b>seu canto superior direito</b> estarão todas as funções que você pode usar <b>(localizada ao lado contrário da logo, 'Perfil')</b>. Lá você encontrará:<br>
		<ul style="margin-left: 10em; margin-right: 10em;">
				<li>A <b>pagina inicial</b>, referida como os ultimos cadastrados, ali estarão todos os ultimos animais adicionados na plataforma e você poderá visualiza-lo já com seus respectivos dados.</li>
				<li><b>Perfil de Usuário</b> - Nele estará todos os seus dados podendo ser alterados ou não, e sua quatidade de animais cadastrados e que foram adotados. </li> 
				<li><b>Cadastro de Animais</b> - Pagina dirijida para o cadastro dos seus animais. Nesta seção você encontrará um formulário requerindo dados de seu animal e um botão para adicionar seus tratamentos, após o cadastro ele será listado junto com os demais animais cadastrados.</li>
				<li><b>Lista de Animais</b> - Pagina dirijida para a visualização e edição dos seus animais cadastrados, tanto quanto os seus animais que já foram adotados.</li>
				<li><b>Pesquisa Filtrada</b> - Pagina dirijida para a pesquisa especifica do animal, ou seja, se você que que seja femea/macho ou que tenha a pelagem amarela, etc.</li>
				<li>E claro, a <b>funcionalidade de sair</b> da sua conta.</li>
			</ul>
		<p align="justify" style="margin-left: 10em; margin-right: 10em;">
			Na hora de adotar também é bem simples, ao cadastrar o animal será <b>possivel a adição</b> de tratamentos aplicados ao <b>animal referido</b> para que um futuro adotante saiba que este animal foi vacinado ou não. Caso tenha aplicado alguma vacina neste animal, ou castrou você pode adiciona-lo e caso não tenha feito nada apenas prossiga com o cadastro, pois mais a frente poderá adicionar tratamentos a ele. Abaixo falamos um pouco sobre reflexões para a adoção, <b>verifique-as se estão de acordo</b>. Esperamos muito que sim, qualquer duvida entre em contato pelo nosso email e não desanime pois o final pode ser cheio de alegria.</p>
		</p>
		<h5 style="margin-left: 2em;">Algumas Reflexões antes da adoção:</h5><br/>
		
		<div style="background-color: lightgray; margin: 0 auto; width: 50%; height: 25em; border-radius: 40em;">
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
				  <img class="d-block w-100" src="img/1.png" alt="Primeiro Slide" style="width: 50em; height: 25em; border-radius: 40em;">
				  <div class="carousel-caption d-none d-md-block">
						<h5>Você terá mesmo o tempo necessário para cuidar?</h5>
				  </div>
				</div>
				<div class="carousel-item">
				  <img class="d-block w-100" src="img/4.png" alt="Segundo Slide" style="width: 50em; height: 25em; border-radius: 40em;">
				  <div class="carousel-caption d-none d-md-block">
						<h5>O lugar é adequado e seguro?</h5>
				  </div>
				</div>
				<div class="carousel-item">
				  <img class="d-block w-100" src="img/2.png" alt="Terceiro Slide" style="width: 50em; height: 25em; border-radius: 40em;">
					<div class="carousel-caption d-none d-md-block">
						<h5>As suas condições financeiras coincidem para o bom cuidado?</h5>
					</div>
				</div>
				<div class="carousel-item">
				  <img class="d-block w-100" src="img/3.png" alt="Terceiro Slide" style="width: 50em; height: 25em; border-radius: 40em;">
					<div class="carousel-caption d-none d-md-block">
						<h5>Você é maior de Idade?</h5>
						<p>Caso não seja o correto é conversar com seus pais, pois eles saberão o que fazer</p>
				  </div>
				</div>
				<div class="carousel-item">
				  <img class="d-block w-100" src="img/5.png" alt="Terceiro Slide" style="width: 50em; height: 25em; border-radius: 40em;">
					<div class="carousel-caption d-none d-md-block">
						<h5>Não desconsidere estas reflexões!!</h5>
						<p>Elas são importantes para que haja uma adoção segura e plena.</p>
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
		</div><br>
		<?php
			include ('rodape.inc');
		?>
    </body>
</html>