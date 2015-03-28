<?php
	include_once('include/conexion.php');
echo' 					<h2><span>Área Gestión - Puerto Aysén</span></h2> <br>';
echo'                   <div class="contenttitle radiusbottom0">';
echo '                	<h2 class="table"><span>Ubicación equipamiento de Almacenamiento - Puerto Aysén</span></h2>';

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
                    

$query=	"SELECT id_localizacion, geolocalizacion, fotografia, observacion FROM localizacion WHERE id_localizacion= 6";
	$result=mysql_db_query ($dbname, $query, $link);
	while ($row = mysql_fetch_array ($result))
	{
	  	echo '<tr class="gradeA">';
	  	echo '<td class="center">'.$row["geolocalizacion"].'</td>';
//		echo '<td>'.$row["fotografia"].'</td>';
		echo "<td><div class='center'><p> <a href='".$row["fotografia"]."' target='_blank' > <img src='".$row["fotografia"]."'  width='425' height='350' /></a></p></td>";
		echo '<td class="center">'.$row["observacion"].'</td>';
		echo '<a href="controlador/loc_aysen_edit.php?u='.$row["id_localizacion"].'" class="edit"> <img src="images/bgmain.png"/></a>';
		echo '</td>';
		echo '</tr>';
	}

echo '      </tbody>';
echo '                </table>';
                
                                
echo '                <br clear="all" />';
                    
//echo '                </div><!--content-->';
                

echo'                   <div class="contenttitle radiusbottom0">';
echo '                	<h2 class="table"><span>Rutas recolección transporte - Puerto Aysén</span></h2>';

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
                    

$query=	"SELECT id_localizacion, geolocalizacion, fotografia, observacion FROM localizacion WHERE id_localizacion= 7";
	$result=mysql_db_query ($dbname, $query, $link);
	while ($row = mysql_fetch_array ($result))
	{
	  	echo '<tr class="gradeA">';
	  	echo '<td class="center">'.$row["geolocalizacion"].'</td>';
//		echo '<td>'.$row["fotografia"].'</td>';
		echo "<td><div class='center'><p> <a href='".$row["fotografia"]."' target='_blank' > <img src='".$row["fotografia"]."'  width='425' height='350' /></a></p></td>";
		echo '<td class="center">'.$row["observacion"].'</td>';
		echo '<a href="controlador/loc_aysen_edit.php?u='.$row["id_localizacion"].'" class="edit"> <img src="images/bgmain.png"/></a>';
		echo '</td>';
		echo '</tr>';
	}

echo '      </tbody>';
echo '                </table>';
                
                                
echo '                <br clear="all" />';
                    
//echo '                </div><!--content-->';


echo'                   <div class="contenttitle radiusbottom0">';
echo '                	<h2 class="table"><span>Ubicación transferencia en estación - Puerto Aysén</span></h2>';

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
                    

$query=	"SELECT id_localizacion, geolocalizacion, fotografia, observacion FROM localizacion WHERE id_localizacion= 8";
	$result=mysql_db_query ($dbname, $query, $link);
	while ($row = mysql_fetch_array ($result))
	{
	  	echo '<tr class="gradeA">';
	  	echo '<td class="center">'.$row["geolocalizacion"].'</td>';
//		echo '<td>'.$row["fotografia"].'</td>';
		echo "<td><div class='center'><p> <a href='".$row["fotografia"]."' target='_blank' > <img src='".$row["fotografia"]."'  width='425' height='350' /></a></p></td>";
	  	echo '<td class="center">'.$row["observacion"].'</td>';
		echo '<a href="controlador/loc_aysen_edit.php?u='.$row["id_localizacion"].'" class="edit"> <img src="images/bgmain.png"/></a>';
		echo '</td>';
		echo '</tr>';
	}

echo '      </tbody>';
echo '                </table>';
                
                                
echo '                <br clear="all" />';
                    
//echo '                </div><!--content-->';


echo'                   <div class="contenttitle radiusbottom0">';
echo '                	<h2 class="table"><span>Ubicación valorización y/o tratamiento - Puerto Aysén</span></h2>';

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
                    

