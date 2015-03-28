<?php
if(!isset($_SERVER['PHP_AUTH_USER'])||($_SERVER['PHP_AUTH_USER']!="admin"||$_SERVER['PHP_AUTH_PW']!="irAysen.510")){
header('WWW-Authenticate: Basic realm="Acceso restringido"');
header('HTTP/1.0 401 Unauthorized');
echo "no autorizado";
exit;}
?><?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Guaitecas - Editar localización</title>
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
		require_once('template/menu_guaitecas.php');
		?>
       
            </div><!--mainleftinner-->
        </div><!--mainleft-->
        
        <div class="maincontent noright">
        	<div class="maincontentinner">
            	
                <ul class="maintabmenu">
                	<li class="current"><a href="#">Modificar localización</a></li>
                </ul><!--maintabmenu-->
                
                <div class="content">
                	
                    <div class="contenttitle">
                    	<h2 class="chart"><span>Datos de la localización</span></h2>
                    </div><!--contenttitle-->
                    <br />
                    <form class="stdform" action="controlador/mod_loc_guaitecas.php" method="post" enctype="multipart/form-data" name="form1">
                                                                       
                        <p>
                            <label>Geolocalización (*)</label>
                            <span class="field"><input type="text" name="geolocalizacion" class="smallinput" required="required" value="<?php echo  $_SESSION['userdetail']['userdetail'][0] ?>"/></span>
                        </p>
                                                
                         <p>
                            <label>Fotografía actual</label>
                            <span class="field"><img src="<?php echo  $_SESSION['userdetail']['userdetail'][1] ?>"  width='425' height='350' /></span> 
                            
                        </p>
                                                
                        <p>
                            <label>Nueva fotografía (*)(**)</label>
                            <span class="field"><input type="file" name="foto" id="foto" class="smallinput" required="required" value="<?php echo  $_SESSION['userdetail']['userdetail'][1] ?>"/></span> 
                            
                        </p>
                        
                        <p>
                            <label>Observaciones (*)</label>
                            <span class="field"><input type="text" name="observaciones" style="width:500px;" class="smallinput" required="required" value="<?php echo  $_SESSION['userdetail']['userdetail'][2] ?>"/></span>
                        </p>
                        
                        <p>
                            <span class="field"><input type="hidden" name="idlocalizacion" id="idlocalizacion" class="smallinput" value="<?php echo  $_SESSION['userdetail']['userdetail'][3] ?>"/></span>
                        </p>
                        
                        <p class="stdformbutton">
                        	<button class="submit radius2" onclick="return validacampos()" >Modificar</button>
                            <input type="reset" class="reset radius2" onclick="location.href='loc_guaitecas.php'" value="Volver" />
                        </p>
                        
                        
                    </form>
                    <p>
                        <label> (*) Campos obligatorios. </label>
                        <br>
                        <label> (**) La imagen debe ser GIF, JPG, JPEG, PJPEG o PNG y no debe superar los 2MB. </label>
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