<?
    session_start();
?>
<!Doctype html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>PetSreets - Modificar Status Animais</title>
        <script src="js/valida.js"></script>
    </head>
    <body>
        <?php
            $animal_adotado = $_GET["animal"];
			$texto = null;
			include('cabecalho_conexao.php');
			
			$SQL = "UPDATE animal SET status = 1 WHERE id = $animal_adotado";
			echo ("<script language='JavaScript'>
							window.alert('Status Modificado com Sucesso!! Animal adicionado à sua Lista de Animais que foram Adotados.')
							window.location.href='lista_animais.php';
						</script>");
			include('rodape_conexao.php');
        ?>
</body>
</html>