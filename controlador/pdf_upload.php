<?php session_start();

// Validamos que el get sea numerico
if (is_numeric($_GET["u"])) 
	{
	include("../include/conexion.php");
	$query="SELECT id_pdf, des_pdf FROM pdf WHERE id_pdf =".$_GET["u"].";";

	$result=mysql_db_query ($dbname, $query, $link);
	while ($row = mysql_fetch_array ($result))
		{
	  if ($row["id_pdf"]==$_GET["u"])
	  	{
	  	$_SESSION["userdetail"]=$user = array(
	  		"userdetail" => array(

								$row["des_pdf"],
	  							$row["id_pdf"]));
	  		
		
		mysql_close($link);
	  	header("Location:../edit_pdf.php");
	  	}	
		}
		mysql_free_result($result);
	}
else 
	{
		header("Location:/plan_regional.php");
	}
?>