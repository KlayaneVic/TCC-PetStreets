<!-- Barra de Navegação -->
		<nav class="nav1" style="background-color: 	#8A2BE2;">
			<img src="img/logo.png" height="130em" width="300em" style="margin: 0.5em;">
			<b><a href="home.php" style="color: gold;">HOME</a>
			<a href="sobreNos.php" style="color: gold;">| Sobre Nós</a>
			<a href="sobreOsite.php" style="color: gold;">| Sobre o Site</a>
			<a href="instrucoes.php" style="color: gold;">| Instruções</a>
			<a href="adocoesDeSucesso.php" style="color: gold;">| Adoções de Sucesso </a>
			
            <select name="perfil" class="select" onchange="location = this.value;" style="background-color: black; color: gold; margin-top: 3.5em; margin-right: 2.5em;">
				<option selected hidden >Perfil</option>
				<option value="home_usuario.php">Pagina Inicial</option>
				<option value="perfil_usuario.php">Usuário (Seus Dados)</option>
				<option value="cadastro_animais.php">Cadastrar Animais</option>
				<option value="lista_animais.php">Sua Lista de Animais</option>
				<option value="pesquisa_animais.php">Pesquisar Animais</option>
				<option value="sair.php">Sair</option>
			</select>
</nav>