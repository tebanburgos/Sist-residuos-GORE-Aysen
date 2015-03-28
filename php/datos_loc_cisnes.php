<?php
	include_once('include/conexion.php');

echo '                	<h2><span>Área de Gestión Puerto Cisnes - Gala - Gaviota</span></h2> <br>';
echo'                   <div class="contenttitle radiusbottom0">';
echo '                	<h2 class="table"><span>Ubicación equipamiento de Almacenamiento - Puerto Cisnes - Gala - Gaviota</span></h2>';

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
                    

$query=	"SELECT id_localizacion, geolocalizacion, fotografia, observacion FROM localizacion WHERE id_localizacion= 21";
	$result=mysql_db_query ($dbname, $query, $link);
	while ($row = mysql_fetch_array ($result))
	{
	  	echo '<tr class="gradeA">';
	  	echo '<td class="center">'.$row["geolocalizacion"].'</td>';
//		echo '<td>'.$row["fotografia"].'</td>';
		echo "<td><div class='center'><p> <a href='".$row["fotografia"]."' target='_blank' > <img src='".$row["fotografia"]."'  width='425' height='350' /></a></p></td>";
	  	echo '<td class="center">'.$row["observacion"].'</td>';
		echo '<a href="controlador/loc_cisnes_edit.php?u='.$row["id_localizacion"].'" class="edit"> <img src="images/bgmain.png"/></a>';
		echo '</td>';
		echo '</tr>';
	}

echo '      </tbody>';
echo '                </table>';
                
                                
echo '                <br clear="all" />';
                    
//echo '                </div><!--content-->';
                

echo'                   <div class="contenttitle radiusbottom0">';
echo '                	<h2 class="table"><span>Rutas recolección transporte - Puerto Cisnes - Gala - Gaviota</span></h2>';

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
                    

$query=	"SELECT id_localizacion, geolocalizacion, fotografia, observacion FROM localizacion WHERE id_localizacion= 22";
	$result=mysql_db_query ($dbname, $query, $link);
	while ($row = mysql_fetch_array ($result))
	{
	  	echo '<tr class="gradeA">';
	  	echo '<td class="center">'.$row["geolocalizacion"].'</td>';
//		echo '<td>'.$row["fotografia"].'</td>';
		echo "<td><div class='center'><p> <a href='".$row["fotografia"]."' target='_blank' > <img src='".$row["fotografia"]."'  width='425' height='350' /></a></p></td>";
	  	echo '<td class="center">'.$row["observacion"].'</td>';
		echo '<a href="controlador/loc_cisnes_edit.php?u='.$row["id_localizacion"].'" class="edit"> <img src="images/bgmain.png"/></a>';
		echo '</td>';
		echo '</tr>';
	}

echo '      </tbody>';
echo '                </table>';
                
                                
echo '                <br clear="all" />';
                    
//echo '                </div><!--content-->';


echo'                   <div class="contenttitle radiusbottom0">';
echo '                	<h2 class="table"><span>Ubicación transferencia en estación - Puerto Cisnes - Gala - Gaviota</span></h2>';

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
                    

$query=	"SELECT id_localizacion, geolocalizacion, fotografia, observacion FROM localizacion WHERE id_localizacion= 23";
	$result=mysql_db_query ($dbname, $query, $link);
	while ($row = mysql_fetch_array ($result))
	{
	  	echo '<tr class="gradeA">';
	  	echo '<td class="center">'.$row["geolocalizacion"].'</td>';
//		echo '<td>'.$row["fotografia"].'</td>';
		echo "<td><div class='center'><p> <a href='".$row["fotografia"]."' target='_blank' > <img src='".$row["fotografia"]."'  width='425' height='350' /></a></p></td>";
	  	echo '<td class="center">'.$row["observacion"].'</td>';
		echo '<a href="controlador/loc_cisnes_edit.php?u='.$row["id_localizacion"].'" class="edit"> <img src="images/bgmain.png"/></a>';
		echo '</td>';
		echo '</tr>';
	}

