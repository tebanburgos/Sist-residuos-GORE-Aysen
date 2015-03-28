<?php
	include_once('include/conexion.php');

echo '                	<h2><span>Área de Gestión Lago Verde</span></h2> <br>';
echo'                   <div class="contenttitle radiusbottom0">';
echo '                	<h2 class="table"><span>Ubicación equipamiento de Almacenamiento - Lago Verde</span></h2>';

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
                    

$query=	"SELECT id_localizacion, geolocalizacion, fotografia, observacion FROM localizacion WHERE id_localizacion= 41";
	$result=mysql_db_query ($dbname, $query, $link);
	while ($row = mysql_fetch_array ($result))
	{
	  	echo '<tr class="gradeA">';
	  	echo '<td class="center">'.$row["geolocalizacion"].'</td>';
//		echo '<td>'.$row["fotografia"].'</td>';
		echo "<td><div class='center'><p> <a href='".$row["fotografia"]."' target='_blank' > <img src='".$row["fotografia"]."'  width='425' height='350' /></a></p></td>";
	  	echo '<td class="center">'.$row["geolocalizacion"].'</td>';
		echo '<a href="controlador/loc_lagoverde_edit.php?u='.$row["id_localizacion"].'" class="edit"> <img src="images/bgmain.png"/></a>';
		echo '</td>';
		echo '</tr>';
	}

echo '      </tbody>';
echo '                </table>';
                
                                
echo '                <br clear="all" />';
                    
//echo '                </div><!--content-->';
                

echo'                   <div class="contenttitle radiusbottom0">';
echo '                	<h2 class="table"><span>Rutas recolección transporte - Lago Verde</span></h2>';

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
                    

$query=	"SELECT id_localizacion, geolocalizacion, fotografia, observacion FROM localizacion WHERE id_localizacion= 42";
	$result=mysql_db_query ($dbname, $query, $link);
	while ($row = mysql_fetch_array ($result))
	{
	  	echo '<tr class="gradeA">';
	  	echo '<td class="center">'.$row["geolocalizacion"].'</td>';
//		echo '<td>'.$row["fotografia"].'</td>';
		echo "<td><div class='center'><p> <a href='".$row["fotografia"]."' target='_blank' > <img src='".$row["fotografia"]."'  width='425' height='350' /></a></p></td>";
	  	echo '<td class="center">'.$row["observacion"].'</td>';
		echo '<a href="controlador/loc_lagoverde_edit.php?u='.$row["id_localizacion"].'" class="edit"> <img src="images/bgmain.png"/></a>';
		echo '</td>';
		echo '</tr>';
	}

echo '      </tbody>';
echo '                </table>';
                
                                
echo '                <br clear="all" />';
                    
//echo '                </div><!--content-->';


echo'                   <div class="contenttitle radiusbottom0">';
echo '                	<h2 class="table"><span>Ubicación transferencia en estación - Lago Verde</span></h2>';

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
                    

$query=	"SELECT id_localizacion, geolocalizacion, fotografia, observacion FROM localizacion WHERE id_localizacion= 43";
	$result=mysql_db_query ($dbname, $query, $link);
	while ($row = mysql_fetch_array ($result))
	{
	  	echo '<tr class="gradeA">';
	  	echo '<td class="center">'.$row["geolocalizacion"].'</td>';
//		echo '<td>'.$row["fotografia"].'</td>';
		echo "<td><div class='center'><p> <a href='".$row["fotografia"]."' target='_blank' > <img src='".$row["fotografia"]."'  width='425' height='350' /></a></p></td>";
	  	echo '<td class="center">'.$row["observacion"].'</td>';
		echo '<a href="controlador/loc_lagoverde_edit.php?u='.$row["id_localizacion"].'" class="edit"> <img src="images/bgmain.png"/></a>';
		echo '</td>';
		echo '</tr>';
	}

echo '      </tbody>';
echo '                </table>';
                
                                
echo '                <br clear="all" />';
                    
//echo '                </div><!--content-->';


echo'                   <div class="contenttitle radiusbottom0">';
echo '                	<h2 class="table"><span>Ubicación valorización y/o tratamiento - Lago Verde</span></h2>';

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
                    

$query=	"SELECT id_localizacion, geolocalizacion, fotografia, observacion FROM localizacion WHERE id_localizacion= 44";
	$result=mysql_db_query ($dbname, $query, $link);
	while ($row = mysql_fetch_array ($result))
	{
	  	echo '<tr class="gradeA">';
	  	echo '<td class="center">'.$row["geolocalizacion"].'</td>';
//		echo '<td>'.$row["fotografia"].'</td>';
		echo "<td><div class='center'><p> <a href='".$row["fotografia"]."' target='_blank' > <img src='".$row["fotografia"]."'  width='425' height='350' /></a></p></td>";
	  	echo '<td class="center">'.$row["observacion"].'</td>';
		echo '<a href="controlador/loc_lagoverde_edit.php?u='.$row["id_localizacion"].'" class="edit"> <img src="images/bgmain.png"/></a>';
		echo '</td>';
		echo '</tr>';
	}

