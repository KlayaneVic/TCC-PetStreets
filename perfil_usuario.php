<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Perfil Usuário</title>

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
			include('barra_navegacao2.inc');
		?>
        <nav class="nav2" style="background-color: gold; color: black;">
			<h5>Perfil Usuário</h5>
		</nav>

        <?php

            $id_usuario = $_SESSION["id_usuario"];

            //abrindo a conexão com bd
            include('cabecalho_conexao.php');

            $texto = null;

            $SQL = "SELECT * FROM usuario WHERE id_usuario= $id_usuario";

            $dados_recuperados = mysqli_query($con, $SQL);
			$resultado =  null;

            echo '
                <div class="container">
                    <div class="row">
                        <div class="col-md-4" style="background-color: white; margin-right: 3em; border-radius: 2em; height: 20em; padding: 4px; margin-top: 50px;"> 
                ';

                        if($dados_recuperados){
                            if(mysqli_num_rows($dados_recuperados) > 0){
                            $resultado =  mysqli_fetch_assoc($dados_recuperados);
                               
							   // Verifica se Foto Existe
							   if($resultado['foto'] != null){
                                   $foto_usuario = $resultado['foto'];
                                echo '
                                    <p><img class="foto_banco" src="fotos_banco/'.$foto_usuario.'" style="border-radius: 2em; height: 20em; padding: 1em; width: 23em;"></p>
                               ';
                               }else{
                                echo '
                                    <p><img class="foto_banco" src="img/usuario.png" style="border-radius: 2em; height: 20em; padding: 1em; width: 23em;"></p>
                                ';
                               }

                               // Conta quantidade de Animais Cadastrados
                               $SQL = "SELECT * from animal where usuario_cadastro = $id_usuario";
                               $animais_cadastro = mysqli_query($con, $SQL);
                               $total_animais_cad = mysqli_num_rows($animais_cadastro);
							   
							   // Conta quantidade de Animais Adotados
                               $SQL = "SELECT * from animal where usuario_adocao = $id_usuario";
                               $animais_adocao = mysqli_query($con, $SQL);
                               $total_animais_ado = mysqli_num_rows($animais_adocao);

                           echo '
                            
                        </div>
                        
                        <div class="col-md-7" style="border-radius: 3em; height: 20em; padding: 50px; margin-top: 50px; background-color: white;">    
                            <p><h5><b>Nome Completo: '.$resultado["nome"].' ('.$resultado["tipo"].')</b></h5></p>
                                <button class="btn btn-primary" data-toggle="modal" data-target="#modalEditar">Editar</button>
                            </p>
                            <p><h5><b>Telefone:'.$resultado["telefone"].'</b></h5></p>
                            <p><h5><b>Cidade: '.$resultado["cidade"].', Bairro: '.$resultado["bairro"].'</b></h5></p>
                            <p><h5><b>E-mail: '.$resultado["email"].'</b></h5></p>
                        </div>
                    </div><br>
					
					<div class="row">
						
							<h4 class="h4" style="margin-left: 6.5em;">Quantidade de animais Cadastrados<br> '.$total_animais_cad.'</h4>
							<h4 class="h4"> Quantidade de animais Adotados<br> '.$total_animais_ado.'</h4>
					</div>
                </div>
                ';
                            
                        }
                    }
        ?>

        <!-- Modal Editar -->
        <div class="modal" id="modalEditar" tabindex="-1" role="dialog">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Editar Informações</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    <form action="altera_usuario.php" method="POST" enctype="multipart/form-data">
						<div class="row">
								<p>
									Nome Completo: <input type="text" id="novo_nome" name="novo_nome" onfocusout="validaNomeAtt()" value="<?php echo $resultado['nome']; ?>" required />
									<span id="erroNomeAtt" style="color: red;"></span>
								</p>
								<p>
									Telefone: <input type="text" id="novo_telefone_usuario" name="novo_telefone_usuario" onfocusout="validaTelefoneAtt()" required value="<?php echo $resultado['telefone']; ?>" />
									<span id="erroTelefoneAtt" style="color: red;"></span>
								</p>
								<p>
									Cidade: <input type="text" id="nova_cidade_usuario" name="nova_cidade_usuario"  onfocusout="validaCidadeAtt()" value="<?php echo $resultado['cidade']; ?>" required /> 
									<span id="erroCidadeAtt" style="color: red;"></span>
								</p>
								<p>
									Bairro: <input type="text" id="novo_bairro_usuario" name="novo_bairro_usuario" onfocusout="validaBairroAtt()" value="<?php echo $resultado['bairro']; ?>" required />
									<span id="erroBairroAtt" style="color: red;"></span>
								</p>
								<p>
									E-mail: <input type="text" id="novo_email_usuario" name="novo_email_usuario" onfocusout="validaEmailAtt()" value="<?php echo $resultado['email']; ?>" required />
									<span id="erroEmailAtt" style="color: red;"></span>
								</p>
								<p>
									Senha: <input type="text" id="nova_senha_usuario"  name="nova_senha_usuario" onfocusout="validaSenhaAtt()" value="<?php echo $resultado['senha']; ?>" required />
									<span id="erroSenhaAtt" style="color: red;"></span>
								</p>

								<p>
									Foto: <input type="file" id="nova_foto" name="nova_foto" />
								</p>
							</div>
						</div>
						
						<div class="modal-footer">
						  <button type="reset" class="btn btn-danger">Limpar</button>
						  <button type="submit" class="btn btn-primary">Confirmar</button>
						</div>
                    </form>
              </div>
            </div>
        </div> 

        <?php
                include ('rodape_conexao.php');
                include ('rodape.inc');
        ?>
    </body>
</html>