echo '      </tbody>';
echo '                </table>';
                
                                
echo '                <br clear="all" />';
                    
//echo '                </div><!--content-->';


echo'                   <div class="contenttitle radiusbottom0">';
echo '                	<h2 class="table"><span>Ubicación valorización y/o tratamiento - Puerto Cisnes - Gala - Gaviota</span></h2>';

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
                    

$query=	"SELECT id_localizacion, geolocalizacion, fotografia, observacion FROM localizacion WHERE id_localizacion= 24";
	$result=mysql_db_query ($dbname, $query, $link);
	while ($row = mysql_fetch_array ($result))
	{
	  	echo '<tr class="gradeA">';
	  	echo '<td class="center">'.$row["geolocalizacion"].'</td>';
//		echo '<td>'.$row["fotografia"].'</td>';
		echo "<td><div class='center'><p> <a href='".$row["fotografia"]."' target='_blank' > <img src='".$row["fotografia"]."'  width='425' height='350' /></a></p></td>";
	  	echo '<td class="center">'.$row["observacion"].'</td>';
		echo '<a href="controlador/loc_cisnes_edit.php?u='.$row["id_localizacion"].'" class="edit"> <img src="images/bgmain.png"/></a>';
		echo '</td>';
		echo '</tr>';
	}

echo '      </tbody>';
echo '                </table>';
                
                                
echo '                <br clear="all" />';
                    
//echo '                </div><!--content-->';


echo'                   <div class="contenttitle radiusbottom0">';
echo '                	<h2 class="table"><span>Ubicación sitio de disposición final - Puerto Cisnes - Gala - Gaviota</span></h2>';

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
                    

$query=	"SELECT id_localizacion, geolocalizacion, fotografia, observacion FROM localizacion WHERE id_localizacion= 25";
	$result=mysql_db_query ($dbname, $query, $link);
	while ($row = mysql_fetch_array ($result))
	{
	  	echo '<tr class="gradeA">';
	  	echo '<td class="center">'.$row["geolocalizacion"].'</td>';
//		echo '<td>'.$row["fotografia"].'</td>';
		echo "<td><div class='center'><p> <a href='".$row["fotografia"]."' target='_blank' > <img src='".$row["fotografia"]."'  width='425' height='350' /></a></p></td>";
	  	echo '<td class="center">'.$row["observacion"].'</td>';
		echo '<a href="controlador/loc_cisnes_edit.php?u='.$row["id_localizacion"].'" class="edit"> <img src="images/bgmain.png"/></a>';
		echo '</td>';
		echo '</tr>';
	}

echo '      </tbody>';
echo '                </table>';
                
                                
echo '                <br clear="all" />';
                    
//echo '                </div><!--content-->';


echo '                	<h2><span>Área de Gestión La Junta - Puyuhuapi - Raúl Marín Balmaceda</span></h2> <br>';
echo'                   <div class="contenttitle radiusbottom0">';
echo '                	<h2 class="table"><span>Ubicación equipamiento de Almacenamiento - La Junta - Puyuhuapi - Raúl Marín Balmaceda</span></h2>';

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
                    

$query=	"SELECT id_localizacion, geolocalizacion, fotografia, observacion FROM localizacion WHERE id_localizacion= 56";
	$result=mysql_db_query ($dbname, $query, $link);
	while ($row = mysql_fetch_array ($result))
	{
	  	echo '<tr class="gradeA">';
	  	echo '<td class="center">'.$row["geolocalizacion"].'</td>';
//		echo '<td>'.$row["fotografia"].'</td>';
		echo "<td><div class='center'><p> <a href='".$row["fotografia"]."' target='_blank' > <img src='".$row["fotografia"]."'  width='425' height='350' /></a></p></td>";
	  	echo '<td class="center">'.$row["observacion"].'</td>';
		echo '<a href="controlador/loc_cisnes_edit.php?u='.$row["id_localizacion"].'" class="edit"> <img src="images/bgmain.png"/></a>';
		echo '</td>';
		echo '</tr>';
	}

