<?php
	function verificaAtt_Email($id, $nome_fotoEdit, $senhaEdit, $emailEdit, $bairroEdit, $cidadeEdit, $telefoneEdit, $nomeEdit){

			if ($nome_fotoEdit != null){
				$SQL = "UPDATE usuario SET nome='$nomeEdit', telefone='$telefoneEdit', cidade='$cidadeEdit', 
				bairro='$bairroEdit', email='$emailEdit', senha='$senhaEdit', foto='$nome_fotoEdit' WHERE id_usuario = $id";
													
			}else{
				$SQL = "UPDATE usuario SET nome='$nomeEdit', telefone='$telefoneEdit', cidade='$cidadeEdit', 
				bairro='$bairroEdit', email='$emailEdit', senha='$senhaEdit' WHERE id_usuario = $id";
													
			}
			echo ("<script language='JavaScript'>
			window.alert('Atualização Realizada!!')
			window.location.href='perfil_usuario.php';
			</script>");
		
			return $SQL;
	}
?>