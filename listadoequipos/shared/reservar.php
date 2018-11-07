<?php
	$length=count($_POST);
	$posiciones=array_keys($_POST);
	$valores=array_values($_POST);
	$series=$valores[0];
	$asesor=$valores[1];
	$solicitud=$valores[2];
	$fecha = date("Y-m-d H:i:s",time()-21600);
	echo $fecha.'<br/>';
	if ($asesor=='David')
	{
		$id=1;
	}
	elseif($asesor=='Levi')
	{
		$id=2;
	}
	elseif($asesor=='Osvaldo')
	{
		$id=3;
	}
	else
	{
		echo("Asesor no valido");
	}
	try
	{
		$conexion = new PDO('mysql:host=mysql.hostinger.mx;dbname=u492945132_b1','u492945132_user','123456');
		$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = $conexion->prepare("INSERT INTO reportes(id_asesor, id_casado, solicitud, fecha) VALUES (:id_asesor, :id_casado, :sol, :fecha)");
		$rows = $sql->execute( array(':id_asesor'=>$id,':id_casado'=>$series, ':sol'=>$solicitud, ':fecha'=> $fecha));

		$result = $conexion->query('SELECT e.id_equipo, s.id_sim from equipo e left join (casados c left join sim s on c.id_sim=s.id_sim) on e.id_equipo=c.id_equipo where c.id_casado='.$conexion->quote($series));
		$row = $result->fetchAll();
		foreach ($row as $ro)
		{
			$equipo=$ro[0];
			$iccid=$ro[1];
		}
		$elimina = $conexion->prepare('UPDATE equipo SET vista = 1 WHERE id_equipo = :ide');
		$borraE = $elimina->execute( array(':ide' => $equipo));
		$suprime = $conexion->prepare('UPDATE sim SET vista = 1 WHERE id_sim = :ids');
		$borraS = $suprime->execute( array(':ids' => $iccid));
		echo '<script type="text/javascript"> alert("Series Tomadas Con Exito"); window.location="http://mexsinf.cf/listadoequipos/index.php?page=home";</script>';
	}
	catch(PDOException $e)
	{
		echo "El Error Es:     ".$e->getMessage();
	}
?>