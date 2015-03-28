<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Sistema de Información de Residuos Sólidos Municipales - Región de Aysén</title>
<link rel="stylesheet" href="css/style.css" type="text/css" />
<?php
require_once('template/header.php');
?>
<!--[if IE 9]>
    <link rel="stylesheet" media="screen" href="css/ie9.css"/>
<![endif]-->

<!--[if IE 8]>
    <link rel="stylesheet" media="screen" href="css/ie8.css"/>
<![endif]-->

<!--[if IE 7]>
    <link rel="stylesheet" media="screen" href="css/ie7.css"/>
<![endif]-->
<script type="text/javascript" src="js/plugins/jquery-1.7.min.js"></script>
<script type="text/javascript" src="js/plugins/jquery.flot.min.js"></script>
<script type="text/javascript" src="js/plugins/jquery.flot.resize.min.js"></script>
<script type="text/javascript" src="js/plugins/jquery-ui-1.8.16.custom.min.js"></script>
<!--<script type="text/javascript" src="js/custom/general.js"></script>-->
<!--<script type="text/javascript" src="js/custom/dashboard.js"></script>-->
<!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->
</head>

	<body class="loggedin">

    <!-- START OF MAIN CONTENT -->
    <div class="mainwrapper">
     	<div class="mainwrapperinner">
        
        <?php
		require_once('template/menu.php');
		?>
        

        <div class="maincontent noright">
        	<div class="maincontentinner">
            	
                <ul class="maintabmenu">
                	<li class="current"><a href="#">Presentación</a></li>
                </ul><!--maintabmenu-->
                
                <div class="content" align="justify">
                 <p>Este Sistema de Información forma parte del Plan Regional de Gestión de Residuos Sólidos Municipales de la Región de Aysén. El objetivo de él, es proporcionar una herramienta útil para la toma de decisiones en los diferentes niveles de la gestión de residuos.
<br>
<br>
El sistema debe ser actualizado cada año, verificando con cada municipio la información requerida. De este modo se podrá hacer seguimiento del impacto que en cada entidad local tiene las acciones que ha definido el Plan Regional de Gestión de Residuos Sólidos Municipales. Se encuentra diseñado como una herramienta de gestión institucional en tres áreas de información: administración, localización, gestión operativa y gestión financiera. </p>
                 <br>
                 <br>
                 <br>
Disclaimer: este proyecto en GitHub no posee információn con la cual se hizo originalmente este sitio. Las imágenes, la base de datos y los archivos en Excel pertenecen al Gobierno Regional de Aysén - Chile. Este proyecto es meramente referencial e informativa y no pretende ser exhaustiva.
                 <br>
                 <br>
                 <br>
                 <br>
                </div><!--content-->
                
            </div><!--maincontentinner-->
            

            
        </div><!--maincontent-->
                
     	</div><!--mainwrapperinner-->
    </div><!--mainwrapper-->
	<!-- END OF MAIN CONTENT -->
    

</body>
<?php
require_once('template/footer.php');
?>        
</html>
