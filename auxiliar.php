<?php
	session_start();
?>
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
										Data Tratamento: <input type='text' id='$id' name='tratamento_data_".$i."' value='$parametro2' disabled />
										Observações do Tratamento: <input type='text' id='$id' name='tratamento_obs_".$i."' value='$parametro3' disabled />
									</p><br>";
                        
							$_SESSION["id_tratamento_$i"] = $id;
						}

						$_SESSION['i']++;
                        echo "$input";  
                    }
            }else{
               
            }
    ?>