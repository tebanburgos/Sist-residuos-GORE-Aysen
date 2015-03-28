<?php
	include_once('include/conexion.php');

echo'                   <div class="contenttitle radiusbottom0">';
echo '                	<h2 class="table"><span>Ubicación equipamiento de Almacenamiento</span></h2>';

echo '                </div><!--contenttitle-->';
                
echo '                <content>';
echo '			</content>';

echo '                                <table cellpadding="0" cellspacing="0" border="0" class="stdtable" id="dyntable">';
echo '                    <colgroup>';
echo '                        <col class="con0" />';
echo '                        <col class="con1" />';
echo '                        <col class="con0" />';
echo '                        <col class="con1" />';
echo '                        <col class="con0" />';
echo '                    </colgroup>';
echo '                    <thead>';
echo '                        <tr>';
echo '                            <th class="head0">Geolocalización</th>';
echo '                            <th class="head1">Fotografía</th>';
echo '                            <th class="head0">Observaciones</th>';
echo '                        </tr>';
echo '                    </thead>';
echo '                    <tfoot>';
echo '                        <tr>';
echo '                            <th class="head0">Geolocalización</th>';
echo '                            <th class="head1">Fotografía</th>';
echo '                            <th class="head0">Observaciones</th>';
echo '                        </tr>';
echo '                    </tfoot>';
echo '                    <tbody>';
                    

$query=	"SELECT id_localizacion, geolocalizacion, fotografia, observacion FROM localizacion WHERE id_localizacion= 31";
	$result=mysql_db_query ($dbname, $query, $link);
	while ($row = mysql_fetch_array ($result))
	{
	  	echo '<tr class="gradeA">';
	  	echo '<td class="center">'.$row["geolocalizacion"].'</td>';
//		echo '<td>'.$row["fotografia"].'</td>';
		echo "<td><div class='center'><p> <a href='".$row["fotografia"]."' target='_blank' > <img src='".$row["fotografia"]."'  width='425' height='350' /></a></p></td>";
	  	echo '<td class="center">'.$row["observacion"].'</td>';
		echo '<a href="controlador/loc_coyhaique_edit.php?u='.$row["id_localizacion"].'" class="edit"> <img src="images/bgmain.png"/></a>';
		echo '</td>';
		echo '</tr>';
	}

echo '      </tbody>';
echo '                </table>';
                
                                
echo '                <br clear="all" />';
                    
//echo '                </div><!--content-->';
                

echo'                   <div class="contenttitle radiusbottom0">';
echo '                	<h2 class="table"><span>Rutas recolección transporte</span></h2>';

echo '                </div><!--contenttitle-->';
                
echo '                <content>';
echo '			</content>';

echo '                                <table cellpadding="0" cellspacing="0" border="0" class="stdtable" id="dyntable">';
echo '                    <colgroup>';
echo '                        <col class="con0" />';
echo '                        <col class="con1" />';
echo '                        <col class="con0" />';
echo '                        <col class="con1" />';
echo '                        <col class="con0" />';
echo '                    </colgroup>';
echo '                    <thead>';
echo '                        <tr>';
echo '                            <th class="head0">Geolocalización</th>';
echo '                            <th class="head1">Fotografía</th>';
echo '                            <th class="head0">Observaciones</th>';
echo '                        </tr>';
echo '                    </thead>';
echo '                    <tfoot>';
echo '                        <tr>';
echo '                            <th class="head0">Geolocalización</th>';
echo '                            <th class="head1">Fotografía</th>';
echo '                            <th class="head0">Observaciones</th>';
echo '                        </tr>';
echo '                    </tfoot>';
echo '                    <tbody>';
                    

$query=	"SELECT id_localizacion, geolocalizacion, fotografia, observacion FROM localizacion WHERE id_localizacion= 32";
	$result=mysql_db_query ($dbname, $query, $link);
	while ($row = mysql_fetch_array ($result))
	{
	  	echo '<tr class="gradeA">';
	  	echo '<td class="center">'.$row["geolocalizacion"].'</td>';
//		echo '<td>'.$row["fotografia"].'</td>';
		echo "<td><div class='center'><p> <a href='".$row["fotografia"]."' target='_blank' > <img src='".$row["fotografia"]."'  width='425' height='350' /></a></p></td>";
	  	echo '<td class="center">'.$row["observacion"].'</td>';
		echo '<a href="controlador/loc_coyhaique_edit.php?u='.$row["id_localizacion"].'" class="edit"> <img src="images/bgmain.png"/></a>';
		echo '</td>';
		echo '</tr>';
	}

