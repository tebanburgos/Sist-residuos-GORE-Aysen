<?php
	include_once('include/conexion.php');

$query=	"SELECT id_pdf, des_pdf FROM pdf WHERE id_pdf= 3";
	$result=mysql_db_query ($dbname, $query, $link);
	while ($row = mysql_fetch_array ($result))
	{

echo '<tr>';
echo' <th> <div align="right"> <a href="controlador/pdf_upload.php?u='.$row["id_pdf"].'" class="edit"> <img src="images/bgmain.png"/></a> <th>  </div>';
echo ' <div align="justify">';
echo '   <th>  <button class="boton" onclick= window.open("descargar.php?file='.$row["des_pdf"].'");return false; >Descargar PDF</button> </th> ';
echo ' <div align="right">  </div> <br> </div>';
echo '</tr>';

echo '                 <table cellpadding="0" cellspacing="0" border="0" class="stdtable" id="dyntable">';
echo '               <embed src="'.$row["des_pdf"].'" width="1000" height="1000" />';
echo '                </table>';
                
echo '                <br clear="all" />';




	}

echo '      </tbody>';
echo '                </table>';
                
                                
echo '                <br clear="all" />';
                    
//echo '                </div><!--content-->';
                



	mysql_close($link);
	mysql_free_result($result);
?>