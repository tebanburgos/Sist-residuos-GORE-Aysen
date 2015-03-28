<?php session_start();
require_once 'conexion.php';
$archivopdf=$_FILES["pdf"]['name'];
$idpdf = $_POST["idpdf"];


function quitaAcentos($cadena){
$p = array('á','é','í','ó','ú','Á','É','Í','Ó','Ú','ñ','Ñ');
$r = array('a','e','i','o','u','A','E','I','O','U','n','N');
return str_replace($p, $r, $cadena);
}

$url = quitaAcentos($archivopdf);


$mime = array('application/pdf');
$tipo_archivo = $_FILES["pdf"]['type'];

if($_FILES["pdf"]["type"] == "application/pdf")
	{
			if (move_uploaded_file($_FILES["pdf"]['tmp_name'],$_SERVER['DOCUMENT_ROOT'].'/sistema/pdf/'.$url)){
      		//echo "El archivo ha sido cargado correctamente.";
				$db = new Conexion();
				$db->Conectar();
				$db->modificarPDF($archivopdf, $idpdf);
			echo "<script type=\"text/javascript\"> window.location='../plan_regional.php';</script>"; 
   			}
			else{
      			echo "<script type=\"text/javascript\"> window.location='../error2.php';</script>";   
   				}
	}
else {
	echo "<script type=\"text/javascript\"> window.location='../error2.php';</script>";   
	}
?>