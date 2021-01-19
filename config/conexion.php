<?php

class Database{
	public static function conexion(){
		$db = new mysqli('localhost','root','','streaming_app');
		$db->query("SET NAMES 'utf-8'");
		return $db;
	}
}

?>