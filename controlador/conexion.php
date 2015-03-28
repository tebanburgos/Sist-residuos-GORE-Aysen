<?php
@session_start();
$link=mysql_connect("localhost", "root", "");
mysql_set_charset('utf8');
$dbname="aysen1";
mysql_select_db($dbname, $link) OR DIE ("Error: No es posible establecer la conexión");

 class Conexion{
	private $conexion;
	private $total_consultas;
	
	public function Conectar(){
		$this->conexion=(mysql_connect("localhost","root","")) or die (mysql_error());
			mysql_select_db("aysen1",$this->conexion) or die(mysql_error());
	}

	public function modificarLocalizacion($geo, $picture, $obsrv, $id){
		$sql="UPDATE localizacion SET geolocalizacion='".$geo."', fotografia ='images/fotos/".$picture."', observacion ='".$obsrv."' WHERE id_localizacion = '".$id."'";
		if(!mysql_query($sql))
		echo 'MySQL Error: '.mysql_error();	
	}
	
	public function modificarPDF($despdf, $idpdf){
		$sql="UPDATE pdf SET des_pdf ='pdf/".$despdf."' WHERE id_pdf = '".$idpdf."'";
		if(!mysql_query($sql))
		echo 'MySQL Error: '.mysql_error();	
	}
	
 }
?>