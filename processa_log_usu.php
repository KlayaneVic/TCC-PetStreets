<?php
    session_start();
?>
<!DOCTYPE html>
    <head>
        <meta charset="utf-8" />
        <title>Loading....</title>
    </head>
    <body>
    <?php
        $senha = $_POST['senha_usuario'];
        $email = $_POST['email_usuario'];
                include ('cabecalho_conexao.php');
                $SQL = "SELECT * FROM usuario where email='$email'";
            
                $dados_recuperados = mysqli_query($con, $SQL);
                if(mysqli_num_rows($dados_recuperados) > 0){
                    while (($resultado = mysqli_fetch_assoc($dados_recuperados)) != null) {
							
							if ($resultado['senha'] == $senha) {
								
								$id_usuario = $resultado['id_usuario'];
								$identificador_usu = $resultado['adm']; 
								
                                if ($resultado['adm'] == 1) {
									header("Location:perfil_adm.php"); 
								}else {
									header("Location:home_usuario.php"); 
								}
								
                            }else {
								
                                echo ("<script language='JavaScript'>
									window.alert('ERRO: Senha Incorreta')
									window.location.href='login_usuario.php';
								</script>");
                            }  
                    }

                }else{
                    echo ("<script language='JavaScript'>
						window.alert('ERRO: Usuário Inexistente!! Cadastre-se para ter Acesso a Plataforma.')
						window.location.href='cadastro_usuario.php';
					</script>");
                }    
				
			$_SESSION["id_usuario"] = $id_usuario;
			$_SESSION["identificador_usu"] = $identificador_usu;
    ?>
    </body>
</html>