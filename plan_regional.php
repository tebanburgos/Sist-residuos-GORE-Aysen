<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Resumen ejecutivo - Plan Regional</title>
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
       
       <?php
		require_once('template/menu_planregional.php');
		?>
       
	
               
        <div class="maincontent noright">
        	   <div class="maincontentinner">
            	
                <ul class="maintabmenu multipletabmenu">
                    <li class="current"><a href="plan_regional.php">Resumen ejecutivo</a></li>
                    <li><a href="doc_completo.php">Documento completo</a></li>
                    <li><a href="plan_inversiones.php">Plan de inversiones</a></li>
                    
                </ul><!--maintabmenu-->
                
                <div class="content">
                <div class="contenttitle radiusbottom0">
                	<h2 class="table"><span>Resumen ejecutivo</span></h2>

                </div><!--contenttitle-->
                
                <content>
			</content>
                 <?php
                require_once ('php/datos_planregional.php');
                ?>
                  
                    
                </div><!--content-->
                
            </div><!--maincontentinner-->
            
            <div class="footer">
            	
            </div><!--footer-->
            
        </div><!--maincontent-->
        
     	</div><!--mainwrapperinner-->
    </div><!--mainwrapper-->
	<!-- END OF MAIN CONTENT -->
</body>
<?php
require_once('template/footer.php');
?>
</html>