echo '      </tbody>';
echo '                </table>';
                
                                
echo '                <br clear="all" />';
                    
//echo '                </div><!--content-->';
                

echo'                   <div class="contenttitle radiusbottom0">';
echo '                	<h2 class="table"><span>Rutas recolección transporte - La Junta - Puyuhuapi - Raúl Marín Balmaceda</span></h2>';

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
                    

$query=	"SELECT id_localizacion, geolocalizacion, fotografia, observacion FROM localizacion WHERE id_localizacion= 57";
	$result=mysql_db_query ($dbname, $query, $link);
	while ($row = mysql_fetch_array ($result))
	{
	  	echo '<tr class="gradeA">';
	  	echo '<td class="center">'.$row["geolocalizacion"].'</td>';
//		echo '<td>'.$row["fotografia"].'</td>';
		echo "<td><div class='center'><p> <a href='".$row["fotografia"]."' target='_blank' > <img src='".$row["fotografia"]."'  width='425' height='350' /></a></p></td>";
	  	echo '<td class="center">'.$row["observacion"].'</td>';
		echo '<a href="controlador/loc_cisnes_edit.php?u='.$row["id_localizacion"].'" class="edit"> <img src="images/bgmain.png"/></a>';
		echo '</td>';
		echo '</tr>';
	}

echo '      </tbody>';
echo '                </table>';
                
                                
echo '                <br clear="all" />';
                    
//echo '                </div><!--content-->';


echo'                   <div class="contenttitle radiusbottom0">';
echo '                	<h2 class="table"><span>Ubicación transferencia en estación - La Junta - Puyuhuapi - Raúl Marín Balmaceda</span></h2>';

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
                    

$query=	"SELECT id_localizacion, geolocalizacion, fotografia, observacion FROM localizacion WHERE id_localizacion= 58";
	$result=mysql_db_query ($dbname, $query, $link);
	while ($row = mysql_fetch_array ($result))
	{
	  	echo '<tr class="gradeA">';
	  	echo '<td class="center">'.$row["geolocalizacion"].'</td>';
//		echo '<td>'.$row["fotografia"].'</td>';
		echo "<td><div class='center'><p> <a href='".$row["fotografia"]."' target='_blank' > <img src='".$row["fotografia"]."'  width='425' height='350' /></a></p></td>";
	  	echo '<td class="center">'.$row["observacion"].'</td>';
		echo '<a href="controlador/loc_cisnes_edit.php?u='.$row["id_localizacion"].'" class="edit"> <img src="images/bgmain.png"/></a>';
		echo '</td>';
		echo '</tr>';
	}

echo '      </tbody>';
echo '                </table>';
                
                                
echo '                <br clear="all" />';
                    
//echo '                </div><!--content-->';


echo'                   <div class="contenttitle radiusbottom0">';
echo '                	<h2 class="table"><span>Ubicación valorización y/o tratamiento - La Junta - Puyuhuapi - Raúl Marín Balmaceda</span></h2>';

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
                    

$query=	"SELECT id_localizacion, geolocalizacion, fotografia, observacion FROM localizacion WHERE id_localizacion= 59";
	$result=mysql_db_query ($dbname, $query, $link);
	while ($row = mysql_fetch_array ($result))
	{
	  	echo '<tr class="gradeA">';
	  	echo '<td class="center">'.$row["geolocalizacion"].'</td>';
//		echo '<td>'.$row["fotografia"].'</td>';
		echo "<td><div class='center'><p> <a href='".$row["fotografia"]."' target='_blank' > <img src='".$row["fotografia"]."'  width='425' height='350' /></a></p></td>";
	  	echo '<td class="center">'.$row["observacion"].'</td>';
		echo '<a href="controlador/loc_cisnes_edit.php?u='.$row["id_localizacion"].'" class="edit"> <img src="images/bgmain.png"/></a>';
		echo '</td>';
		echo '</tr>';
	}