echo '      </tbody>';
echo '                </table>';
                
                                
echo '                <br clear="all" />';
                    
//echo '                </div><!--content-->';


echo'                   <div class="contenttitle radiusbottom0">';
echo '                	<h2 class="table"><span>Ubicación transferencia en estación</span></h2>';

echo '                </div><!--contenttitle-->';
                
echo '                <content>';
echo '			</content>';

echo '                                <table cellpadding="0" cellspacing="0" border="0" class="stdtable" id="dyntable">';
echo '                    <colgroup>';
echo '                        <col class="con0" />';
echo '                        <col class="con1" />';
echo '                        <col class="con0" />';
echo '                        <col class="con1" />';
echo '                        <col class="con0" />';
echo '                    </colgroup>';
echo '                    <thead>';
echo '                        <tr>';
echo '                            <th class="head0">Geolocalización</th>';
echo '                            <th class="head1">Fotografía</th>';
echo '                            <th class="head0">Observaciones</th>';
echo '                        </tr>';
echo '                    </thead>';
echo '                    <tfoot>';
echo '                        <tr>';
echo '                            <th class="head0">Geolocalización</th>';
echo '                            <th class="head1">Fotografía</th>';
echo '                            <th class="head0">Observaciones</th>';
echo '                        </tr>';
echo '                    </tfoot>';
echo '                    <tbody>';
                    

$query=	"SELECT id_localizacion, geolocalizacion, fotografia, observacion FROM localizacion WHERE id_localizacion= 33";
	$result=mysql_db_query ($dbname, $query, $link);
	while ($row = mysql_fetch_array ($result))
	{
	  	echo '<tr class="gradeA">';
	  	echo '<td class="center">'.$row["geolocalizacion"].'</td>';
//		echo '<td>'.$row["fotografia"].'</td>';
		echo "<td><div class='center'><p> <a href='".$row["fotografia"]."' target='_blank' > <img src='".$row["fotografia"]."'  width='425' height='350' /></a></p></td>";
	  	echo '<td class="center">'.$row["observacion"].'</td>';
		echo '<a href="controlador/loc_coyhaique_edit.php?u='.$row["id_localizacion"].'" class="edit"> <img src="images/bgmain.png"/></a>';
		echo '</td>';
		echo '</tr>';
	}

echo '      </tbody>';
echo '                </table>';
                
                                
echo '                <br clear="all" />';
                    
//echo '                </div><!--content-->';


echo'                   <div class="contenttitle radiusbottom0">';
echo '                	<h2 class="table"><span>Ubicación valorización y/o tratamiento</span></h2>';

echo '                </div><!--contenttitle-->';
                
echo '                <content>';
echo '			</content>';

echo '                                <table cellpadding="0" cellspacing="0" border="0" class="stdtable" id="dyntable">';
echo '                    <colgroup>';
echo '                        <col class="con0" />';
echo '                        <col class="con1" />';
echo '                        <col class="con0" />';
echo '                        <col class="con1" />';
echo '                        <col class="con0" />';
echo '                    </colgroup>';
echo '                    <thead>';
echo '                        <tr>';
echo '                            <th class="head0">Geolocalización</th>';
echo '                            <th class="head1">Fotografía</th>';
echo '                            <th class="head0">Observaciones</th>';
echo '                        </tr>';
echo '                    </thead>';
echo '                    <tfoot>';
echo '                        <tr>';
echo '                            <th class="head0">Geolocalización</th>';
echo '                            <th class="head1">Fotografía</th>';
echo '                            <th class="head0">Observaciones</th>';
echo '                        </tr>';
echo '                    </tfoot>';
echo '                    <tbody>';
                    

