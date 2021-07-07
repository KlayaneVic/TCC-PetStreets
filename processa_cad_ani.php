<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8" />
		<title>Cadastro de Animal</title>
		
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="css/estilo.css" /> 
    	<script src="js/jquery-3.3.1.min.js"></script> 
    	<script src="js/popper.min.js"></script>
    	<script src="js/bootstrap.min.js"></script>
		<script src="js/valida.js"></script>
	
		<style>
			body{
				background-color: #FFFFE0;
			}
		</style>
	</head>
	<body>
		<?php
			include ("barra_navegacao2.inc");
		?>
		
		<nav class="nav2" style="background-color: gold; color: black;">
			<h5>Cadastro de Animais</h5>
		</nav>
		<br/>
		
		<?php
			// Verificação da foto
			$foto_animal = $_FILES['foto_animal'];
			$nome_foto_animal = null;
			
			if($foto_animal != null){
				preg_match("/\.(png|jpg|jpeg){1}$/i", $foto_animal["name"], $ext);
				if ($ext == true){
					$nome_foto_animal = md5(uniqid(time())). "." . $ext[1];
					$caminho_foto_animal = "fotos_banco/" . $nome_foto_animal;
					move_uploaded_file($foto_animal["tmp_name"], $caminho_foto_animal);
				}
			}
			
			// Declaração das variaveis
			$text = null;
			$id_usuario = $_SESSION["id_usuario"];
			$nome_animal = $_POST["nome_animal"];
			$especie = $_POST["especie"];
			$raca = $_POST["raca"];
			$cor = $_POST["cor"];
			$porte = $_POST["porte"];
			$sexo = $_POST["sexo_animal"];
			$idade_animal = $_POST["idade_animal"];
			$obs_animal = $_POST["Observacao_animal"];
			
			if($especie == 1){
				$especie = "Gato";
			} else if($especie ==  2){
				$especie = "Cachorro";
			}
			
			if($sexo == "f"){
				$sexo = "Fêmea";
			} else{
				$sexo = "Macho";
			}
			
			include ("cabecalho_conexao.php");
			
			$texto = null;
			
			// Adicionando informações no banco
			$SQL = "INSERT INTO animal(nome, especie, raca, cor, porte, sexo, idade, observacoes, foto, usuario_cadastro)
					VALUES ('$nome_animal', '$especie', '$raca', '$cor', '$porte', '$sexo', $idade_animal, '$obs_animal', 
					'$nome_foto_animal', $id_usuario)";
				
			// Salvando no banco
			$query = mysqli_query($con, $SQL);
			
			// Selecionando todos os campos do animal para pegar seu id porque ele é auto_increment
			$SQL = "SELECT id FROM animal WHERE usuario_cadastro = $id_usuario and nome = '$nome_animal'
			and idade = $idade_animal and observacoes = '$obs_animal' and cor = '$cor' and porte = '$porte' and especie = '$especie' and sexo = '$sexo'
			and raca = '$raca'";	
			$dados_recuperados = mysqli_query($con, $SQL);
			if ($dados_recuperados){
				if(mysqli_num_rows($dados_recuperados) > 0){
					$resultado = mysqli_fetch_assoc($dados_recuperados);
					$id_animal = $resultado['id'];
				}
			}
			
			// Pegando os dados dos inputs criados para armazenamento no banco 
			if ($_SESSION['i'] != 0){
				$SQL = "INSERT INTO animal_tratamento(idAnimal, idTratamento, dataTratamento, observacao)
				VALUES "; 
				for ($i=0; $i < $_SESSION['i']; $i++){
					$id_tratamento = $_SESSION["id_tratamento_$i"];
					$data_tratamento = $_SESSION["tratamento_data_$i"];
					$obs_tratamento = $_SESSION["tratamento_obs_$i"];
					
					if ($i < $_SESSION['i']-1) {
						$SQL .= "($id_animal, $id_tratamento, '$data_tratamento', '$obs_tratamento'),";
					}
					else {
						$SQL .= "($id_animal, $id_tratamento, '$data_tratamento', '$obs_tratamento');";
					}
				} 
			}
			
			echo "<h2>$nome_animal Cadastrado(a) com Sucesso!</h2>
				  <p>Agora já pode visualizá-lo em sua lista de Animais!!</p>
			";
			
			include ('rodape_conexao.php');
			include ('rodape.inc');
			
		?> 
	</body>
</html>