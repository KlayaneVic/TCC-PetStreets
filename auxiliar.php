<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
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
	<head>
	<body>
<?php
            include("cabecalho_conexao.php");
            $parametro = $_POST['parametro'];
			$parametro2 = $_POST['parametro2'];
			$parametro3 = $_POST['parametro3'];
			$i = $_SESSION['i'];
            $input = 0;
            if($parametro != ""){
                $tratamento = "SELECT * FROM tipo_tratamento WHERE id=$parametro";
                $dados = mysqli_query($con, $tratamento);
                    if(mysqli_num_rows($dados) > 0){
                        
                        while (($result = mysqli_fetch_assoc($dados)) != null) {
                            $nome = $result['nome'];
                            $id = $result['id'];
							$categoria = $result['categoria'];
                            $input ="<p id='linha". $i ."' class='paragrafo_trat' align='center'>
										Tipo: <input type='text' name='tratamento_inp_".$i."' value='$nome - $categoria' disabled />
										Data: <input type='date' name='tratamento_data_".$i."' value='$parametro2' disabled />
										Observações: <input type='text' name='tratamento_obs_".$i."' value='$parametro3' disabled />
										<button id='remover".$i."' class='btn btn-danger' value='".$i."' onclick='remover_linha(this);' style='font-weight: bold;'>Remover</button>
									</p><br id='br".$i."' class='br_trat'>
										<input type='hidden' id='escondido_".$i."' name='hidden_".$i."' value='0' />
									";
                        
							
							// passando os dados do tratamento pela sessao
							$_SESSION["id_tratamento_$i"] = $id;
							$_SESSION["tratamento_data_$i"] = $parametro2;
							$_SESSION["tratamento_obs_$i"] = $parametro3;
						}

						$_SESSION['i']++;
                        echo "$input";  
                    }
            }else{
               
            }
    ?>
	
	</body>
</html>