echo '      </tbody>';
echo '                </table>';
                
                                
echo '                <br clear="all" />';
                    
//echo '                </div><!--content-->';


echo'                   <div class="contenttitle radiusbottom0">';
echo '                	<h2 class="table"><span>Ubicación sitio de disposición final - La Junta - Puyuhuapi - Raúl Marín Balmaceda</span></h2>';

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
                    

$query=	"SELECT id_localizacion, geolocalizacion, fotografia, observacion FROM localizacion WHERE id_localizacion= 60";
	$result=mysql_db_query ($dbname, $query, $link);
	while ($row = mysql_fetch_array ($result))
	{
	  	echo '<tr class="gradeA">';
	  	echo '<td class="center">'.$row["geolocalizacion"].'</td>';
//		echo '<td>'.$row["fotografia"].'</td>';
		echo "<td><div class='center'><p> <a href='".$row["fotografia"]."' target='_blank' > <img src='".$row["fotografia"]."'  width='425' height='350' /></a></p></td>";
	  	echo '<td class="center">'.$row["observacion"].'</td>';
		echo '<a href="controlador/loc_cisnes_edit.php?u='.$row["id_localizacion"].'" class="edit"> <img src="images/bgmain.png"/></a>';
		echo '</td>';
		echo '</tr>';
	}

echo '      </tbody>';
echo '                </table>';
                
                                
echo '                <br clear="all" />';
                    
//echo '                </div><!--content-->';


echo' 					<h2><span>Vertederos actuales</span></h2> <br>';
echo'                   <div class="contenttitle radiusbottom0">';
echo '                	<h2 class="table"><span>Sitio de disposición de residuos del servicio de aseo de Puerto Cisnes</span></h2>';

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
                    

$query=	"SELECT id_localizacion, geolocalizacion, fotografia, observacion FROM localizacion WHERE id_localizacion= 85";
	$result=mysql_db_query ($dbname, $query, $link);
	while ($row = mysql_fetch_array ($result))
	{
	  	echo '<tr class="gradeA">';
	  	echo '<td class="center">'.$row["geolocalizacion"].'</td>';
//		echo '<td>'.$row["fotografia"].'</td>';
		echo "<td><div class='center'><p> <a href='".$row["fotografia"]."' target='_blank' > <img src='".$row["fotografia"]."'  width='425' height='350' /></a></p></td>";
	  	echo '<td class="center">'.$row["observacion"].'</td>';
		echo '<a href="controlador/loc_cisnes_edit.php?u='.$row["id_localizacion"].'" class="edit"> <img src="images/bgmain.png"/></a>';
		echo '</td>';
		echo '</tr>';
	}

echo '      </tbody>';
echo '                </table>';
                
                                
echo '                <br clear="all" />';
                    
//echo '                </div><!--content-->';


echo'                   <div class="contenttitle radiusbottom0">';
echo '                	<h2 class="table"><span>Sitio de disposición de residuos del servicio de aseo de Puerto Gala</span></h2>';

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
                    

$query=	"SELECT id_localizacion, geolocalizacion, fotografia, observacion FROM localizacion WHERE id_localizacion= 86";
	$result=mysql_db_query ($dbname, $query, $link);
	while ($row = mysql_fetch_array ($result))
	{
	  	echo '<tr class="gradeA">';
	  	echo '<td class="center">'.$row["geolocalizacion"].'</td>';
//		echo '<td>'.$row["fotografia"].'</td>';
		echo "<td><div class='center'><p> <a href='".$row["fotografia"]."' target='_blank' > <img src='".$row["fotografia"]."'  width='425' height='350' /></a></p></td>";
	  	echo '<td class="center">'.$row["observacion"].'</td>';
		echo '<a href="controlador/loc_cisnes_edit.php?u='.$row["id_localizacion"].'" class="edit"> <img src="images/bgmain.png"/></a>';
		echo '</td>';
		echo '</tr>';
	}

