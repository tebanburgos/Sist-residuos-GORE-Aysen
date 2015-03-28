<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Editar PDF - Error</title>
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
<!--<script type="text/javascript" src="js/custom/general.js"></script>
<script type="text/javascript" src="js/custom/dashboard.js"></script>-->
<!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->
</head>

<body class="loggedin">
        
    <!-- START OF MAIN CONTENT -->
    <div class="mainwrapper">
     	<div class="mainwrapperinner">
         	
        <div class="mainleft">
          	<div class="mainleftinner">
            <?php
		require_once('template/menuoff.php');
		?>
       
            </div><!--mainleftinner-->
        </div><!--mainleft-->
        
        <div class="maincontent noright">
        	<div class="maincontentinner">
            	
                <ul class="maintabmenu">
                	<li class="current"><a href="#">Cargar documento</a></li>
                </ul><!--maintabmenu-->
                
                <div class="content" align="justify">
                	
                    <div class="contenttitle">
                    	<h2 class="chart"><span>Datos del documento</span></h2>
                    </div><!--contenttitle-->
                    <br />
                    
                    <p>
                    <h2>ERROR</h2>
                    <br>
                    El archivo no pudo ser subido debido a estos posibles errores:
                    <br>
                    <br>
                       - El documento no es de extensión PDF.
					<br>
                       - Para poder manejar archivos PDF en esta página, instale/configure/active el Plugin de Adobe Reader. Instale el complemento. O de preferencia ocupe otro navegador, como Google Chrome o Internet Explorer.
                    <br>
                    <br>
                    <br>
                     Inténtelo nuevamente.
                 	<br>
                   	<br>
                    <input type="reset" class="botoncancel" onclick="history.back()" value="Volver" />

                    </p>
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
