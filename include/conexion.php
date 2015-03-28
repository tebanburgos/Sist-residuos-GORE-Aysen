<?php
@session_start();
@$link=mysql_connect("localhost", "root", "");
mysql_set_charset('utf8');
$dbname="aysen1";
@mysql_select_db($dbname, $link) OR DIE ("Error: No es posible establecer la conexión");

function conectar()
{
	mysql_connect("localhost", "root", "");
	mysql_select_db("aysen1");
}

function desconectar()
{
	mysql_close();
}

 class Conexion{
	private $conexion;
	private $total_consultas;
	
	public function Conectar(){
		$this->conexion=(mysql_connect("localhost","root","")) or die (mysql_error());
			mysql_select_db("aysen1",$this->conexion) or die(mysql_error());
	}
}
?>