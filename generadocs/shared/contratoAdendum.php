<script type="text/javascript">
	$(function () {
		$('#datepicker').datepicker({
			locale: 'es'
		});
	});
</script>
<form name="adendum" action="http://mexsinf.cf/generadocs/shared/adendum.php" method="post">
	<div class="container">
		<legend>Datos Iniciales</legend>
	</div>
	<fieldset>
		<legend>Fecha</legend>
		<br/>
		<div class="row">
			<div class="col-md-4">
				<div class="form-group">
					<label>FECHA DE ACTIVACIÓN</label>
					<div class="input-group date" id="datepicker" data-provide="datepicker">
    					<input name="fecha" id="fecha" type="text" class="form-control" required>
    					<div class="input-group-addon">
        					<span class="glyphicon glyphicon-th"></span>
    					</div>
					</div>
				</div>
			</div>
		</div>
	</fieldset>
	<br/>
	<br/>
	<fieldset>
		<legend>Datos de la linea</legend>
		<br/>
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label>NUMERO DE CUENTA</label>
					<input name="cuenta" id="cuenta" class="form-control" required></input>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label>NÚMERO DE TELEFONO</label>
					<input name="numero" id="numero" class="form-control" required></input>
				</div>
			</div>
		</div>
		<div class="form-group">
			<label>ICCID ANTERIOR</label>
			<input name="ica" id="ica" class="form-control" required></input>
		</div>
	</fieldset>
	<br/>
	<br/>
	<fieldset>
		<legend>Datos del Cliente</legend>
		<br/>
		<div class="form-group">
			<label>NOMBRE DEL CLIENTE</label>
			<input name="nombre" id="nombre" class="form-control" required></input>
		</div>
	</fieldset>
	<br/>
	<br/>
	<fieldset>
		<legend>Datos del Equipo</legend>
		<br/>
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label>MARCA</label>
					<input name="marca" id="marca" class="form-control" required></input>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label>MODELO</label>
					<input name="modelo" id="modelo" class="form-control" required></input>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label>IMEI</label>
					<input name="imei" id="imei" class="form-control" required></input>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label>ICCID</label>
					<input name="iccid" id="iccid" class="form-control" required></input>
				</div>
			</div>
		</div>
	</fieldset>
	<br/>
	<br/>
	<fieldset>
		<legend>Datos del Plan</legend>
		<br/>
		<div class="row">
			<div class="col-md-3">
				<div class="form-group">
					<label>PUNTOS REDIMIDOS</label>
					<input name="puntos" id="puntos" class="form-control" required></input>
				</div>
			</div>
			<div class="col-md-3">
				<div class="form-group">
					<label>COSTO $</label>
					<input name="coste" id="coste" class="form-control" required></input>
				</div>
			</div>
			<div class="col-md-3">
				<div class="form-group">
					<label>MESES DEL PLAZO</label>
					<input name="meses" id="meses" class="form-control" required></input>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label>TIPO DE PLAN</label>
					<select id="plan" name="plan" class="form-control" required>
						<option value=""></option>
						<option value="Otro">OTRO</option>
  						<option value="TELCEL MAX SIN LIMITE 1000">TELCEL MAX SIN LIMITE 1000</option>
  						<option value="TELCEL MAX SIN LIMITE 1500">TELCEL MAX SIN LIMITE 1500</option>
  						<option value="TELCEL MAX SIN LIMITE 2000">TELCEL MAX SIN LIMITE 2000</option>
  						<option value="TELCEL MAX SIN LIMITE 3000">TELCEL MAX SIN LIMITE 3000</option>
  						<option value="TELCEL MAX SIN LIMITE 5000">TELCEL MAX SIN LIMITE 5000</option>
  						<option value="TELCEL MAX SIN LIMITE 6000">TELCEL MAX SIN LIMITE 6000</option>
  						<option value="TELCEL MAX SIN LIMITE 7000">TELCEL MAX SIN LIMITE 7000</option>
  						<option value="TELCEL MAX SIN LIMITE 9000">TELCEL MAX SIN LIMITE 9000</option>
  						<option value="TELCEL MAX SIN LIMITE 12000">TELCEL MAX SIN LIMITE 12000</option>
  						<option value="TELCEL MAX SIN LIMITE  MIXTO 1000">TELCEL MAX SIN LIMITE  MIXTO 1000</option>
  						<option value="TELCEL MAX SIN LIMITE  MIXTO 1500">TELCEL MAX SIN LIMITE  MIXTO 1500</option>
  						<option value="TELCEL MAX SIN LIMITE  MIXTO 2000">TELCEL MAX SIN LIMITE  MIXTO 2000</option>
  						<option value="TELCEL MAX SIN LIMITE  MIXTO 3000">TELCEL MAX SIN LIMITE  MIXTO 3000</option>
  						<option value="TELCEL MAX SIN LIMITE  MIXTO 5000">TELCEL MAX SIN LIMITE  MIXTO 5000</option>
  						<option value="TELCEL MAX SIN LIMITE  MIXTO 6000">TELCEL MAX SIN LIMITE  MIXTO 6000</option>
  						<option value="TELCEL MAX SIN LIMITE  MIXTO 7000">TELCEL MAX SIN LIMITE  MIXTO 7000</option>
  						<option value="TELCEL MAX SIN LIMITE  MIXTO 9000">TELCEL MAX SIN LIMITE  MIXTO 9000</option>
  						<option value="TELCEL MAX SIN LIMITE  MIXTO 12000">TELCEL MAX SIN LIMITE  MIXTO 12000</option>
  					</select>
  					<input type="hidden" class="form-control" id="otroplan" name="otroplan"></input>
				</div>
			</div>
			<div class="col-md-3 col-md-offset-1">
				<label>Venta A Plazos</label>
				<input id="toggle-one" name="toggle-one" type="checkbox" checked data-toggle="toggle" data-size="large" data-on="Si" data-off="No">
			</div>
		</div>
	</fieldset>
	<!--fieldset>
		<legend>Datos del cliente</legend>
		<br/>
		<div class="form-group">
			<label>NOMBRE DEL CLIENTE</label>
			<input name="nombre" id="nombre" class="form-control" required></input>
		</div>
	</fieldset-->
	<br/>
	<br/>
	<div class="row">
		<div class="col-md-1">
			<button type="submit" class="btn btn-danger btn.lg">Generar</button>
		</div>
		<div class="col-md-offset-3">
			<input type="reset" id="cleane" class="btn btn-primary btn.lg" value="Limpiar Campos"/>
		</div>
	</div>
</form>