<?php

/**
 * Classe respons�vel por conectar com o banco de dados mysql
 * @author Erick Marinheiro
 *
 */
class DataBase {
	
	private $host;
	private $user;
	private $pass;
	private $dbs;
	
	/**
	 * Construtor da classe
	 * @param unknown $host
	 * @param unknown $user
	 * @param unknown $pass
	 * @param unknown $dbs
	 */
	function __construct($host = "", $user = "", $pass = "", $dbs = "") {
		$this->host = $host;
		$this->user = $user;
		$this->pass = $pass;
		$this->dbs = $dbs;
	}
	
	/**
	 * Abre a conex�o
	 */
	function conexao() {
		$con = mysql_connect($this->host, $this->user, $this->pass) or die ("Erro: ".mysql_error());
	}
	
	/**
	 * Seleciona a base de dados
	 */
	function selectdb() {
		mysql_select_db($this->dbs) or die ("Erro: ".mysql_error());
	}
	
	/**
	 * M�todo respons�vel por realizar a query desejada
	 * @param unknown $sql
	 */
	function query($sql) {
		mysql_query($sql);
	}
	
	/**
	 * setter gen�rico
	 * @param unknown $prop
	 * @param unknown $value
	 */
	function set($propriedade, $value) {
		$this->$propriedade = $value;
	}
	
	/**
	 * getter gen�rico
	 * @param unknown $prop
	 */
	function get($propriedade) {
		return $this->$propriedade;
	}
}
	
?>