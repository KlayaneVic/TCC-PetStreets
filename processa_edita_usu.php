<?php
	session_start();
 
	//imagens
	$fotoEdit = $_FILES['nova_foto'];
	$nome_fotoEdit = null;
		if($fotoEdit != null){
			preg_match("/\.(png|jpg|jpeg){1}$/i", $fotoEdit["name"], $ext);
				if($ext == true){
					$nome_fotoEdit = md5(uniqid(time())). "." . $ext[1];
					$caminho_foto = "fotos_banco/" . $nome_fotoEdit;
					move_uploaded_file($fotoEdit["tmp_name"], $caminho_foto);
				}
		}
    $id_admin = $_SESSION["id_usuario"];
	$id = $_POST["id"];
    $nomeEdit = $_POST['novo_nome_usuario'];
    $telefoneEdit = $_POST['novo_telefone_usuario'];
    $cidadeEdit = $_POST['nova_cidade_usuario'];
    $bairroEdit = $_POST['novo_bairro_usuario'];
    $emailEdit = $_POST['novo_email_usuario'];
    $senhaEdit = $_POST['nova_senha_usuario'];
	
	include("cabecalho_conexao.php");
	include("funcoes.inc");
	
	$SQL = "SELECT * FROM usuario where email = '$emailEdit'";
						 $dados_recuperados = mysqli_query($con, $SQL);
							 if($dados_recuperados){
								if(mysqli_num_rows($dados_recuperados) > 0){
									while (($resultado = mysqli_fetch_assoc($dados_recuperados)) != null) {
										
										$texto = null;
										if ($id != $resultado['id_usuario']){
											echo ("<script language='JavaScript'>
											window.alert('E-mail já existente, tente formular outro $id_usuario!!')
											window.location.href='lista_usuarios.php';
											</script>");
										}else{
											$SQL = verificaAttUsu_Email($id, $nome_fotoEdit, $senhaEdit, $emailEdit, $bairroEdit, $cidadeEdit, $telefoneEdit, $nomeEdit);	
										}
									}
								}else{
									
									$texto = null;
									$SQL = verificaAttUsu_Email($id, $nome_fotoEdit, $senhaEdit, $emailEdit, $bairroEdit, $cidadeEdit, $telefoneEdit, $nomeEdit);		 
								}
							}

    include ('rodape_conexao.php');
    include ('rodape.inc');

?>