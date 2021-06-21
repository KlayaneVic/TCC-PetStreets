<?
    session_start();
?>
<!Doctype html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>PetSreets - Remover Animais</title>
        <script src="js/valida.js"></script>
    </head>
    <body>
        <?php
            $animal_removido = $_GET["animal"];
			$texto = null;
			include('cabecalho_conexao.php');
			
			$SQL = "DELETE FROM animal WHERE id=$animal_removido";
			include('rodape_conexao.php');
			header('Location: lista_animais.php');
        ?>
</body>
</html>