$query=	"SELECT id_localizacion, geolocalizacion, fotografia, observacion FROM localizacion WHERE id_localizacion= 34";
	$result=mysql_db_query ($dbname, $query, $link);
	while ($row = mysql_fetch_array ($result))
	{
	  	echo '<tr class="gradeA">';
	  	echo '<td class="center">'.$row["geolocalizacion"].'</td>';
//		echo '<td>'.$row["fotografia"].'</td>';
		echo "<td><div class='center'><p> <a href='".$row["fotografia"]."' target='_blank' > <img src='".$row["fotografia"]."'  width='425' height='350' /></a></p></td>";
	  	echo '<td class="center">'.$row["observacion"].'</td>';
		echo '<a href="controlador/loc_coyhaique_edit.php?u='.$row["id_localizacion"].'" class="edit"> <img src="images/bgmain.png"/></a>';
		echo '</td>';
		echo '</tr>';
	}

echo '      </tbody>';
echo '                </table>';
                
                                
echo '                <br clear="all" />';
                    
//echo '                </div><!--content-->';


echo'                   <div class="contenttitle radiusbottom0">';
echo '                	<h2 class="table"><span>Ubicación sitio de disposición final</span></h2>';

echo '                </div><!--contenttitle-->';
                
echo '                <content>';
echo '			</content>';

echo '                                <table cellpadding="0" cellspacing="0" border="0" class="stdtable" id="dyntable">';
echo '                    <colgroup>';
echo '                        <col class="con0" />';
echo '                        <col class="con1" />';
echo '                        <col class="con0" />';
echo '                        <col class="con1" />';
echo '                        <col class="con0" />';
echo '                    </colgroup>';
echo '                    <thead>';
echo '                        <tr>';
echo '                            <th class="head0">Geolocalización</th>';
echo '                            <th class="head1">Fotografía</th>';
echo '                            <th class="head0">Observaciones</th>';
echo '                        </tr>';
echo '                    </thead>';
echo '                    <tfoot>';
echo '                        <tr>';
echo '                            <th class="head0">Geolocalización</th>';
echo '                            <th class="head1">Fotografía</th>';
echo '                            <th class="head0">Observaciones</th>';
echo '                        </tr>';
echo '                    </tfoot>';
echo '                    <tbody>';
                    

$query=	"SELECT id_localizacion, geolocalizacion, fotografia, observacion FROM localizacion WHERE id_localizacion= 35";
	$result=mysql_db_query ($dbname, $query, $link);
	while ($row = mysql_fetch_array ($result))
	{
	  	echo '<tr class="gradeA">';
	  	echo '<td class="center">'.$row["geolocalizacion"].'</td>';
//		echo '<td>'.$row["fotografia"].'</td>';
		echo "<td><div class='center'><p> <a href='".$row["fotografia"]."' target='_blank' > <img src='".$row["fotografia"]."'  width='425' height='350' /></a></p></td>";
	  	echo '<td class="center">'.$row["observacion"].'</td>';
		echo '<a href="controlador/loc_coyhaique_edit.php?u='.$row["id_localizacion"].'" class="edit"> <img src="images/bgmain.png"/></a>';
		echo '</td>';
		echo '</tr>';
	}

echo '      </tbody>';
echo '                </table>';
                
                                
echo '                <br clear="all" />';
                    
//echo '                </div><!--content-->';

echo' 					<h2><span>Vertederos actuales</span></h2> <br>';
echo'                   <div class="contenttitle radiusbottom0">';
echo '                	<h2 class="table"><span>Sitio de disposición de residuos del servicio de aseo de Balmaceda</span></h2>';

echo '                </div><!--contenttitle-->';
                
echo '                <content>';
echo '			</content>';

echo '                                <table cellpadding="0" cellspacing="0" border="0" class="stdtable" id="dyntable">';
echo '                    <colgroup>';
echo '                        <col class="con0" />';
echo '                        <col class="con1" />';
echo '                        <col class="con0" />';
echo '                        <col class="con1" />';
echo '                        <col class="con0" />';
echo '                    </colgroup>';
echo '                    <thead>';
echo '                        <tr>';
echo '                            <th class="head0">Geolocalización</th>';
echo '                            <th class="head1">Fotografía</th>';
echo '                            <th class="head0">Observaciones</th>';
echo '                        </tr>';
echo '                    </thead>';
echo '                    <tfoot>';
echo '                        <tr>';
echo '                            <th class="head0">Geolocalización</th>';
echo '                            <th class="head1">Fotografía</th>';
echo '                            <th class="head0">Observaciones</th>';
echo '                        </tr>';
echo '                    </tfoot>';
echo '                    <tbody>';
                    

