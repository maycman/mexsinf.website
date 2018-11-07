<!DOPTYPE html PUBLIC"n">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
<link rel="icon" type="favicon/ico" href="favicon.ico">
<title>Creador De Documentos</title>
<link rel="stylesheet" href="css/bootstrap.css" type="text/css">
<link rel="stylesheet" href="css/bootstrap-switch.css" type="text/css">
<link rel="stylesheet" href="css/datepicker.css" type="text/css">
<link rel="stylesheet" href="css/move.css" type="text/css">
<link rel="stylesheet" href="css/iconmedia.css" type="text/css">
<link rel="stylesheet" href="css/normalize.css" type="text/css">
<link rel="stylesheet" href="css/genera.css" type="text/css">
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src = "js/jquery.js"></script>
<script src = "js/bootstrap-switch.js"></script>
<script src = "js/bootstrap.min.js"></script>
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
<script src = "js/datepicker.js"></script>
<script src = "js/moment-datepicker.js"></script>
<script src = "js/queryd.js"></script>
</head>
<body id="wrap" class="imgen">
<header>
  <nav id="prub" class="navbar navbar-default navbar-fixed-top">
		<div class="container-fluid">
    	<!-- Brand and toggle get grouped for better mobile display -->
    	<div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
        	<span class="icon-bar"></span>
        	<span class="icon-bar"></span>
        	<span class="icon-bar"></span>
      	</button>
      	<a class="navbar-brand">Documentos Expediente</a>
    	</div>
    	<!-- Collect the nav links, forms, and other content for toggling -->
    	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      	<ul class="nav navbar-nav">
           <li id="home"><a href="index.php?page=home">Inicio<span class="sr-only">(current)</span></a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a data-toggle="modal" data-target="#info" style="cursor: pointer;">Informaci&oacute;n Extra</a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
	</nav>
</header>
<!-- Modal -->
<div id="info" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!--Que debe salir del modal-->
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Informacion</h4>
            </div>
            <div class="modal-body">
                <div class="container">
                    <p>Incidentes y Sugerencias, Notificame A Mi Email</p>
                    <p>michael.valdes@mexsinf.cf</p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<div>
    <?php
        header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
        header("Cache-Control: post-check=0, pre-check=0", false);
        header("Pragma: no-cache");
        if(isset($_GET['page']))
        {
            $page_name = $_GET['page'];
            include("shared/".$page_name.".php");
        }
        else
        {
            include("shared/home.php");
        }
    ?> 
</div>
<?php include("shared/footer.php"); ?>
</body>
</html>