<?php

class Conexao{
	public static function criar ():PDO{
		$url = 'mysql:dbname=clorocine;host=127.0.0.1';
		$user = 'root';
		$password = '';
		try{
			$db = new PDO ($url,$user,$password);
			}
		catch(PDOException $ex){
			echo'falhou'.$ex->getMessage();}
			return $db;
	}
}
?>