<?php
	$numero = count($_POST);	//obtiene el numero de post obtenidos
	$tags = array_keys($_POST); // obtiene los nombres de las varibles
	$valores = array_values($_POST);// obtiene los valores de las varibles

	// crea las variables y les asigna el valor
	for($i=0;$i<$numero;$i++)
	{ 
		$$tags[$i]=$valores[$i];
	}
	$iccid = $valores[0];
	$tienda = $valores[1];
	$desc = $valores[2];
	$fecha = date("Y-m-d H:i:s",time()-21600);
	echo $fecha;
	try
	{
		$band = true;
		$conexion = new PDO('mysql:host=mysql.hostinger.mx;dbname=u492945132_b1','u492945132_user','123456');
		$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$serie=$conexion->query("select * from sim");
		foreach ($serie as $open)
		{
			if ($iccid==$open['iccid'])
			{
				$band=false;
			}
			else
			{	
			}
		}
		switch ($band) 
		{
			case true:
				$sql = $conexion->prepare("INSERT INTO sim(descrip_s,iccid,id_tienda,vista) VALUES (:descrip,:iccid,:tienda,:vista)");
				$rows = $sql->execute( array(':descrip'=>$desc,':iccid'=>$iccid,':tienda'=> $tienda,'vista'=>0));
				$datos = $conexion->query('SELECT id_sim, iccid FROM sim WHERE iccid like'.$conexion->quote($iccid));
  				foreach($datos as $row)
    				$id=$row[0];
				$sqlcasado = $conexion->prepare("INSERT INTO casados (id_equipo,id_sim,fecha) VALUES (:id,:id2,:fecha)");
				$sqlcasado->execute(array(':id'=>$tienda,':id2'=>$id,':fecha'=>$fecha));
				echo'<script type="text/javascript"> alert("Serie Guardada Exitosamente"); window.location="http://mexsinf.cf/listadoequipos/index.php?page=carga";</script>';
				break;
			case false:
				echo '<script type="text/javascript"> alert("Esta Serie Ya Esta Registrada, Intenta Otra vez"); window.location="http://mexsinf.cf/listadoequipos/index.php?page=carga";</script>';
				break;
			default:
				echo '<script type="text/javascript"> alert("Ha Ocurrido Un Error"); </script>';
				break;
		}
	}
	catch(PDOException $e)
	{
		echo "El error insert es: ".$e->getMessage();
	}
?>