<?php
	/**
	 * Arquivo que abre a conexão com o banco de dados
	 * @author Erick Marinheiro
	 */

	include 'dataBase.class.php';
	
	$db = new DataBase();
	
	$db->set("host", "localhost");
	$db->set("user", "root");
	$db->set("dbs", "better");
	
	$db->conexao();
	$db->selectdb();
?>