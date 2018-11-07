<?php
	$length=count($_POST);
	$posiciones=array_keys($_POST);
	$valores=array_values($_POST);
	$sol=$valores[0];
	$imei=$valores[1];
	$iccid=$valores[2];
	$tienda=$valores[3];
	$serieIM = $valores[4];
	$serieIC = $valores[5];
	$married = $valores[6];
	$fecha = date("Y-m-d H:i:s",time()-21600);
	echo $fecha.'<br/>';
 	try 
	{
		$conexion = new PDO('mysql:host=mysql.hostinger.mx;dbname=u492945132_b1','u492945132_user','123456');
		$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		//Este delete libera la serie de la tabla reportes
		$reporte = $conexion->prepare("DELETE FROM reportes WHERE solicitud= :sol;");
		$rows = $reporte->execute( array(':sol'=> $sol));
		if ($imei>5)
		{
			echo 'Imei mayor que 5'.'<br/>';
			$vistaE = $conexion->prepare("UPDATE equipo SET vista=0 WHERE id_equipo= :equipo;");
			$param = $vistaE->execute( array(':equipo'=> $imei));
			$tiendaE = $conexion->prepare("UPDATE equipo SET id_tienda= :tienda WHERE id_equipo= :equipo;");
			$param3 = $tiendaE->execute( array(':tienda'=> $tienda,':equipo'=> $imei));
		}
		else
		{
			$casad = $conexion->prepare("DELETE FROM casados WHERE id_casado= :married;");
			$rows = $casad->execute( array(':married'=> $married));
			$sqlcasado = $conexion->prepare("INSERT INTO casados (id_equipo,id_sim,fecha) VALUES (:id,:id2,:fecha)");
			$sqlcasado->execute(array(':id'=>$imei,':id2'=>$tienda,':fecha'=>$fecha));
		}
		if ($iccid>5)
		{
			echo 'Iccid mayor que 5'.'<br/>';
			echo $serieIC;
			$vistaS = $conexion->prepare("UPDATE sim SET vista=0 WHERE id_sim= :sim;");
			$param2 = $vistaS->execute( array(':sim'=> $iccid));
			$tiendaS = $conexion->prepare("UPDATE sim SET id_tienda= :tienda WHERE id_sim= :sim;");
			$param4 = $tiendaS->execute( array(':tienda'=> $tienda,':sim'=> $iccid));
		}
		else
		{
			$casad = $conexion->prepare("DELETE FROM casados WHERE id_casado= :married;");
			$rows = $casad->execute( array(':married'=> $married));
			$sqlcasado = $conexion->prepare("INSERT INTO casados (id_equipo,id_sim,fecha) VALUES (:id,:id2,:fecha)");
			$sqlcasado->execute(array(':id'=>$id,':id2'=>$iccid,':fecha'=>$fecha));
		}
	}
	catch (PDOException $e) 
	{
		echo "El Error Es:     ".$e->getMessage();
	}
	echo'<script type="text/javascript"> alert("Series Liberadas Exitosamente"); window.location="http://mexsinf.cf/listadoequipos/index.php?page=carga";</script>';
?>