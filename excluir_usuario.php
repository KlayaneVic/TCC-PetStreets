<?
    session_start();
?>
<!Doctype html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>PetSreets - Remover Usuários</title>
        <script src="js/valida.js"></script>
    </head>
    <body>
        <?php
            $id = $_GET["usuario"];
			$texto = null;
			include('cabecalho_conexao.php');
			
			$SQL = "DELETE FROM usuario WHERE id_usuario=$id";
			include('rodape_conexao.php');
			header('Location: lista_usuarios.php');
        ?>
</body>
</html>