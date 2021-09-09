<?php
	function verificaAtt_Email($id, $nome_fotoEdit, $senhaEdit, $emailEdit, $bairroEdit, $cidadeEdit, $telefoneEdit, $nomeEdit){

			if ($nome_fotoEdit != null){
				$SQL = "UPDATE usuario SET nome_usuario='$nomeEdit', telefone='$telefoneEdit', cidade='$cidadeEdit', 
				bairro='$bairroEdit', email='$emailEdit', senha='$senhaEdit', foto_usuario='$nome_fotoEdit' WHERE id_usuario = $id";
													
			}else{
				$SQL = "UPDATE usuario SET nome_usuario='$nomeEdit', telefone='$telefoneEdit', cidade='$cidadeEdit', 
				bairro='$bairroEdit', email='$emailEdit', senha='$senhaEdit' WHERE id_usuario = $id";
													
			}
			echo ("<script language='JavaScript'>
			window.alert('Atualização Realizada!!')
			window.location.href='perfil_usuario.php';
			</script>");
		
			return $SQL;
	}
	
	function verificaAtt_Animal_Adm($Nova_cor, $Novo_nome_Animal, $Nova_especie, $Nova_raca, $Novo_porte, $Novo_sexo, $Nova_idade, $Nova_observacoes, $nome_Nova_foto, $id_animal, $novo_status){
		if ($novo_status == "") {
			$SQL = "UPDATE animal SET nome_animal='$Novo_nome_Animal', especie='$Nova_especie', raca='$Nova_raca', cor='$Nova_cor', 
				porte='$Novo_porte', sexo ='$Novo_sexo', idade= '$Nova_idade', observacoes='$Nova_observacoes', foto_animal='$nome_Nova_foto' WHERE id= $id_animal";
		}elseif ($novo_status == 0){
			$SQL = "UPDATE animal SET nome_animal='$Novo_nome_Animal', especie='$Nova_especie', raca='$Nova_raca', cor='$Nova_cor', 
				porte='$Novo_porte', sexo ='$Novo_sexo', idade= '$Nova_idade', observacoes='$Nova_observacoes', status=0, permissao=0, foto_animal='$nome_Nova_foto' WHERE id= $id_animal";
		}else{
			$SQL = "UPDATE animal SET nome_animal='$Novo_nome_Animal', especie='$Nova_especie', raca='$Nova_raca', cor='$Nova_cor', 
				porte='$Novo_porte', sexo ='$Novo_sexo', idade= '$Nova_idade', observacoes='$Nova_observacoes', status=1, permissao=0, foto_animal='$nome_Nova_foto' WHERE id= $id_animal";
		}
		
		return $SQL;
	}
	
	function verificaAtt_Animal_Adm2($Nova_cor, $Novo_nome_Animal, $Nova_especie, $Nova_raca, $Novo_porte, $Novo_sexo, $Nova_idade, $Nova_observacoes, $id_animal, $novo_status){
		if($novo_status == ""){
			$SQL = "UPDATE animal SET nome_animal='$Novo_nome_Animal', especie='$Nova_especie', raca='$Nova_raca', cor='$Nova_cor', 
				porte='$Novo_porte', sexo ='$Novo_sexo', idade= '$Nova_idade', observacoes='$Nova_observacoes' WHERE id= $id_animal";
		}elseif ($novo_status == 0){
			$SQL = "UPDATE animal SET nome_animal='$Novo_nome_Animal', especie='$Nova_especie', raca='$Nova_raca', cor='$Nova_cor', 
				porte='$Novo_porte', sexo ='$Novo_sexo', idade= '$Nova_idade', observacoes='$Nova_observacoes', status=0, permissao=0 WHERE id= $id_animal";
		}else{
			$SQL = "UPDATE animal SET nome_animal='$Novo_nome_Animal', especie='$Nova_especie', raca='$Nova_raca', cor='$Nova_cor', 
				porte='$Novo_porte', sexo ='$Novo_sexo', idade= '$Nova_idade', observacoes='$Nova_observacoes', status=1, permissao=0 WHERE id= $id_animal";
		}	
		
		return $SQL;
	}
	
	function verificaAttADM_Email($id, $nome_fotoEdit, $senhaEdit, $emailEdit, $bairroEdit, $cidadeEdit, $telefoneEdit, $nomeEdit){

			if ($nome_fotoEdit != null){
				$SQL = "UPDATE usuario SET nome_usuario='$nomeEdit', telefone='$telefoneEdit', cidade='$cidadeEdit', 
				bairro='$bairroEdit', email='$emailEdit', senha='$senhaEdit', foto_usuario='$nome_fotoEdit' WHERE id_usuario = $id";
													
			}else{
				$SQL = "UPDATE usuario SET nome_usuario='$nomeEdit', telefone='$telefoneEdit', cidade='$cidadeEdit', 
				bairro='$bairroEdit', email='$emailEdit', senha='$senhaEdit' WHERE id_usuario = $id";
													
			}
			echo ("<script language='JavaScript'>
			window.alert('Atualização Realizada!!')
			window.location.href='perfil_adm.php';
			</script>");
		
			return $SQL;
	}
	
	function verificaAttUsu_Email($id, $nome_fotoEdit, $senhaEdit, $emailEdit, $bairroEdit, $cidadeEdit, $telefoneEdit, $nomeEdit){

				if ($nome_fotoEdit != null){
					$SQL = "UPDATE usuario SET nome_usuario='$nomeEdit', telefone='$telefoneEdit', cidade='$cidadeEdit', 
					bairro='$bairroEdit', email='$emailEdit', senha='$senhaEdit', foto_usuario='$nome_fotoEdit'  WHERE id_usuario = $id";
														
				}else{
					$SQL = "UPDATE usuario SET nome_usuario='$nomeEdit', telefone='$telefoneEdit', cidade='$cidadeEdit', 
					bairro='$bairroEdit', email='$emailEdit', senha='$senhaEdit' WHERE id_usuario = $id";
														
				}
				echo ("<script language='JavaScript'>
				window.alert('Atualização Realizada!!')
				window.location.href='lista_usuarios.php';
				</script>");
			
				return $SQL;
		}
?>