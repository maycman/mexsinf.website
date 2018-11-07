<!DOPTYPE html PUBLIC"n">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
<link rel="icon" type="favicon/ico" href="favicon.ico">
<title>Listado De Equipos</title>
<link rel="stylesheet" href="css/bootstrap.css" type="text/css">
<link rel="stylesheet" href="css/move.css" type="text/css">
<link rel="stylesheet" href="css/iconmedia.css" type="text/css">
<link rel="stylesheet" href="css/normalize.css" type="text/css">
<link rel="stylesheet" href="css/estilos.css" type="text/css">
<script src = "js/jquery.js"></script>
<script src = "js/bootstrap.min.js"></script>
<script src = "js/queryd.js"></script>
</head>
<body id="wrap" class="imgen">
<header>
  <nav id="prub" class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
    	<!-- Brand and toggle get grouped for better mobile display -->
    	<div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
        	<span class="icon-bar"></span>
        	<span class="icon-bar"></span>
        	<span class="icon-bar"></span>
      	</button>
      	<a class="navbar-brand">Listado Equipos Fonix</a>
    	</div>
    	<!-- Collect the nav links, forms, and other content for toggling -->
    	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      	<ul class="nav navbar-nav">
           <li id="home"><a href="http://fonix.ml">Inicio<span class="sr-only">(current)</span></a></li>
           <li id="home"><a id="block" data-toggle="modal" data-target="#login" style="cursor: pointer;">Gestionar</a></li>
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
<div id="login" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Logueate</h4>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <form role="form" method="post" action="index.php?page=verified">
                                <div class="form-group">
                                    <label for="User"><span class="glyphicon glyphicon-user"></span> Usuario:</label>
                                    <input type="text" id="User" name="inputUser" class="form-control" placeholder="ingresa tu usuario" required="" autofocus=""/>
                                </div>
                                <div class="form-group">
                                    <label for="Password"><span class="glyphicon glyphicon-barcode"></span> Password</label>
                                    <input type="password" id="Password" name="inputPassword" class="form-control" placeholder="ingresa tu contraseña" required="" autofocus=""/>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-lg btn-danger"> <span class="glyphicon glyphicon-open"></span> Entrar</button>
                                </div>
                            </form>
                            <div id="passwd" class="alert alert-danger" role="alert" style="display: none;">Contraseña Incorrecta Intenta otra vez</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<div style=" margin-top:10em; margin-bottom:10em;">
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