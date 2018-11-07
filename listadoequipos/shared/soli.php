<?php
	$length=count($_POST);
	$posiciones=array_keys($_POST);
	$valores=array_values($_POST);
	$series=$valores[0];
	$asesor=$valores[1];
	$imei=$valores[2];
	$iccid=$valores[3];
	$tel=$valores[4];
?>
<div class="container">
	<div class="jumbotron">
		<div class="row">
			<div class="col-md-6 animated rotateInDownLeft">
				<h1>¡Hola! <?php echo $asesor; ?></h1>
				<form id="form2" name="form2" method="post" action="index.php?page=reservar">
					<input type="hidden" name="series" id="series" value="<?php echo $series ?>"></input>
					<input type="hidden" name="asesor" id="asesor" value="<?php echo $asesor ?>"></input>
					<div class="form-group">
						<label for="serie"><span class="glyphicon glyphicon-barcode"></span> Ingresa Tu Solicitud</label>
						<input name="sol" type="text" class="form-control" pattern="[0-9]+" id="sol" required/>
					</div>
					<a class="btn btn-lg btn-danger" href="<?=$_SERVER["HTTP_REFERER"]?>"><span class="glyphicon glyphicon-menu-left"></span> Volver</a>
					<button type="submit" class="btn btn-lg btn-success"><span class="glyphicon glyphicon-transfer"></span> Reservar</button>
				</form>
			</div>
			<div class="col-md-6 animated rotateInDownRight">
				<h1></h1>
				<div class="alert alert-danger">¡Copia Tus Series, Despues De Este Punto No las Volveras a Ver!</div>
				<div class="panel panel-success">
					<div class="panel-heading"><?php echo $tel; ?></div>
						<div class="panel-body">
							<p>IMEI: <?php echo $imei; ?></p>
							<p>ICCID: <?php echo $iccid; ?></p>
						</div>
				</div>
			</div>
		</div>
	</div>
</div>