$query=	"SELECT id_localizacion, geolocalizacion, fotografia, observacion FROM localizacion WHERE id_localizacion= 78";
	$result=mysql_db_query ($dbname, $query, $link);
	while ($row = mysql_fetch_array ($result))
	{
	  	echo '<tr class="gradeA">';
	  	echo '<td class="center">'.$row["geolocalizacion"].'</td>';
//		echo '<td>'.$row["fotografia"].'</td>';
		echo "<td><div class='center'><p> <a href='".$row["fotografia"]."' target='_blank' > <img src='".$row["fotografia"]."'  width='425' height='350' /></a></p></td>";
	  	echo '<td class="center">'.$row["observacion"].'</td>';
		echo '<a href="controlador/loc_coyhaique_edit.php?u='.$row["id_localizacion"].'" class="edit"> <img src="images/bgmain.png"/></a>';
		echo '</td>';
		echo '</tr>';
	}

echo '      </tbody>';
echo '                </table>';
                
                                
echo '                <br clear="all" />';
                    
//echo '                </div><!--content-->';


echo'                   <div class="contenttitle radiusbottom0">';
echo '                	<h2 class="table"><span>Sitio de disposición de residuos del servicio de aseo de El Blanco</span></h2>';

echo '                </div><!--contenttitle-->';
                
echo '                <content>';
echo '			</content>';

echo '                                <table cellpadding="0" cellspacing="0" border="0" class="stdtable" id="dyntable">';
echo '                    <colgroup>';
echo '                        <col class="con0" />';
echo '                        <col class="con1" />';
echo '                        <col class="con0" />';
echo '                        <col class="con1" />';
echo '                        <col class="con0" />';
echo '                    </colgroup>';
echo '                    <thead>';
echo '                        <tr>';
echo '                            <th class="head0">Geolocalización</th>';
echo '                            <th class="head1">Fotografía</th>';
echo '                            <th class="head0">Observaciones</th>';
echo '                        </tr>';
echo '                    </thead>';
echo '                    <tfoot>';
echo '                        <tr>';
echo '                            <th class="head0">Geolocalización</th>';
echo '                            <th class="head1">Fotografía</th>';
echo '                            <th class="head0">Observaciones</th>';
echo '                        </tr>';
echo '                    </tfoot>';
echo '                    <tbody>';
                    

$query=	"SELECT id_localizacion, geolocalizacion, fotografia, observacion FROM localizacion WHERE id_localizacion= 79";
	$result=mysql_db_query ($dbname, $query, $link);
	while ($row = mysql_fetch_array ($result))
	{
	  	echo '<tr class="gradeA">';
	  	echo '<td class="center">'.$row["geolocalizacion"].'</td>';
//		echo '<td>'.$row["fotografia"].'</td>';
		echo "<td><div class='center'><p> <a href='".$row["fotografia"]."' target='_blank' > <img src='".$row["fotografia"]."'  width='425' height='350' /></a></p></td>";
	  	echo '<td class="center">'.$row["observacion"].'</td>';
		echo '<a href="controlador/loc_coyhaique_edit.php?u='.$row["id_localizacion"].'" class="edit"> <img src="images/bgmain.png"/></a>';
		echo '</td>';
		echo '</tr>';
	}

echo '      </tbody>';
echo '                </table>';
                
                                
echo '                <br clear="all" />';
                    
//echo '                </div><!--content-->';


echo'                   <div class="contenttitle radiusbottom0">';
echo '                	<h2 class="table"><span>Sitio de disposición de residuos del servicio de aseo de Villa Ortega</span></h2>';

echo '                </div><!--contenttitle-->';
                
echo '                <content>';
echo '			</content>';