$query=	"SELECT id_localizacion, geolocalizacion, fotografia, observacion FROM localizacion WHERE id_localizacion= 9";
	$result=mysql_db_query ($dbname, $query, $link);
	while ($row = mysql_fetch_array ($result))
	{
	  	echo '<tr class="gradeA">';
	  	echo '<td class="center">'.$row["geolocalizacion"].'</td>';
//		echo '<td>'.$row["fotografia"].'</td>';
		echo "<td><div class='center'><p> <a href='".$row["fotografia"]."' target='_blank' > <img src='".$row["fotografia"]."'  width='425' height='350' /></a></p></td>";
		echo '<td class="center">'.$row["observacion"].'</td>';
		echo '<a href="controlador/loc_aysen_edit.php?u='.$row["id_localizacion"].'" class="edit"> <img src="images/bgmain.png"/></a>';
		echo '</td>';
		echo '</tr>';
	}

echo '      </tbody>';
echo '                </table>';
                
                                
echo '                <br clear="all" />';
                    
//echo '                </div><!--content-->';


echo'                   <div class="contenttitle radiusbottom0">';
echo '                	<h2 class="table"><span>Ubicación sitio de disposición final - Puerto Aysén</span></h2>';

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
                    

$query=	"SELECT id_localizacion, geolocalizacion, fotografia, observacion FROM localizacion WHERE id_localizacion= 10";
	$result=mysql_db_query ($dbname, $query, $link);
	while ($row = mysql_fetch_array ($result))
	{
	  	echo '<tr class="gradeA">';
	  	echo '<td class="center">'.$row["geolocalizacion"].'</td>';
//		echo '<td>'.$row["fotografia"].'</td>';
		echo "<td><div class='center'><p> <a href='".$row["fotografia"]."' target='_blank' > <img src='".$row["fotografia"]."'  width='425' height='350' /></a></p></td>";
	  	echo '<td class="center">'.$row["observacion"].'</td>';
		echo '<a href="controlador/loc_aysen_edit.php?u='.$row["id_localizacion"].'" class="edit"> <img src="images/bgmain.png"/></a>';
		echo '</td>';
		echo '</tr>';
	}

echo '      </tbody>';
echo '                </table>';
                
                                
echo '                <br clear="all" />';
                    
//echo '                </div><!--content-->';

echo' 					<h2><span>Área Gestión - Isla Huichas</span></h2> <br>';
echo'                   <div class="contenttitle radiusbottom0">';
echo '                	<h2 class="table"><span>Ubicación equipamiento de Almacenamiento - Isla Huichas</span></h2>';

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
                    

$query=	"SELECT id_localizacion, geolocalizacion, fotografia, observacion FROM localizacion WHERE id_localizacion= 51";
	$result=mysql_db_query ($dbname, $query, $link);
	while ($row = mysql_fetch_array ($result))
	{
	  	echo '<tr class="gradeA">';
	  	echo '<td class="center">'.$row["geolocalizacion"].'</td>';
//		echo '<td>'.$row["fotografia"].'</td>';
		echo "<td><div class='center'><p> <a href='".$row["fotografia"]."' target='_blank' > <img src='".$row["fotografia"]."'  width='425' height='350' /></a></p></td>";
	  	echo '<td class="center">'.$row["observacion"].'</td>';
		echo '<a href="controlador/loc_aysen_edit.php?u='.$row["id_localizacion"].'" class="edit"> <img src="images/bgmain.png"/></a>';
		echo '</td>';
		echo '</tr>';
	}

echo '      </tbody>';
echo '                </table>';
                
                                
echo '                <br clear="all" />';
                    
//echo '                </div><!--content-->';
                

echo'                   <div class="contenttitle radiusbottom0">';
echo '                	<h2 class="table"><span>Rutas recolección transporte - Isla Huichas</span></h2>';

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
                    

