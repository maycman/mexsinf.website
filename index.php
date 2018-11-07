<!DOCTYPE html PUBLIC"n">
<HTML>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
<title>Soluciones Informaticas De México</title>
<link rel="stylesheet" href="css/bootstrap.css" type="text/css">
<link rel="stylesheet" href="css/normalize.css" type="text/css">
<link rel="stylesheet" href="css/estilos.css" type="text/css">
<script src = "js/jquery.js"></script>
<script src = "js/bootstrap.js"></script>
<script src = "js/queryd.js"></script>
</head>
<body id="wrap" class="imgen">
<header>
  <nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
    	<!-- Brand and toggle get grouped for better mobile display -->
    	<div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
        	<span class="icon-bar"></span>
        	<span class="icon-bar"></span>
        	<span class="icon-bar"></span>
      	</button>
      	<a class="navbar-brand">MexSInf</a>
    	</div>
    	<!-- Collect the nav links, forms, and other content for toggling -->
    	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      	<ul class="nav navbar-nav">
        	<li id="home"><a href="index.php?page=home">Inicio<span class="sr-only">(current)</span></a></li>
        	<li id="nosotros"><a href="index.php?page=nosotros">Nosotros</a></li>
			<li id="servicios"><a href="index.php?page=pc">Servicios</a></li>
		  <li class="dropdown">
          	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Herramientas<span class="caret"></span></a>
          	<ul class="dropdown-menu">
            	<li id="signPanel"><a href="index.php?page=signPanel">Panel de Control</a></li>
            	<li id="galeria"><a href="index.php?page=galeria">Galeria</a></li>
            	<li><a href="#">Descargas</a></li>
            	<li role="separator" class="divider"></li>
            	<li><a href="http://webmail1.hostinger.mx/roundcube/?_task=login" target="_blanck">Correo Corporativo</a></li>
          	</ul>
        	</li>
			
 
        </ul>
			
      	<!--form class="navbar-form navbar-left" role="search">
          <div class="form-group">
          	<input type="text" class="form-control" placeholder="Introduce tu busqueda">
        	</div>
        	<button type="submit" class="btn btn-default">Busca</button>
        </form-->
        <ul class="nav navbar-nav navbar-right">
        	<li><a data-toggle="modal" data-target="#contacto" style="cursor: pointer;">Contactanos</a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
	</nav>
</header>
<!-- Modal -->
   <div id="contacto" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <!--Que debe salir del modal-->
        <div class="modal-content">
          <div class="modal-header bg-primary">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Informacion</h4>
                    </div>
                    <div class="modal-body">
                      <div class="container">
                        <div class="row">
                          <div class="col-md-5">
                            <div class="caption">
                                  <font size=5 face="arial black">Telefonos</font>
                                  <li><font size=3 face="arial black">722 715 61 60 Arturo Cruz</font></li>
                                  <li><font size=3 face="arial black">722 352 16 93 Michael Valdes</font></li>
                                  <font size=5 face="arial black">Correos Electronicos</font>
                                  <li><font size=3 face="arial black">michael.valdes@mexsinf.cf</font></li>
                                  <li><font size=3 face="arial black">arturo.cruz@mexsinf.cf</font></li>
                            </div>
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
<Div style=" margin-top:10em; margin-bottom:10em;">
    <?php
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
</Div>
<?php include("shared/footer.php"); ?>