echo '                                <table cellpadding="0" cellspacing="0" border="0" class="stdtable" id="dyntable">';
echo '                    <colgroup>';
echo '                        <col class="con0" />';
echo '                        <col class="con1" />';
echo '                        <col class="con0" />';
echo '                        <col class="con1" />';
echo '                        <col class="con0" />';
echo '                    </colgroup>';
echo '                    <thead>';
echo '                        <tr>';
echo '                            <th class="head0">Geolocalización</th>';
echo '                            <th class="head1">Fotografía</th>';
echo '                            <th class="head0">Observaciones</th>';
echo '                        </tr>';
echo '                    </thead>';
echo '                    <tfoot>';
echo '                        <tr>';
echo '                            <th class="head0">Geolocalización</th>';
echo '                            <th class="head1">Fotografía</th>';
echo '                            <th class="head0">Observaciones</th>';
echo '                        </tr>';
echo '                    </tfoot>';
echo '                    <tbody>';
                    

$query=	"SELECT id_localizacion, geolocalizacion, fotografia, observacion FROM localizacion WHERE id_localizacion= 80";
	$result=mysql_db_query ($dbname, $query, $link);
	while ($row = mysql_fetch_array ($result))
	{
	  	echo '<tr class="gradeA">';
	  	echo '<td class="center">'.$row["geolocalizacion"].'</td>';
//		echo '<td>'.$row["fotografia"].'</td>';
		echo "<td><div class='center'><p> <a href='".$row["fotografia"]."' target='_blank' > <img src='".$row["fotografia"]."'  width='425' height='350' /></a></p></td>";
	  	echo '<td class="center">'.$row["observacion"].'</td>';
		echo '<a href="controlador/loc_coyhaique_edit.php?u='.$row["id_localizacion"].'" class="edit"> <img src="images/bgmain.png"/></a>';
		echo '</td>';
		echo '</tr>';
	}

echo '      </tbody>';
echo '                </table>';
                
                                
echo '                <br clear="all" />';
                    
//echo '                </div><!--content-->';


echo'                   <div class="contenttitle radiusbottom0">';
echo '                	<h2 class="table"><span>Sitio de disposición de residuos del servicio de aseo de Ñirehuao</span></h2>';

echo '                </div><!--contenttitle-->';
                
echo '                <content>';
echo '			</content>';

echo '                                <table cellpadding="0" cellspacing="0" border="0" class="stdtable" id="dyntable">';
echo '                    <colgroup>';
echo '                        <col class="con0" />';
echo '                        <col class="con1" />';
echo '                        <col class="con0" />';
echo '                        <col class="con1" />';
echo '                        <col class="con0" />';
echo '                    </colgroup>';
echo '                    <thead>';
echo '                        <tr>';
echo '                            <th class="head0">Geolocalización</th>';
echo '                            <th class="head1">Fotografía</th>';
echo '                            <th class="head0">Observaciones</th>';
echo '                        </tr>';
echo '                    </thead>';
echo '                    <tfoot>';
echo '                        <tr>';
echo '                            <th class="head0">Geolocalización</th>';
echo '                            <th class="head1">Fotografía</th>';
echo '                            <th class="head0">Observaciones</th>';
echo '                        </tr>';
echo '                    </tfoot>';
echo '                    <tbody>';
                    

$query=	"SELECT id_localizacion, geolocalizacion, fotografia, observacion FROM localizacion WHERE id_localizacion= 81";
	$result=mysql_db_query ($dbname, $query, $link);
	while ($row = mysql_fetch_array ($result))
	{
	  	echo '<tr class="gradeA">';
	  	echo '<td class="center">'.$row["geolocalizacion"].'</td>';
//		echo '<td>'.$row["fotografia"].'</td>';
		echo "<td><div class='center'><p> <a href='".$row["fotografia"]."' target='_blank' > <img src='".$row["fotografia"]."'  width='425' height='350' /></a></p></td>";
	  	echo '<td class="center">'.$row["observacion"].'</td>';
		echo '<a href="controlador/loc_coyhaique_edit.php?u='.$row["id_localizacion"].'" class="edit"> <img src="images/bgmain.png"/></a>';
		echo '</td>';
		echo '</tr>';
	}

echo '      </tbody>';
echo '                </table>';
                
                                
echo '                <br clear="all" />';
                    
//echo '                </div><!--content-->';

	mysql_close($link);
	mysql_free_result($result);
?>