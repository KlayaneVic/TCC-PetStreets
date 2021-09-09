<?php
	$animal = $_GET['animal'];
	
	include('cabecalho_conexao.php');
	
	$SQL = "DELETE FROM animal WHERE id=$animal";

	include('rodape_conexao.php');
	
	header('location:lista_animais_adm.php');
?>
