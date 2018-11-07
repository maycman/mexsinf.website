<?php
	$lenght = count($_POST);
	$position = array_keys($_POST);
	$values = array_values($_POST);
	$sol=$values[0];
	require_once "functions.php";

	echo '<div class="row animated bounceInDown">';
	echo '<div class="col-md-12">';
	echo '<div class="table-responsive">';
	echo '<table class="table table-hover">';
	echo '<thead>';
	echo '<tr>';
	echo '<th>Solicitud</th>';
	echo '<th>Equipo</th>';
	echo '<th>Imei</th>';
	echo '<th>Iccid</th>';
	echo '<th>Fecha</th>';
	echo '<th>Hora</th>';
	echo '<th>Tienda</th>';
	echo '<th>Asesor</th>';
	echo '<th>Acción</th>';
	echo '</tr>';
	echo '</thead>';
	echo '<tbody>';

	try
	{
		$conexion = new PDO('mysql:host=mysql.hostinger.mx;dbname=u492945132_b1','u492945132_user','123456');
		$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql="select * from reportes r inner join asesor a on r.id_asesor=a.id_asesor where r.solicitud=".$conexion->quote($sol)." order by r.id_reporte DESC limit 0,50;";
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
				echo '<tr>';
				echo '<th>'.$row['solicitud'].'</th>';
				echo '<th>'.$open['nombre_equipo'].'</th>';
				echo '<th>'.$open['imei'].'</th>';
				echo '<th>'.$open['iccid'].'</th>';
				echo '<th>'.$fecha.'</th>';
				echo '<th>'.$hora.'</th>';
				echo '<th>'.$tienda.'</th>';
				echo '<th>'.$asesor.'</th>';
				echo '<th>';
				echo '<form role="form" method="post" action="index.php?page=libera">';
				echo '<input type="hidden" name="sol" id="sol" value="'.$row['solicitud'].'"></input>';
				echo '<input type="hidden" name=equip id="equip" value="'.$open['id_equipo'].'"></input>';
				echo '<input type="hidden" name="sim" id="sim" value="'.$open['id_sim'].'"></input>';
				echo '<input type="hidden" name="tienda" id="tienda" value="'.$open['id_tienda'].'"></input>';
				echo '<input type="submit" class="btn btn-success" value="Liberar"></input>';
				echo '<input type="hidden" name="nombre" id="nombre" value="'.$open['nombre_equipo'].'"></input>';
				echo '<input type="hidden" name="imei" id="imei" value="'.$open['imei'].'"></input>';
				echo '<input type="hidden" name="iccid" id="iccid" value="'.$open['iccid'].'"></input>';
				echo '<input type="hidden" name="married" id="married" value="'.$open['id_casado'].'"></input>';
				echo '</form>';
				echo '</th>';
				echo '</tr>';
			}//Cierro foreach open
		}//Cierro foreach row
		echo '</tbody>';
		echo '</table>';
		echo '</div>';
		echo '</div>';
		echo '</div>';
	}
	catch(PDOException $e)
	{
		echo $e->getMessage();
	}
?>