echo '      </tbody>';
echo '                </table>';
                
                                
echo '                <br clear="all" />';
                    
//echo '                </div><!--content-->';


echo'                   <div class="contenttitle radiusbottom0">';
echo '                	<h2 class="table"><span>Ubicación sitio de disposición final - Lago Verde</span></h2>';

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
                    

$query=	"SELECT id_localizacion, geolocalizacion, fotografia, observacion FROM localizacion WHERE id_localizacion= 45";
	$result=mysql_db_query ($dbname, $query, $link);
	while ($row = mysql_fetch_array ($result))
	{
	  	echo '<tr class="gradeA">';
	  	echo '<td class="center">'.$row["geolocalizacion"].'</td>';
//		echo '<td>'.$row["fotografia"].'</td>';
		echo "<td><div class='center'><p> <a href='".$row["fotografia"]."' target='_blank' > <img src='".$row["fotografia"]."'  width='425' height='350' /></a></p></td>";
	  	echo '<td class="center">'.$row["observacion"].'</td>';
		echo '<a href="controlador/loc_lagoverde_edit.php?u='.$row["id_localizacion"].'" class="edit"> <img src="images/bgmain.png"/></a>';
		echo '</td>';
		echo '</tr>';
	}

echo '      </tbody>';
echo '                </table>';
                
                                
echo '                <br clear="all" />';
                    
//echo '                </div><!--content-->';

echo '                	<h2><span>Área de Gestión La Tapera - Villa Amengual</span></h2> <br>';
echo'                   <div class="contenttitle radiusbottom0">';
echo '                	<h2 class="table"><span>Ubicación equipamiento de Almacenamiento - La Tapera - Villa Amengual</span></h2>';

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
                    

$query=	"SELECT id_localizacion, geolocalizacion, fotografia, observacion FROM localizacion WHERE id_localizacion= 61";
	$result=mysql_db_query ($dbname, $query, $link);
	while ($row = mysql_fetch_array ($result))
	{
	  	echo '<tr class="gradeA">';
	  	echo '<td class="center">'.$row["geolocalizacion"].'</td>';
//		echo '<td>'.$row["fotografia"].'</td>';
		echo "<td><div class='center'><p> <a href='".$row["fotografia"]."' target='_blank' > <img src='".$row["fotografia"]."'  width='425' height='350' /></a></p></td>";
	  	echo '<td class="center">'.$row["observacion"].'</td>';
		echo '<a href="controlador/loc_lagoverde_edit.php?u='.$row["id_localizacion"].'" class="edit"> <img src="images/bgmain.png"/></a>';
		echo '</td>';
		echo '</tr>';
	}

echo '      </tbody>';
echo '                </table>';
                
                                
echo '                <br clear="all" />';
                    
//echo '                </div><!--content-->';
                

echo'                   <div class="contenttitle radiusbottom0">';
echo '                	<h2 class="table"><span>Rutas recolección transporte - La Tapera - Villa Amengual</span></h2>';

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
                    

$query=	"SELECT id_localizacion, geolocalizacion, fotografia, observacion FROM localizacion WHERE id_localizacion= 62";
	$result=mysql_db_query ($dbname, $query, $link);
	while ($row = mysql_fetch_array ($result))
	{
	  	echo '<tr class="gradeA">';
	  	echo '<td class="center">'.$row["geolocalizacion"].'</td>';
//		echo '<td>'.$row["fotografia"].'</td>';
		echo "<td><div class='center'><p> <a href='".$row["fotografia"]."' target='_blank' > <img src='".$row["fotografia"]."'  width='425' height='350' /></a></p></td>";
	  	echo '<td class="center">'.$row["observacion"].'</td>';
		echo '<a href="controlador/loc_lagoverde_edit.php?u='.$row["id_localizacion"].'" class="edit"> <img src="images/bgmain.png"/></a>';
		echo '</td>';
		echo '</tr>';
	}

echo '      </tbody>';
echo '                </table>';
                
                                
echo '                <br clear="all" />';
                    
//echo '                </div><!--content-->';


echo'                   <div class="contenttitle radiusbottom0">';
echo '                	<h2 class="table"><span>Ubicación transferencia en estación - La Tapera - Villa Amengual</span></h2>';

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
                    

$query=	"SELECT id_localizacion, geolocalizacion, fotografia, observacion FROM localizacion WHERE id_localizacion= 63";
	$result=mysql_db_query ($dbname, $query, $link);
	while ($row = mysql_fetch_array ($result))
	{
	  	echo '<tr class="gradeA">';
	  	echo '<td class="center">'.$row["geolocalizacion"].'</td>';
//		echo '<td>'.$row["fotografia"].'</td>';
		echo "<td><div class='center'><p> <a href='".$row["fotografia"]."' target='_blank' > <img src='".$row["fotografia"]."'  width='425' height='350' /></a></p></td>";
	  	echo '<td class="center">'.$row["observacion"].'</td>';
		echo '<a href="controlador/loc_lagoverde_edit.php?u='.$row["id_localizacion"].'" class="edit"> <img src="images/bgmain.png"/></a>';
		echo '</td>';
		echo '</tr>';
	}

