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

    $SQL = "UPDATE animal SET nome_animal='$Novo_nome_Animal', especie='$Nova_especie', raca='$Nova_raca', cor='$Nova_cor', 
    porte='$Novo_porte', sexo ='$Novo_sexo', idade= '$Nova_idade', observacoes='$Nova_observacoes', foto_animal='$nome_Nova_foto' WHERE id= $id_animal";
    
    
    include("rodape_conexao.php");
	header("location:lista_animais.php");
	
	
    
?>