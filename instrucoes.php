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
			<h5 style="font-weight: bold;">Instruções</h5>
        </nav>
        <br/>
		<h5 style="margin-left: 2em;">Cadastro (Usuário é Inexistente na Plataforma):</h5>
		<p align="justify" style="margin-left: 10em; margin-right: 10em;">Para fazer seu cadastro é simples... Vá até o <b>canto superior direito da tela</b> e clique no botão de cadastro. Aparecerá um formulário, nele você deve informar seus dados assim como o seu tipo de usuário, depois que digitar tudo corretamente, <b>clique em confirmar para ir para a próxima etapa</b>.</p>
		
		<h5 style="margin-left: 2em;">Login (Usuário Existe na plataforma, mas ainda não acessou sua conta):</h5>
		<p align="justify" style="margin-left: 10em; margin-right: 10em;"> Com seu <b>cadastro feito</b>, você já faz parte do nosso banco de usuários e poderá efetuar o login, <b>ao lado do botão de cadastrar</b>, com seu e-mail e senha.<br>
		</p>
		<h5 style="margin-left: 2em;">Pós Login (Usuário Logado na Plataforma):</h5>
		<p align="justify" style="margin-left: 10em; margin-right: 10em;"> Agora <b>você já pode navegar</b> à procura de um parceiro ou cadastrar um animalzinho. Em <b>seu canto superior direito</b> estarão todas as funções que você pode usar <b>(localizada ao lado contrário da logo, 'Perfil')</b>. Lá você encontrará:<br>
		<ul style="margin-left: 10em; margin-right: 10em;" align="justify">
				<li>A <b>página inicial</b>, referida como os últimos cadastrados, ali estarão todos os últimos animais adicionados na plataforma e você poderá visualizá-los já com seus respectivos dados.</li>
				<li><b>Perfil de Usuário</b> - Nele estarão todos os seus dados podendo ser alterados ou não, e sua quantidade de animais cadastrados e que foram adotados. </li> 
				<li><b>Cadastro de Animais</b> - Página dirigida para o cadastro dos seus animais. Nesta seção você encontrará um formulário requerindo dados de seu animal e um botão para adicionar seus tratamentos, após o cadastro ele será listado junto com os demais animais cadastrados.<br>
				**Ao cadastrar o animal será <b>possível a adição</b> de tratamentos aplicados ao <b>animal referido</b> para que um futuro adotante saiba que este animal foi tratado previamente com a aplicação de vacina, castração ou não tenha sido tratado. Caso tenha aplicado algum tratamento neste animal, você pode adicioná-lo e caso não tenha feito nada apenas prossiga com o cadastro, pois mais a frente poderá adicionar tratamentos a ele. </li>
				<li><b>Lista de Animais</b> - Página dirigida para a visualização e edição dos seus animais cadastrados, tanto quanto os seus animais que já foram adotados.<br>
				**Você pode editar qualquer um de seus animais disponíveis para a adoção, mas os seus animais que já foram adotados não<br>
				**Você pode confirmar que o seu animal foi adotado, porém caso confirme uma vez, não poderá remove-lo da lista de adotados<br>
				**Ao confirmar que seu animal foi adotado, ele irá para a parte inferior da tela referida como "Seus animais que foram adotados"<br>
				**IMPORTANTE: CONFIRMAR DIVULGAÇÃO DE UM ANIMAL SEU QUE JÁ FOI ADOTADO NÃO É OBRIGATÓRIO, apenas confirme a divulgação caso queira nos ajudar a montar a pagina de animais que foram adotados com sucesso!<br>
				**Caso confirme a divulgação, não será possível retirar</li>
				<li><b>Pesquisa Filtrada</b> - Página dirigida para a pesquisa específica do animal, ou seja, se você que que seja femêa/macho ou que tenha a pelagem amarela, etc.</li>
				<li>E claro, a <b>funcionalidade de sair</b> da sua conta.</li>
			</ul>
		<h5 style="margin-left: 2em;">Como funciona para adotar o animal?</h5>
		<p align="justify" style="margin-left: 10em; margin-right: 10em;">Para adotar o animal é simples... Ao selecionar um animal para visualização clicando no botão "QUERO ADOTAR!", a página irá fornecer todos os dados do animal, assim como os dados de quem o publicou, você poderá visualizar o número de contato deste publicante.
		Caso se interesse pelo animal, entre em contato com o número fornecido e combine com o publicante!</p>
		
		<p align="justify" style="margin-left: 10em; margin-right: 10em;">
			Abaixo falamos um pouco sobre reflexões para a adoção, <b>verifique-as se estão de acordo</b>. Esperamos muito que sim, qualquer dúvida entre em contato pelo nosso e-mail e não desanime, pois o final pode ser cheio de alegria.</p>
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
							<h5 style="font-weight: bold; text-shadow: 
               2px 2px 2px black;">Você terá mesmo o tempo necessário para cuidar?</h5>
				  </div>
				</div>
				<div class="carousel-item">
				  <img class="d-block w-100" src="img/4.png" alt="Segundo Slide" style="width: 50em; height: 25em; border-radius: 40em;">
				  <div class="carousel-caption d-none d-md-block">
						<h5 style="font-weight: bold;  text-shadow: 
               2px 2px 2px black;">O lugar é adequado e seguro?</h5>
				  </div>
				</div>
				<div class="carousel-item">
				  <img class="d-block w-100" src="img/2.png" alt="Terceiro Slide" style="width: 50em; height: 25em; border-radius: 40em;">
					<div class="carousel-caption d-none d-md-block">
						<h5 style="font-weight: bold;  text-shadow: 
               2px 2px 2px black;">As suas condições financeiras coincidem para o bom cuidado?</h5>
					</div>
				</div>
				<div class="carousel-item">
				  <img class="d-block w-100" src="img/3.png" alt="Terceiro Slide" style="width: 50em; height: 25em; border-radius: 40em;">
					<div class="carousel-caption d-none d-md-block">
						<h5 style="font-weight: bold; text-shadow: 
               2px 2px 2px black;">Você é maior de Idade?</h5>
						<p style="font-weight: bold; text-shadow: 
               2px 2px 2px black;">Caso não seja o correto é conversar com seus pais, pois eles saberão o que fazer</p>
				  </div>
				</div>
				<div class="carousel-item">
				  <img class="d-block w-100" src="img/5.png" alt="Terceiro Slide" style="width: 50em; height: 25em; border-radius: 40em;">
					<div class="carousel-caption d-none d-md-block">
						<h5 style="font-weight: bold; text-shadow: 
               2px 2px 2px black;">Não desconsidere estas reflexões!!</h5>
						<p style="font-weight: bold; text-shadow: 
               2px 2px 2px black;">Elas são importantes para que haja uma adoção segura e plena.</p>
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
		
		<h5 style="margin-left: 2em;">Algum problema com sua conta?</h5>
		<p align="justify" style="margin-left: 10em; margin-right: 10em;">Entre em contato com os administradores!<br>
		**Contatos localizados na parte superior da tela "Sobre Nós"<p>
		<?php
			include ('rodape.inc');
		?>
    </body>
</html>