$query=	"SELECT id_localizacion, geolocalizacion, fotografia, observacion FROM localizacion WHERE id_localizacion= 52";
	$result=mysql_db_query ($dbname, $query, $link);
	while ($row = mysql_fetch_array ($result))
	{
	  	echo '<tr class="gradeA">';
	  	echo '<td class="center">'.$row["geolocalizacion"].'</td>';
//		echo '<td>'.$row["fotografia"].'</td>';
		echo "<td><div class='center'><p> <a href='".$row["fotografia"]."' target='_blank' > <img src='".$row["fotografia"]."'  width='425' height='350' /></a></p></td>";
	  	echo '<td class="center">'.$row["observacion"].'</td>';
		echo '<a href="controlador/loc_aysen_edit.php?u='.$row["id_localizacion"].'" class="edit"> <img src="images/bgmain.png"/></a>';
		echo '</td>';
		echo '</tr>';
	}

echo '      </tbody>';
echo '                </table>';
                
                                
echo '                <br clear="all" />';
                    
//echo '                </div><!--content-->';


echo'                   <div class="contenttitle radiusbottom0">';
echo '                	<h2 class="table"><span>Ubicación transferencia en estación - Isla Huichas</span></h2>';

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
                    

$query=	"SELECT id_localizacion, geolocalizacion, fotografia, observacion FROM localizacion WHERE id_localizacion= 53";
	$result=mysql_db_query ($dbname, $query, $link);
	while ($row = mysql_fetch_array ($result))
	{
	  	echo '<tr class="gradeA">';
	  	echo '<td class="center">'.$row["geolocalizacion"].'</td>';
//		echo '<td>'.$row["fotografia"].'</td>';
		echo "<td><div class='center'><p> <a href='".$row["fotografia"]."' target='_blank' > <img src='".$row["fotografia"]."'  width='425' height='350' /></a></p></td>";
	  	echo '<td class="center">'.$row["observacion"].'</td>';
		echo '<a href="controlador/loc_aysen_edit.php?u='.$row["id_localizacion"].'" class="edit"> <img src="images/bgmain.png"/></a>';
		echo '</td>';
		echo '</tr>';
	}

echo '      </tbody>';
echo '                </table>';
                
                                
echo '                <br clear="all" />';
                    
//echo '                </div><!--content-->';


echo'                   <div class="contenttitle radiusbottom0">';
echo '                	<h2 class="table"><span>Ubicación valorización y/o tratamiento - Isla Huichas</span></h2>';

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
                    

$query=	"SELECT id_localizacion, geolocalizacion, fotografia, observacion FROM localizacion WHERE id_localizacion= 54";
	$result=mysql_db_query ($dbname, $query, $link);
	while ($row = mysql_fetch_array ($result))
	{
	  	echo '<tr class="gradeA">';
	  	echo '<td class="center">'.$row["geolocalizacion"].'</td>';
//		echo '<td>'.$row["fotografia"].'</td>';
		echo "<td><div class='center'><p> <a href='".$row["fotografia"]."' target='_blank' > <img src='".$row["fotografia"]."'  width='425' height='350' /></a></p></td>";
	  	echo '<td class="center">'.$row["observacion"].'</td>';
		echo '<a href="controlador/loc_aysen_edit.php?u='.$row["id_localizacion"].'" class="edit"> <img src="images/bgmain.png"/></a>';
		echo '</td>';
		echo '</tr>';
	}

echo '      </tbody>';
echo '                </table>';
                
                                
echo '                <br clear="all" />';
                    
//echo '                </div><!--content-->';


echo'                   <div class="contenttitle radiusbottom0">';
echo '                	<h2 class="table"><span>Ubicación sitio de disposición final - Isla Huichas</span></h2>';

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
                    

$query=	"SELECT id_localizacion, geolocalizacion, fotografia, observacion FROM localizacion WHERE id_localizacion= 55";
	$result=mysql_db_query ($dbname, $query, $link);
	while ($row = mysql_fetch_array ($result))
	{
	  	echo '<tr class="gradeA">';
	  	echo '<td class="center">'.$row["geolocalizacion"].'</td>';
//		echo '<td>'.$row["fotografia"].'</td>';
		echo "<td><div class='center'><p> <a href='".$row["fotografia"]."' target='_blank' > <img src='".$row["fotografia"]."'  width='425' height='350' /></a></p></td>";
	  	echo '<td class="center">'.$row["observacion"].'</td>';
		echo '<a href="controlador/loc_aysen_edit.php?u='.$row["id_localizacion"].'" class="edit"> <img src="images/bgmain.png"/></a>';
		echo '</td>';
		echo '</tr>';
	}

