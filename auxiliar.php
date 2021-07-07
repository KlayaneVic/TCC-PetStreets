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
                            $input ="<p id='linha". $i ."'>
										Tipo Tratamento: <input type='text' id='$id' name='tratamento_inp_".$i."' value='$nome - $categoria' disabled />
										Data Tratamento: <input type='date' id='$id' name='tratamento_data_".$i."' value='$parametro2' disabled />
										Observações do Tratamento: <input type='text' id='$id' name='tratamento_obs_".$i."' value='$parametro3' disabled />
										<button id='remover".$i."' class='btn-apagar' type='button' value='".$i."' onclick='remover_linha(this);'>Remover</button>
									</p><br>";
                        
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