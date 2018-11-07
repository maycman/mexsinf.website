<form name="venta" action="index.php?page=generarVentaPlazos" method="post">
	<div class="container">
		<legend>Datos Iniciales</legend>
	</div>
	<fieldset>
		<legend>Fecha</legend>
		<br/>
		<div class="row">
			<div class="col-md-1">
				<div class="form-group">
					<label>DÍA</label>
					<input name="dia" id="dia" class="form-control"></input>
				</div>
			</div>
			<div class="col-md-2 col-md-offset-2">
				<div class="form-group">
					<label>MES</label>
					<input name="mes" id="mes" class="form-control"></input>
				</div>
			</div>
		</div>
	</fieldset>
	<br/>
	<br/>
	<fieldset>
		<legend>Datos del Equipo</legend>
		<br/>
		<div class="form-group">
			<label>MARCA DEL EQUIPO</label>
			<input name="marca" id="marca" class="form-control" required></input>
		</div>
		<div class="form-group">
			<label>MODELO</label>
			<input name="model" id="model" class="form-control" required></input>
		</div>
		<div class="form-group">
			<label>IMEI</label>
			<input name="imei" id="imei" class="form-control" required></input>
		</div>
	</fieldset>
	<br/>
	<br/>
	<fieldset>
		<legend>Datos del plan</legend>
		<br/>
		<div class="form-group">
			<label>COSTO DEL EQUIPO $</label>
			<input name="costo" id="costo" class="form-control" required></input>
		</div>
		<div class="form-group">
			<label>PLAZO</label>
			<select class="form-control" id="plazo" name="plazo">
				<option>12</option>
				<option>18</option>
				<option>24</option>
			</select>
		</div>
		<div class="form-group">
			<label>NÚMERO DE CUENTA</label>
			<input name="cuenta" id="cuenta" class="form-control" required></input>
		</div>
		<div class="form-group">
			<label>NÚMERO DE TELEFONO</label>
			<input name="numero" id="numero" class="form-control" required></input>
		</div>
	</fieldset>
	<br/>
	<br/>
	<fieldset>
		<legend>Datos del cliente</legend>
		<br/>
		<div class="form-group">
			<label>NOMBRE DEL CLIENTE</label>
			<input name="nombre" id="nombre" class="form-control" required></input>
		</div>
	</fieldset>
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