echo '      </tbody>';
echo '                </table>';
                
                                
echo '                <br clear="all" />';
                    
//echo '                </div><!--content-->';



echo' 					<h2><span>Vertederos actuales</span></h2> <br>';
echo'                   <div class="contenttitle radiusbottom0">';
echo '                	<h2 class="table"><span>Sitio de disposición de residuos del servicio de aseo Aysén continental</span></h2>';

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
                    

$query=	"SELECT id_localizacion, geolocalizacion, fotografia, observacion FROM localizacion WHERE id_localizacion= 82";
	$result=mysql_db_query ($dbname, $query, $link);
	while ($row = mysql_fetch_array ($result))
	{
	  	echo '<tr class="gradeA">';
	  	echo '<td class="center">'.$row["geolocalizacion"].'</td>';
//		echo '<td>'.$row["fotografia"].'</td>';
		echo "<td><div class='center'><p> <a href='".$row["fotografia"]."' target='_blank' > <img src='".$row["fotografia"]."'  width='425' height='350' /></a></p></td>";
	  	echo '<td class="center">'.$row["observacion"].'</td>';
		echo '<a href="controlador/loc_aysen_edit.php?u='.$row["id_localizacion"].'" class="edit"> <img src="images/bgmain.png"/></a>';
		echo '</td>';
		echo '</tr>';
	}

echo '      </tbody>';
echo '                </table>';
                
                                
echo '                <br clear="all" />';
                    
//echo '                </div><!--content-->';





echo'                   <div class="contenttitle radiusbottom0">';
echo '                	<h2 class="table"><span>Sitio de disposición de residuos del servicio de aseo de Villa Mañihuales</span></h2>';

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
                    

$query=	"SELECT id_localizacion, geolocalizacion, fotografia, observacion FROM localizacion WHERE id_localizacion= 83";
	$result=mysql_db_query ($dbname, $query, $link);
	while ($row = mysql_fetch_array ($result))
	{
	  	echo '<tr class="gradeA">';
	  	echo '<td class="center">'.$row["geolocalizacion"].'</td>';
//		echo '<td>'.$row["fotografia"].'</td>';
		echo "<td><div class='center'><p> <a href='".$row["fotografia"]."' target='_blank' > <img src='".$row["fotografia"]."'  width='425' height='350' /></a></p></td>";
	  	echo '<td class="center">'.$row["observacion"].'</td>';
		echo '<a href="controlador/loc_aysen_edit.php?u='.$row["id_localizacion"].'" class="edit"> <img src="images/bgmain.png"/></a>';
		echo '</td>';
		echo '</tr>';
	}

echo '      </tbody>';
echo '                </table>';
                
                                
echo '                <br clear="all" />';
                    
//echo '                </div><!--content-->';





echo'                   <div class="contenttitle radiusbottom0">';
echo '                	<h2 class="table"><span>Sitio de disposición de residuos del servicio de aseo de Isla Las Huichas</span></h2>';

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
                    

$query=	"SELECT id_localizacion, geolocalizacion, fotografia, observacion FROM localizacion WHERE id_localizacion= 84";
	$result=mysql_db_query ($dbname, $query, $link);
	while ($row = mysql_fetch_array ($result))
	{
	  	echo '<tr class="gradeA">';
	  	echo '<td class="center">'.$row["geolocalizacion"].'</td>';
//		echo '<td>'.$row["fotografia"].'</td>';
		echo "<td><div class='center'><p> <a href='".$row["fotografia"]."' target='_blank' > <img src='".$row["fotografia"]."'  width='425' height='350' /></a></p></td>";
	  	echo '<td class="center">'.$row["observacion"].'</td>';
		echo '<a href="controlador/loc_aysen_edit.php?u='.$row["id_localizacion"].'" class="edit"> <img src="images/bgmain.png"/></a>';
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