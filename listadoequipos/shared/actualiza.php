<?php
	$length = count($_POST);
	$posicion = array_keys($_POST);
	$valor = array_values($_POST);
	for($i=0;$i<$length;$i++)
	{ 
		$$posicion[$i]=$valor[$i];
	}
	$nombre = $valor[0];
	$imei = $valor[1];
	$iccid = $valor[2];
	$idE = $valor[3];
	$idS = $valor[4];
	$tienda = $valor[5];
	$casado = $valor[6];
	$fecha = date("Y-m-d H:i:s",time()-21600);
	try
	{
		$conexion = new PDO('mysql:host=mysql.hostinger.mx;dbname=u492945132_b1','u492945132_user','123456');
		$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		if ($idE>5)
		{
			$cambiaN = $conexion->prepare("UPDATE equipo SET nombre_equipo = :nom WHERE id_equipo= :equipo;");
			$param = $cambiaN->execute( array('nom'=>$nombre,':equipo'=> $idE));
			$cambiaI = $conexion->prepare("UPDATE equipo SET imei=:imei WHERE id_equipo= :equipo;");
			$param = $cambiaI->execute( array(':imei'=>$imei,':equipo'=> $idE));
		}
		else
		{
			if ($imei!='0000000000000000')
			{
				$sql = $conexion->prepare("INSERT INTO equipo(nombre_equipo, imei, id_tienda, vista) VALUES (:nombre, :imei, :tienda, :vista)");
				$rows = $sql->execute( array(':nombre'=>$nombre,':imei'=>$imei,':tienda'=> $tienda,':vista'=>0));
			}
			else
			{
			}
			
		}
		if ($idS>5)
		{
			$cambiaIC = $conexion->prepare("UPDATE sim SET iccid=:iccid WHERE id_sim= :sim;");
			$param = $cambiaIC->execute( array(':iccid'=>$iccid,':sim'=> $idS));
		}
		else
		{
			if ($iccid!='0000000000000000000')
			{
				$sql = $conexion->prepare("INSERT INTO sim(iccid,id_tienda,vista) VALUES (:iccid,:tienda,:vista)");
				$rows = $sql->execute( array(':iccid'=>$iccid,':tienda'=> $tienda,'vista'=>0));
			}
			else
			{
			}
		}
		if ($idS<6 || $idE<6)
		{
			if ($imei!='0000000000000000' && $iccid!='0000000000000000000')
			{
				$datos = $conexion->query('SELECT id_equipo, imei FROM equipo WHERE imei like'.$conexion->quote($imei));
  				foreach($datos as $row)
    				$id=$row[0];
				$datos2 = $conexion->query('SELECT id_sim, iccid FROM sim WHERE iccid like'.$conexion->quote($iccid));
  				foreach($datos2 as $row)
    				$id2=$row[0];
				$sqlcasado = $conexion->prepare("INSERT INTO casados (id_equipo,id_sim,fecha) VALUES (:id,:id2,:fecha)");
				$sqlcasado->execute(array(':id'=>$id,':id2'=>$id2,':fecha'=>$fecha));
				$eliminar = $conexion->prepare("DELETE FROM casados WHERE id_casado= :id;");
				$rows = $eliminar->execute( array(':id'=> $casado));
			}
			else
			{
			}
		}
		else
		{
		}
		echo'<script type="text/javascript"> alert("Series Actualizadas Correctamente"); window.location="http://mexsinf.cf/listadoequipos/index.php?page=carga";</script>';
	}
	catch (PDOException $e)
	{
		echo "El Error Es:     ".$e->getMessage();
	}
?>