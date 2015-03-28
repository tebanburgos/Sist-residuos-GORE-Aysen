<?php


$password=$_POST["userpass"];

		if($password=="123")
		{
			 header("Location: /sistema/index2.php");
		}
		else{
			header("Location: /sistema/login.php");
		}

/*while ($arreglo = mysql_fetch_assoc($dbQuery)) {

	if($usuario==$arreglo["usuario"]&&md5($password)==$arreglo["password"])
	{ header("Location: /index.php?a=gonzalo");}
	else{
		echo "Adios";}
}
*/
?>