echo '      </tbody>';
echo '                </table>';
                
                                
echo '                <br clear="all" />';
                    
//echo '                </div><!--content-->';


echo'                   <div class="contenttitle radiusbottom0">';
echo '                	<h2 class="table"><span>Ubicación valorización y/o tratamiento - La Tapera - Villa Amengual</span></h2>';

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
                    

$query=	"SELECT id_localizacion, geolocalizacion, fotografia, observacion FROM localizacion WHERE id_localizacion= 64";
	$result=mysql_db_query ($dbname, $query, $link);
	while ($row = mysql_fetch_array ($result))
	{
	  	echo '<tr class="gradeA">';
	  	echo '<td class="center">'.$row["geolocalizacion"].'</td>';
//		echo '<td>'.$row["fotografia"].'</td>';
		echo "<td><div class='center'><p> <a href='".$row["fotografia"]."' target='_blank' > <img src='".$row["fotografia"]."'  width='425' height='350' /></a></p></td>";
	  	echo '<td class="center">'.$row["observacion"].'</td>';
		echo '<a href="controlador/loc_lagoverde_edit.php?u='.$row["id_localizacion"].'" class="edit"> <img src="images/bgmain.png"/></a>';
		echo '</td>';
		echo '</tr>';
	}

echo '      </tbody>';
echo '                </table>';
                
                                
echo '                <br clear="all" />';
                    
//echo '                </div><!--content-->';


echo'                   <div class="contenttitle radiusbottom0">';
echo '                	<h2 class="table"><span>Ubicación sitio de disposición final - La Tapera - Villa Amengual</span></h2>';

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
                    

$query=	"SELECT id_localizacion, geolocalizacion, fotografia, observacion FROM localizacion WHERE id_localizacion= 65";
	$result=mysql_db_query ($dbname, $query, $link);
	while ($row = mysql_fetch_array ($result))
	{
	  	echo '<tr class="gradeA">';
	  	echo '<td class="center">'.$row["geolocalizacion"].'</td>';
//		echo '<td>'.$row["fotografia"].'</td>';
		echo "<td><div class='center'><p> <a href='".$row["fotografia"]."' target='_blank' > <img src='".$row["fotografia"]."'  width='425' height='350' /></a></p></td>";
	  	echo '<td class="center">'.$row["observacion"].'</td>';
		echo '<a href="controlador/loc_lagoverde_edit.php?u='.$row["id_localizacion"].'" class="edit"> <img src="images/bgmain.png"/></a>';
		echo '</td>';
		echo '</tr>';
	}

echo '      </tbody>';
echo '                </table>';
                
                                
echo '                <br clear="all" />';
                    
//echo '                </div><!--content-->';

echo' 					<h2><span>Vertederos actuales</span></h2> <br>';
echo'                   <div class="contenttitle radiusbottom0">';
echo '                	<h2 class="table"><span>Sitio de disposición de residuos del servicio de aseo de Lago Verde</span></h2>';

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
                    

$query=	"SELECT id_localizacion, geolocalizacion, fotografia, observacion FROM localizacion WHERE id_localizacion= 90";
	$result=mysql_db_query ($dbname, $query, $link);
	while ($row = mysql_fetch_array ($result))
	{
	  	echo '<tr class="gradeA">';
	  	echo '<td class="center">'.$row["geolocalizacion"].'</td>';
//		echo '<td>'.$row["fotografia"].'</td>';
		echo "<td><div class='center'><p> <a href='".$row["fotografia"]."' target='_blank' > <img src='".$row["fotografia"]."'  width='425' height='350' /></a></p></td>";
	  	echo '<td class="center">'.$row["observacion"].'</td>';
		echo '<a href="controlador/loc_lagoverde_edit.php?u='.$row["id_localizacion"].'" class="edit"> <img src="images/bgmain.png"/></a>';
		echo '</td>';
		echo '</tr>';
	}

echo '      </tbody>';
echo '                </table>';
                
                                
echo '                <br clear="all" />';
                    
//echo '                </div><!--content-->';


echo'                   <div class="contenttitle radiusbottom0">';
echo '                	<h2 class="table"><span>Sitio de disposición de residuos del servicio de aseo de La Tapera</span></h2>';

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
                    

$query=	"SELECT id_localizacion, geolocalizacion, fotografia, observacion FROM localizacion WHERE id_localizacion= 91";
	$result=mysql_db_query ($dbname, $query, $link);
	while ($row = mysql_fetch_array ($result))
	{
	  	echo '<tr class="gradeA">';
	  	echo '<td class="center">'.$row["geolocalizacion"].'</td>';
//		echo '<td>'.$row["fotografia"].'</td>';
		echo "<td><div class='center'><p> <a href='".$row["fotografia"]."' target='_blank' > <img src='".$row["fotografia"]."'  width='425' height='350' /></a></p></td>";
	  	echo '<td class="center">'.$row["observacion"].'</td>';
		echo '<a href="controlador/loc_lagoverde_edit.php?u='.$row["id_localizacion"].'" class="edit"> <img src="images/bgmain.png"/></a>';
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