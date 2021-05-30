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
        <?php
			include('barra_navegacao1.inc');
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
		<p align="justify" style="margin-left: 10em; margin-right: 10em;"> Agora <b>você já pode navegar</b> à procura de um parceiro ou cadastrar um animalzinho na seção Cadastro de animais. Lá você encontrará um formulário requerindo <b>dados de seu animal</b> e um campo de observação, após o cadastro ele <b>será listado junto com os demais animais cadastrados</b>. Você terá acesso as <b>seguintes ferramentas</b> usáveis:<br>
		<ul style="margin-left: 10em; margin-right: 10em;">
				<li>A <b>pagina inicial</b>, referida como os ultimos cadastrados, ali estarão todos os ultimos animais adicionados na plataforma e você poderá visualiza-lo já com seus respectivos dados.</li>
				<li>Em <b>seu canto inferior direito</b> estarão todas as funções que você pode usar. </li> 
				<li><b>Perfil de Usuário</b> - Nele estará todos os seus dados podendo ser alterados ou não, e sua quatidade de animais cadastrados ou adotados. </li> 
				<li><b>Cadastro de Animais</b> - Pagina dirijida para o cadastro dos seus animais.</li>
				<li><b>Lista de Animais</b> - Pagina dirijida para a visualização e edição dos seus animais cadastrados.</li>
				<li><b>Pesquisa Filtrada</b> - Pagina dirijida para a pesquisa especifica do animal, ou seja, se você que que seja femea/macho ou que tenha a pelagem amarela, etc.</li>
				<li>E claro, a <b>funcionalidade de sair</b> da sua conta.</li>
			</ul>
		<p align="justify" style="margin-left: 10em; margin-right: 10em;">
			Na hora de adotar também é bem simples, mas na hora de cadastrar o animal será <b>solicitada uma pesquisa</b> para saber se é uma pessoa <b>adaqueada</b> para esse tipo de responsabilidade e se o animal está em bom estado para ser adotado. Abaixo falamos um pouco sobre estas requisições, <b>verifique-as se estão de acordo</b>. Esperamos muito que sim, qualquer duvida entre em contato pelo nosso email e não desanime pois o final pode ser cheio de alegria.</p>
		</p>
		<h5 style="margin-left: 2em;">Algumas Reflexões antes da adoção:</h5><br/>
		
		<div align="center">
			<h3>1</h3>
				<p>Você terá mesmo o tempo necessário para cuidar?</p>
			<h3>2</h3>
				<p>O lugar é adequado e seguro?</p>
			<h3>3</h3>
				<p>As suas condições financeiras coincidem para o bom cuidado?</p>
			<h3>4</h3>
				<p>Você é maior de Idade? Caso não seja o correto é conversar com seus pais, pois eles saberão o que fazer</p>
			<h3>5</h3>
				<p>Não desconsidere estas reflexões, elas são importantes para que haja uma adoção segura e plena.</p>
			<br/>
		</div>
		<?php
			include ('rodape.inc');
		?>
    </body>
</html>