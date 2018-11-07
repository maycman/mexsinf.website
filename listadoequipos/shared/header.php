<header>
    <nav id="prub" class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand">Listado Equipos Fonix</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li id="home"><a href="index.php?page=home">Inicio<span class="sr-only">(current)</span></a></li>
                    <li id="home"><a id="block" data-toggle="modal" data-target="#login" style="cursor: pointer;">Gestionar</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a data-toggle="modal" data-target="#info" style="cursor: pointer;">Informaci&oacute;n Extra</a></li>
                </ul>
            </div>
        </div>
	</nav>
</header>
<!-- Modal -->
<div id="info" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Informacion</h4>
            </div>
            <div class="modal-body">
                <div class="container">
                    <h2>Incidentes y Sugerencias, Notificame A Mi Email</h2>
                    <h2>michael.valdes@mexsinf.cf</h2>
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
</di.v>