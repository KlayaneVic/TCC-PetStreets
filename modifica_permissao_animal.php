<?
    session_start();
?>
<!Doctype html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>PetSreets - Modificar Permissão Animais</title>
        <script src="js/valida.js"></script>
    </head>
    <body>
        <?php
            $animal_adotado = $_GET["animal"];
			$texto = null;
			include('cabecalho_conexao.php');
			
				$SQL = "UPDATE animal SET permissao = 1 WHERE id = $animal_adotado";
						echo ("<script language='JavaScript'>
							window.alert('Agradeçemos sua colaboração!! Animal adicionado à tela de Adoções de Sucesso.')
							window.location.href='lista_animais.php';
						</script>");
			include('rodape_conexao.php');
        ?>
</body>
</html>