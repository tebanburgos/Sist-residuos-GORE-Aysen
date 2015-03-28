<?php session_start();

// Validamos que el get sea numerico
if (is_numeric($_GET["u"])) 
	{
	include("../include/conexion.php");
	$query="SELECT id_localizacion, geolocalizacion, fotografia FROM localizacion WHERE id_localizacion =".$_GET["u"].";";

	$result=mysql_db_query ($dbname, $query, $link);
	while ($row = mysql_fetch_array ($result))
		{
	  if ($row["id_localizacion"]==$_GET["u"])
	  	{
	  	$_SESSION["userdetail"]=$user = array(
	  		"userdetail" => array(

	  							$row["geolocalizacion"],
								$row["fotografia"],
	  							$row["id_localizacion"]));
	  		
		
		mysql_close($link);
	  	header("Location:../edit_loc_ohiggins.php");
	  	}	
		}
		mysql_free_result($result);
	}
else 
	{
		header("Location:/ohiggins.php");
	}
?>