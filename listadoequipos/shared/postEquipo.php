<?php
	$numero = count($_POST);	//obtiene el numero de post obtenidos
	$tags = array_keys($_POST); // obtiene los nombres de las varibles
	$valores = array_values($_POST);// obtiene los valores de las varibles
	// crea las variables y les asigna el valor
	$equipo = $valores[0];
	$imei = $valores[1];
	$iccid = $valores[2];
	$tienda = $valores[3];
	$desc = $valores[4];
	$fecha = date("Y-m-d H:i:s",time()-21600);
	echo $fecha.'<br/>';
	require_once "repetidos.php";
	try
	{
		$bandera=repetir($imei, $iccid);
		$conexion = new PDO('mysql:host=mysql.hostinger.mx;dbname=u492945132_b1','u492945132_user','123456');
		$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		switch ($bandera)
		{
			case true:
			$sql = $conexion->prepare("INSERT INTO equipo(nombre_equipo, imei, descrip_e, id_tienda, vista) VALUES (:nombre, :imei, :descrip, :tienda, :vista)");
			$rows = $sql->execute( array(':nombre'=>$equipo,':imei'=>$imei,':descrip'=> $desc,':tienda'=> $tienda,':vista'=>0));
			if ($iccid!='')
			{
				$sql2 = $conexion->prepare("INSERT INTO sim(iccid,id_tienda,vista,descrip_s) VALUES (:iccid,:tienda,:vista,:des)");
				$rows2 = $sql2->execute(array(':iccid'=>$iccid,':tienda'=>$tienda,':vista'=>0,':des'=>'CON EQUIPO'));
				$datos = $conexion->query('SELECT id_equipo, imei FROM equipo WHERE imei like'.$conexion->quote($imei));
  				foreach($datos as $row)
    				$id=$row[0];
				$datos2 = $conexion->query('SELECT id_sim, iccid FROM sim WHERE iccid like'.$conexion->quote($iccid));
  				foreach($datos2 as $row)
    				$id2=$row[0];
				$sqlcasado = $conexion->prepare("INSERT INTO casados (id_equipo,id_sim,fecha) VALUES (:id,:id2,:fecha)");
				$sqlcasado->execute(array(':id'=>$id,':id2'=>$id2,':fecha'=>$fecha));
			}
			else
			{
				$datos = $conexion->query('SELECT id_equipo, imei FROM equipo WHERE imei like'.$conexion->quote($imei));
  				foreach($datos as $row)
    				$id=$row[0];
    			$sqlcasado = $conexion->prepare("INSERT INTO casados (id_equipo,id_sim,fecha) VALUES (:id,:id2,:fecha)");
				$sqlcasado->execute(array(':id'=>$id,':id2'=>$tienda,':fecha'=>$fecha));
			}
			echo'<script type="text/javascript"> alert("Equipo Guardado Exitosamente"); window.location="http://mexsinf.cf/listadoequipos/index.php?page=carga";</script>';
				break;
			
			case false:
				echo '<script type="text/javascript"> alert("Esta Serie Ya Esta Registrada, Intenta Otra vez");  window.location="http://mexsinf.cf/listadoequipos/index.php?page=carga";</script>';
				break;
			default:
				echo '<script type="text/javascript"> alert("Ha Ocurrido Un Error"); </script>';
				break;
		}
	}
	catch(PDOException $e)
	{
		echo "El Error Es:     ".$e->getMessage();
	}
?>