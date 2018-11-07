<style type="text/css">
	html,body
	{
		background-color: #87CEEB;
	}
	thead
	{
		background: #7E8DD2;
	}
</style>
<!--script type="text/javascript">
    $(window).load(function()
    {
        $('#alert').modal('show');
    });
</script-->
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="row animated zoomIn">
				<div class="col-md-6">
					<ul class="nav nav-tabs nav-justified">
						<li class="active">
							<a role="tab" data-toggle="tab" href="#alta"><span class="glyphicon glyphicon-check"></span> Alta De Series</a>
						</li>
						<li>
							<a role="tab" data-toggle="tab" href="#repo"><span class="glyphicon glyphicon-list-alt"></span> Reportes</a>
						</li>
						<li>
							<a role="tab" data-toggle="tab" href="#lis"><span class="glyphicon glyphicon-eye-open"></span> Vista al Listado</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="jumbotron">
				<div class="tab-content margen">
						
							<div class="tab-pane fade active in" id="alta">
								<div class="row animated pulse">
									<div class="col-md-6">
										<form role="form" method="post" action="index.php?page=postEquipo">
											<div class="form-group">
												<label for="equipo"><span class="glyphicon glyphicon-phone"></span> Equipo</label>
												<input name="equipo" type="text" class="form-control" id="equipo" required/>
											</div>
											<div class="form-group">
												<label for="serie"><span class="glyphicon glyphicon-barcode"></span> IMEI</label>
												<input name="imei" type="text" class="form-control" pattern="[0-9]+" id="serie" required/>
											</div>
											<div class="form-group">
												<label for="serie"><span class="glyphicon glyphicon-barcode"></span> ICCID</label>
												<input name="casado" type="text" class="form-control" pattern="[0-9]+" id="casado"/>
											</div>
											<div class="form-group">
												<label for="tienda"><span class="glyphicon glyphicon-shopping-cart"></span> Tienda</label>
												<select id="tienda" name="tienda" class="form-control">
  													<option value="1">MATAMOROS TOLUCA</option>
  													<option value="2">SAN JUAN</option>
  													<option value="3">GALERIAS</option>
  													<option value="4">FABELA SUR</option>
  													<option value="5">PORTAL PACHUCA</option>
  												</select>
											</div>
											<div class="form-group">
												<label for="Descripción"><span class="glyphicon glyphicon-info-sign"></span> Descripción (Opcional)</label>
												<textarea name="desc" placeholder="Maximo 199 caracteres" class="form-control" id="coment"></textarea>
											</div>
											<button type="submit" class="btn btn-lg btn-success"><span class="glyphicon glyphicon-send"></span> Guardar</button>
										</form>
									</div>
									<div class="col-md-6">
										<form role="form" method="post" action="index.php?page=postSIM">
											<div class="form-group">
												<label for="sim"><span class="glyphicon glyphicon-credit-card"></span> Tarjeta SIM</label>
											</div>
											<div class="form-group">
												<label for="serie"><span class="glyphicon glyphicon-barcode"></span> Serie</label>
												<input name="iccid" type="text" class="form-control" pattern="[0-9]+" id="iccid" required/>
											</div>
											<div class="form-group">
												<label for="tienda"><span class="glyphicon glyphicon-shopping-cart"></span> Tienda</label>
												<select name="tienda2" class="form-control" id="tienda2">
  													<option value="1">MATAMOROS TOLUCA</option>
  													<option value="2">SAN JUAN</option>
  													<option value="3">GALERIAS</option>
  													<option value="4">FABELA SUR</option>
  													<option value="5">PORTAL PACHUCA</option>
  												</select>
											</div>
											<div class="form-group">
												<label for="Descripción"><span class="glyphicon glyphicon-info-sign"></span> Descripción (Opcional)</label>
												<textarea name="coment" placeholder="Maximo 199 caracteres" class="form-control" id="desc"></textarea>
											</div>
											<button type="submit" class="btn btn-lg btn-warning"><span class="glyphicon glyphicon-send"></span> Guardar</button>
										</form>
									</div>
								</div><!--Cierra row de Alta de series-->
							</div><!--Cierra tab pane fade alta de series-->
							<div class="tab-pane fade in" id="repo">
								<?php include("shared/report2.php"); ?>
							</div>
							<div class="tab-pane fade in" id="lis">
								<?php include("shared/espejo.php"); ?>
							</div>
						</div><!--Cierre del jumbotron-->
			</div><!--Cierre del tab-content-->
		</div><!--Cierra col principal-->
	</div><!--Cierra row principal-->
</div><!--Cierra container principal-->




<!-- Modal de alertas al cargar equipos -->
<div id="alert" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!--Que debe salir del modal-->
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Información</h4>
            </div>
            <div class="modal-body">
                <div class="container">
                	<div class="row">
                		<div class="col-md-5">
                			<h3>Si registras equipos sin ICCID, solo debes llenar el campo de IMEI y el nombre del equipo</h3>
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