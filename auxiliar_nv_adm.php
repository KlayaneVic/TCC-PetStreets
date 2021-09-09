<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Edita Animal</title>
		
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
			$j = $_SESSION['j'];
            $input = 0;
            if($parametro != ""){
                $tratamento = "SELECT * FROM tipo_tratamento WHERE id=$parametro";
                $dados = mysqli_query($con, $tratamento);
                    if(mysqli_num_rows($dados) > 0){
                        
                        while (($result = mysqli_fetch_assoc($dados)) != null) {
                            $nome = $result['nome'];
                            $id = $result['id'];
							$categoria = $result['categoria'];
                            $input ="<p id='linha_nv". $j ."' class='paragrafo_trat_nv' align='center'>
										Tipo: <input type='text' name='tratamento_inp_nv".$j."' value='$nome - $categoria' disabled />
										Data: <input type='date' name='tratamento_data_nv".$j."' value='$parametro2' disabled />
										Observações: <input type='text' name='tratamento_obs_nv".$j."' value='$parametro3' disabled />
										<button id='remover_nv".$j."' class='btn btn-danger' value='".$j."' onclick='remover_linha_nv(this);'>Remover</button>
									</p>
										<input type='hidden' id='escondido_nv".$j."' name='hidden_nv".$j."' value='0' />
									";
						// passando os dados do tratamento pela sessao
							$_SESSION["id_tratamento_nv$j"] = $id;
							$_SESSION["tratamento_data_nv$j"] = $parametro2;
							$_SESSION["tratamento_obs_nv$j"] = $parametro3;
						}

						$_SESSION['j']++;
                        echo "$input";  
                    }
            }else{
               
            }
    ?>
	
	</body>
</html>