<div class="container">
	<div class="row animated bounceInDown">
		<div class="col-md-10">
			<ul class="nav nav-pills nav-justified">
				<li class="active"><a role="tab" data-toggle="tab" href="#david"><h3><span class="ion-ios-contact"></span> David</h3></a></li>
				<li><a role="tab" data-toggle="tab" href="#cesar"><h3><span class="ion-ios-contact"></span> Cesar</h3></a></li>
				<li><a role="tab" data-toggle="tab" href="#os"><h3><span class="ion-ios-contact"></span> Osvaldo</h3></a></li>
			</ul>
		</div>
	</div>
	<div class="tab-content margen">
	<?php
		require_once "functions.php";
		try
		{
		$conexion = new PDO('mysql:host=mysql.hostinger.mx;dbname=u492945132_b1','u492945132_user','123456');
		$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	?>
		<div id="david" class="tab-pane fade active in">
			<div class="row animated bounceInUp">
				<div class="col-md-12">
					<div class="table-responsive">
						<table class="table table-hover">
							<thead>
								<tr>
									<th>Solicitud</th>
									<th>Imei</th>
									<th>Iccid</th>
									<th>Fecha</th>
									<th>Hora</th>
									<th>Tienda</th>
								</tr>
							</thead>
							<tbody>
	<?php
		$dave="select * from reportes r inner join asesor a on r.id_asesor=a.id_asesor where r.id_asesor=1 order by r.id_reporte;";
		$result = $conexion->query($dave);
		$rows = $result->fetchAll();
		foreach ($rows as $row)
		{
			$serie=$conexion->query("select * from sim s inner join (casados c inner join equipo e on c.id_equipo=e.id_equipo) on s.id_sim=c.id_sim where c.id_casado=".$conexion->quote($row['id_casado']));
			foreach ($serie as $open)
			{
				$fecha=fecha($row['fecha']);
				$tienda=tienda($open['id_tienda']);
				$hora=hora($row['fecha']);
	?>
								<tr>
									<th><?php echo $row['solicitud']; ?></th>
									<th><?php echo $open['iccid']; ?></th>
									<th><?php echo $open['imei'] ?></th>
									<th><?php echo $fecha; ?></th>
									<th><?php echo $hora; ?></th>
									<th><?php echo $tienda; ?></th>
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
		</div><!--Cierro Tab pane-->
		<div id="cesar" class="tab-pane fade in">
			<div class="row animated bounceInUp">
				<div class="col-md-12">
					<div class="table-responsive">
						<table class="table table-hover">
							<thead>
								<tr>
									<th>Solicitud</th>
									<th>Imei</th>
									<th>Iccid</th>
									<th>Fecha</th>
									<th>Hora</th>
									<th>Tienda</th>
								</tr>
							</thead>
							<tbody>
	<?php
		$cesar="select * from reportes r inner join asesor a on r.id_asesor=a.id_asesor where r.id_asesor=2 order by r.id_reporte;";
		$result = $conexion->query($cesar);
		$rows = $result->fetchAll();
		foreach ($rows as $row)
		{
			$serie=$conexion->query("select * from sim s inner join (casados c inner join equipo e on c.id_equipo=e.id_equipo) on s.id_sim=c.id_sim where c.id_casado=".$conexion->quote($row['id_casado']));
			foreach ($serie as $open)
			{
				$fecha=fecha($row['fecha']);
				$tienda=tienda($open['id_tienda']);
				$hora=hora($row['fecha']);
	?>
								<tr>
									<th><?php echo $row['solicitud']; ?></th>
									<th><?php echo $open['iccid']; ?></th>
									<th><?php echo $open['imei'] ?></th>
									<th><?php echo $fecha; ?></th>
									<th><?php echo $hora; ?></th>
									<th><?php echo $tienda; ?></th>
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
		</div>
		<div id="os" class="tab-pane fade in">
			<div class="row animated bounceInUp">
				<div class="col-md-12">
					<div class="table-responsive">
						<table class="table table-hover">
							<thead>
								<tr>
									<th>Solicitud</th>
									<th>Imei</th>
									<th>Iccid</th>
									<th>Fecha</th>
									<th>Hora</th>
									<th>Tienda</th>
								</tr>
							</thead>
							<tbody>
	<?php
		$os="select * from reportes r inner join asesor a on r.id_asesor=a.id_asesor where r.id_asesor=3 order by r.id_reporte;";
		$result = $conexion->query($os);
		$rows = $result->fetchAll();
		foreach ($rows as $row)
		{
			$serie=$conexion->query("select * from sim s inner join (casados c inner join equipo e on c.id_equipo=e.id_equipo) on s.id_sim=c.id_sim where c.id_casado=".$conexion->quote($row['id_casado']));
			foreach ($serie as $open)
			{
				$fecha=fecha($row['fecha']);
				$tienda=tienda($open['id_tienda']);
				$hora=hora($row['fecha']);
	?>
								<tr>
									<th><?php echo $row['solicitud']; ?></th>
									<th><?php echo $open['iccid']; ?></th>
									<th><?php echo $open['imei'] ?></th>
									<th><?php echo $fecha; ?></th>
									<th><?php echo $hora; ?></th>
									<th><?php echo $tienda; ?></th>
								</tr>
	<?php
		}//Cierro foreach open
		}//Cierro foreach row
		}//cierro try
		catch(PDOException $e)
        {
            echo 'Error: ' . $e->getMessage();
        }
	?>
							</tbody>
						</table>
					</div><!--Cierro Table Responsive-->
				</div><!--Cierro Col-->
			</div><!--Cierro row-->
		</div>
	</div>
</div>