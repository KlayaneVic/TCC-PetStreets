<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Cadastro de Usuário</title>

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
					<h5>Cadastro de Usuário</h5>
				</nav>
				<br/>
			<?php
						//imagens
						$foto_usuario = $_FILES['foto_usuario'];
						$nome_foto = null;
						if($foto_usuario != null){
							  preg_match("/\.(png|jpg|jpeg){1}$/i", $foto_usuario["name"], $ext);
							  if($ext == true){
								  $nome_foto = md5(uniqid(time())). "." . $ext[1];
								  $caminho_foto = "fotos_banco/" . $nome_foto;
								  move_uploaded_file($foto_usuario["tmp_name"], $caminho_foto);
							  }
						 }
						 
						 //Capturei as informações do formulário
						$senha_usuario = $_POST['senha_usuario'];
						$nome_usuario = $_POST['nome_usuario'];
						$email_usuario = $_POST['email_usuario'];
						$bairro_usuario = $_POST['bairro_usuario'];
						$cidade_usuario = $_POST['cidade_usuario'];
						$telefone_usuario = $_POST['telefone_usuario'];
						$tipo_usuario = $_POST['tipo_usuario'];
						

						 //Abrindo conexão com o BD
						 include('cabecalho_conexao.php');
						 
						 $SQL = "SELECT email FROM usuario where email = '$email_usuario'";
						 $dados_recuperados = mysqli_query($con, $SQL);
							 if($dados_recuperados){
								if(mysqli_num_rows($dados_recuperados) > 0){
									$texto = "<h2>E-mail já existente, tente formular outro!!</h2>";
								}else{
									$SQL = "INSERT INTO usuario (nome, email, senha, tipo, bairro, cidade, telefone, adm, foto) 
											VALUE ('$nome_usuario', '$email_usuario', '$senha_usuario', '$tipo_usuario', '$bairro_usuario', '$cidade_usuario',
											'$telefone_usuario', 0, '$nome_foto')";
									
											 $texto = "<h2>Seja Bem Vindo(a), Esperamos de Encontre o que Procure!!</h2>
													   <h2>Prossiga para o Login</h2>
													   <p>$nome_usuario Cadastrado(a) com Sucesso!</p>";
								}
							}
							
						 include('rodape_conexao.php'); 
						 include ('rodape.inc');
			?>
		</body>
</html>