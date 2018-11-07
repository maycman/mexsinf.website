<div class="container-fluid animated bounceInRight">
	<div class="row">
		<div class="col-md-4">
			<button id="searchQ" class="btn btn-primary btn-lg disabled">Busqueda</button>
			<div id="busca" class="container">
				<br/>
				<br/>
				<form name="busquedita" action="" onsubmit="enviarDatos(); return false">
					<div class="form-group">
						<label for="equipo"><span class="glyphicon glyphicon-list-alt"></span> Solicitud</label>
						<div class="row">
							<div class="col-md-6">
								<input type="text" required class="form-control" name="sol" id="sol" ></input>
							</div>
							<div class="col-md-6">
								<button class="btn btn-success"><span class="glyphicon glyphicon-search"></span> Buscar</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		function objetoAjax()
		{
			var xmlhttp = false;
			try
			{
				xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
			}
			catch(e)
			{
				try
				{
					xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
				}
				catch(E)
				{
					xmlhttp = false;
				}
			}
			if(!xmlhttp && typeof XMLHttpRequest!='undefined')
			{
				xmlhttp = new XMLHttpRequest();
			}
			return xmlhttp;
		}
		function enviarDatos()
		{
        	//Recogemos los valores introducimos en los campos de texto
			sol = document.busquedita.sol.value;
        	//Aquí será donde se mostrará el resultado
        	reporte = document.getElementById('result');
        	//instanciamos el objetoAjax
        	ajax = objetoAjax(); 
        	//Abrimos una conexión AJAX pasando como parámetros el método de envío, y el archivo que realizará las operaciones deseadas
        	ajax.open("POST", "busqueda.php", true);
        	//cuando el objeto XMLHttpRequest cambia de estado, la función se inicia
			ajax.onreadystatechange = function()
			{
				//Cuando se completa la petición, mostrará los resultados 
				if (ajax.readyState == 4)
				{
					//El método responseText() contiene el texto de nuestro 'busqueda.php'. Por ejemplo, cualquier texto que mostremos por un 'echo'
					reporte.value = (ajax.responseText);
				}
			}
			//Llamamos al método setRequestHeader indicando que los datos a enviarse están codificados como un formulario. 
			ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
			//enviamos las variables a 'consulta.php'
			ajax.send("&sol="+sol);
		}
	</script>
	<div id="result" class="container">
		
	</div>
</div>
<h2 class="animated bounceInUp">Series Reservadas</h2>
<div id="muestra" class="row animated bounceInDown">
	<?php
		require_once "functions.php";
		try
		{
			$conexion = new PDO('mysql:host=mysql.hostinger.mx;dbname=u492945132_b1','u492945132_user','123456');
			$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	?>
	<div class="col-md-12">
		<div class="table-responsive">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>Solicitud</th>
						<th>Equipo</th>
						<th>Imei</th>
						<th>Iccid</th>
						<th>Fecha</th>
						<th>Hora</th>
						<th>Tienda</th>
						<th>Asesor</th>
						<th>Acción</th>
					</tr>
				</thead>
				<tbody>
	<?php
			$sql="select * from reportes r inner join asesor a on r.id_asesor=a.id_asesor order by r.id_reporte DESC limit 0,50;";
			$result = $conexion->query($sql);
			$rows = $result->fetchAll();
			foreach ($rows as $row)
			{
				$serie=$conexion->query("select * from sim s inner join (casados c inner join equipo e on c.id_equipo=e.id_equipo) on s.id_sim=c.id_sim where c.id_casado=".$conexion->quote($row['id_casado']));
				foreach ($serie as $open)
				{
					$fecha=fecha($row['fecha']);
					$tienda=tienda($open['id_tienda']);
					$hora=hora($row['fecha']);
					$asesor=asesor($row['id_asesor']);
	?>
					<tr>
						<th><?php echo $row['solicitud']; ?></th>
						<th><?php echo $open['nombre_equipo']; ?></th>
						<th><?php echo $open['imei']; ?></th>
						<th><?php echo $open['iccid']; ?></th>
						<th><?php echo $fecha; ?></th>
						<th><?php echo $hora; ?></th>
						<th><?php echo $tienda; ?></th>
						<th><?php echo $asesor; ?></th>
						<th>
							<form role="form" method="post" action="index.php?page=libera">
								<input type="hidden" name="sol" id="sol" value="<?php echo $row['solicitud']; ?>"></input>
								<input type="hidden" name=equip id="equip" value="<?php echo $open['id_equipo']; ?>"></input>
								<input type="hidden" name="sim" id="sim" value="<?php echo $open['id_sim']; ?>"></input>
								<input type="hidden" name="tienda" id="tienda" value="<?php echo $open['id_tienda']; ?>"></input>
								<input type="submit" class="btn btn-success" value="Liberar"></input>
								<input type="hidden" name="nombre" id="nombre" value="<?php echo $open['nombre_equipo']; ?>"></input>
								<input type="hidden" name="imei" id="imei" value="<?php echo $open['imei']; ?>"></input>
								<input type="hidden" name="iccid" id="iccid" value="<?php echo $open['iccid']; ?>"></input>
								<input type="hidden" name="married" id="married" value="<?php echo $open['id_casado']; ?>"></input>
							</form>
						</th>
					</tr>
	<?php
				}//Cierro foreach open
			}//Cierro foreach row
	?>
				</tbody>
			</table>
		</div><!--Cierro Table Responsive-->
	</div><!--Cierro Col-->
</div><!--Cierro row-->
	<?php
		}//cierro try
		catch(PDOException $e)
        {
            echo 'Error: ' . $e->getMessage();
        }
	?>