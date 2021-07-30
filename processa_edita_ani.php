<?php
    session_start();
?>
<?php
    //imagens
	$nova_foto_animal = $_FILES['nova_foto_animal'];
	$nome_Nova_foto = null;
		if($nova_foto_animal != null){
			preg_match("/\.(png|jpg|jpeg){1}$/i", $nova_foto_animal["name"], $ext);
				if($ext == true){
					$nome_Nova_foto = md5(uniqid(time())). "." . $ext[1];
					$caminho_foto = "fotos_banco/" . $nome_Nova_foto;
					move_uploaded_file($nova_foto_animal["tmp_name"], $caminho_foto);
				}
		}

    $id_animal = $_POST['id'];
    $Novo_nome_Animal = $_POST['novo_nome_animal'];
    $Nova_especie = $_POST['nova_especie'];
    $Nova_raca = $_POST['nova_raca_animal'];
    $Nova_cor = $_POST['nova_cor_animal'];
    $Novo_porte = $_POST['novo_porte_animal'];
    $Novo_sexo = $_POST['novo_sexo_animal'];
    $Nova_idade = $_POST['nova_idade_animal'];
    $Nova_observacoes = $_POST['nova_Observacoes_animal'];
    

    include("cabecalho_conexao.php");
    
    $texto = null;

	if ($nome_Nova_foto != null){
				$SQL = "UPDATE animal SET nome_animal='$Novo_nome_Animal', especie='$Nova_especie', raca='$Nova_raca', cor='$Nova_cor', 
				porte='$Novo_porte', sexo ='$Novo_sexo', idade= '$Nova_idade', observacoes='$Nova_observacoes', foto_animal='$nome_Nova_foto' WHERE id= $id_animal";
													
	}else{
				$SQL = "UPDATE animal SET nome_animal='$Novo_nome_Animal', especie='$Nova_especie', raca='$Nova_raca', cor='$Nova_cor', 
				porte='$Novo_porte', sexo ='$Novo_sexo', idade= '$Nova_idade', observacoes='$Nova_observacoes' WHERE id= $id_animal";
													
	}
    
	$query = mysqli_query($con, $SQL);
	
	if ($_SESSION['i'] != 0){
				for ($i=0; $i < $_SESSION['i']; $i++){
					$id_at = $_SESSION["id_at$i"];
					$data_tratamento = $_POST["tratamento_data$i"];
					$obs_tratamento = $_POST["tratamento_obs$i"];
						if ($_POST["hidden_ant$i"] == 0){
							$SQL = "UPDATE animal_tratamento SET dataTratamento='$data_tratamento', observacao='$obs_tratamento' WHERE idAnimal= $id_animal AND id_at = $id_at"; 
							$query = mysqli_query($con, $SQL);
						}else{
							$SQL = "DELETE FROM animal_tratamento WHERE id_at=$id_at";
							$query = mysqli_query($con, $SQL);
						}
				}
			}
			
	if ($_SESSION['j'] != 0){
				for ($j=0; $j < $_SESSION['j']; $j++){
					if ($_POST["hidden_nv$j"] == 0){
						$id_tratamento = $_SESSION["id_tratamento_nv$j"];
						$data_tratamento = $_SESSION["tratamento_data_nv$j"];
						$obs_tratamento = $_SESSION["tratamento_obs_nv$j"];
						$SQL = "INSERT INTO animal_tratamento(idAnimal, idTratamento, dataTratamento, observacao)
								VALUES ($id_animal, $id_tratamento, '$data_tratamento', '$obs_tratamento');"; 
						$query = mysqli_query($con, $SQL);
					} 
				
				}
			}
    
	header("location:lista_animais.php");
    
?>