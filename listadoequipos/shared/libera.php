<?php
	$length=count($_POST);
	$posiciones=array_keys($_POST);
	$valores=array_values($_POST);
	$sol=$valores[0];
	$imei=$valores[1];
	$iccid=$valores[2];
	$tienda=$valores[3];
	$nombre=$valores[4];
	$serie1=$valores[5];
	$serie2=$valores[6];
	$married=$valores[7];
?>
<div class="container">
	<div class="jumbotron">
		<div class="row">
			<div class="col-md-6 animated rotateInDownLeft">
				<h1>¡Hola!</h1>
				<div class="alert alert-success">Si Es Un Traspaso, Elige La Tienda Donde Se Encuentra Ahora.</div>
				<form id="form2" name="form2" method="post" action="index.php?page=traspasa">
					<div class="form-group">
						<input type="hidden" id="soli" name="soli" value="<?php echo $sol; ?>"></input>
						<input type="hidden" id="imei" name="imei" value="<?php echo $imei; ?>"></input>
						<input type="hidden" id="iccid" name="iccid" value="<?php echo $iccid; ?>"></input>
					</div>
					<div class="form-group">
						<label for="serie"><span class="glyphicon glyphicon-shopping-cart"></span> Tienda</label>
						<select id="tienda" name="tienda" class="form-control">
  							<option id="mata" value="1">MATAMOROS TOLUCA</option>
  							<option id="juan" value="2">SAN JUAN</option>
  							<option id="gale" value="3">GALERIAS</option>
  							<option id="fabela" value="4">FABELA SUR</option>
  							<option id="pachuca" value="5">PORTAL PACHUCA</option>
  						</select>
					</div>
					<div class="form-group">
						<input type="hidden" id="serieimei" name="serieimei" value="<?php echo $serie1; ?>"></input>
						<input type="hidden" id="serieiccid" name="serieiccid" value="<?php echo $serie2; ?>"></input>
						<input type="hidden" id="married" name="married" value="<?php echo $married; ?>"></input>
					</div>
					<a class="btn btn-lg btn-danger" href="<?=$_SERVER["HTTP_REFERER"]?>"><span class="glyphicon glyphicon-menu-left"></span> Volver</a>
					<button type="submit" class="btn btn-lg btn-success"><span class="glyphicon glyphicon-transfer"></span> Liberar/Traspasa</button>
				</form>
				<input type="hidden" id="idT" name="idT" value="<?php echo $tienda; ?>"></input>
			</div>
			<div class="col-md-6 animated rotateInDownRight">
				<h1></h1>
				<div class="alert alert-danger">¡Verifica que sean las series a liberar!</div>
				<div class="panel panel-primary">
					<div class="panel-heading"><?php echo $nombre; ?></div>
						<div class="panel-body">
							<p>IMEI: <?php echo $serie1; ?></p>
							<p>ICCID: <?php echo $serie2; ?></p>
						</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	if ($('#idT').val()==1)
	{
		$('#tienda').val('1');
	}
	else if ($('#idT').val()==2)
	{
		$('#tienda').val('2');
	}
	else if ($('#idT').val()==3)
	{
		$('#tienda').val('3');
	}
	else if ($('#idT').val()==4)
	{
		$('#tienda').val('4');
	}
	else if ($('#idT').val()==5)
	{
		$('#tienda').val('5');
	}
	else
	{
		alert('Tienda no valida');
	}
</script>