<?php session_start();
require_once 'conexion.php';
$geolocalizacion=$_POST["geolocalizacion"];
$imagen=$_FILES["foto"]['name'];
//$foto=$_POST["foto"];
$observaciones=$_POST["observaciones"];
$idlocalizacion = $_POST["idlocalizacion"];


function quitaAcentos($cadena){
$p = array('á','é','í','ó','ú','Á','É','Í','Ó','Ú','ñ','Ñ');
$r = array('a','e','i','o','u','A','E','I','O','U','n','N');
return str_replace($p, $r, $cadena);
}

$url = quitaAcentos($imagen);


$mime = array('image/jpg', 'image/jpeg', 'image/pjpeg', 'image/gif', 'image/png');
$tipo_archivo = $_FILES["foto"]['type'];
$tamano_archivo = $_FILES["foto"]['size'];

echo '<script type="text/javascript">';
echo  'function redireccion(){ ';
echo  'window.location ="../loc_ohiggins.php";';
echo '}</script>';

if(in_array($tipo_archivo, $mime))
	{
		if($tamano_archivo<3000000) 
		{
			if (move_uploaded_file($_FILES["foto"]['tmp_name'],$_SERVER['DOCUMENT_ROOT'].'/sistema/images/fotos/'.$url)){
      		//echo "El archivo ha sido cargado correctamente.";
				$db = new Conexion();
				$db->Conectar();
				$db->modificarLocalizacion($geolocalizacion, $url, $observaciones, $idlocalizacion);
			echo "<script type=\"text/javascript\"> window.location='../loc_ohiggins.php';</script>"; 
   			}else{
      			echo "<script type=\"text/javascript\"> window.location='../error.php';</script>";  
   				}
		}
		else {
			echo "<script type=\"text/javascript\"> window.location='../error.php';</script>";   
			 }
		}
else {
	echo "<script type=\"text/javascript\"> window.location='../error.php';</script>"; 
	}
?>