echo '      </tbody>';
echo '                </table>';
                
                                
echo '                <br clear="all" />';
                    
//echo '                </div><!--content-->';



echo'                   <div class="contenttitle radiusbottom0">';
echo '                	<h2 class="table"><span>Sitio de disposición de residuos del servicio de aseo de Puerto Gaviota</span></h2>';

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
                    

$query=	"SELECT id_localizacion, geolocalizacion, fotografia, observacion FROM localizacion WHERE id_localizacion= 87";
	$result=mysql_db_query ($dbname, $query, $link);
	while ($row = mysql_fetch_array ($result))
	{
	  	echo '<tr class="gradeA">';
	  	echo '<td class="center">'.$row["geolocalizacion"].'</td>';
//		echo '<td>'.$row["fotografia"].'</td>';
		echo "<td><div class='center'><p> <a href='".$row["fotografia"]."' target='_blank' > <img src='".$row["fotografia"]."'  width='425' height='350' /></a></p></td>";
	  	echo '<td class="center">'.$row["observacion"].'</td>';
		echo '<a href="controlador/loc_cisnes_edit.php?u='.$row["id_localizacion"].'" class="edit"> <img src="images/bgmain.png"/></a>';
		echo '</td>';
		echo '</tr>';
	}

echo '      </tbody>';
echo '                </table>';
                
                                
echo '                <br clear="all" />';
                    
//echo '                </div><!--content-->';


echo'                   <div class="contenttitle radiusbottom0">';
echo '                	<h2 class="table"><span>Sitio de disposición de residuos del servicio de aseo de La Junta - Puyuhuapi</span></h2>';

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
                    

$query=	"SELECT id_localizacion, geolocalizacion, fotografia, observacion FROM localizacion WHERE id_localizacion= 88";
	$result=mysql_db_query ($dbname, $query, $link);
	while ($row = mysql_fetch_array ($result))
	{
	  	echo '<tr class="gradeA">';
	  	echo '<td class="center">'.$row["geolocalizacion"].'</td>';
//		echo '<td>'.$row["fotografia"].'</td>';
		echo "<td><div class='center'><p> <a href='".$row["fotografia"]."' target='_blank' > <img src='".$row["fotografia"]."'  width='425' height='350' /></a></p></td>";
	  	echo '<td class="center">'.$row["observacion"].'</td>';
		echo '<a href="controlador/loc_cisnes_edit.php?u='.$row["id_localizacion"].'" class="edit"> <img src="images/bgmain.png"/></a>';
		echo '</td>';
		echo '</tr>';
	}

echo '      </tbody>';
echo '                </table>';
                
                                
echo '                <br clear="all" />';
                    
//echo '                </div><!--content-->';


echo'                   <div class="contenttitle radiusbottom0">';
echo '                	<h2 class="table"><span>Sitio de disposición de residuos del servicio de aseo de Raúl Marín Balmaceda</span></h2>';

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
                    

$query=	"SELECT id_localizacion, geolocalizacion, fotografia, observacion FROM localizacion WHERE id_localizacion= 89";
	$result=mysql_db_query ($dbname, $query, $link);
	while ($row = mysql_fetch_array ($result))
	{
	  	echo '<tr class="gradeA">';
	  	echo '<td class="center">'.$row["geolocalizacion"].'</td>';
//		echo '<td>'.$row["fotografia"].'</td>';
		echo "<td><div class='center'><p> <a href='".$row["fotografia"]."' target='_blank' > <img src='".$row["fotografia"]."'  width='425' height='350' /></a></p></td>";
	  	echo '<td class="center">'.$row["observacion"].'</td>';
		echo '<a href="controlador/loc_cisnes_edit.php?u='.$row["id_localizacion"].'" class="edit"> <img src="images/bgmain.png"/></a>';
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