<?php
	$length = count($_POST);
	$positions = array_keys($_POST);
	$valores = array_values($_POST);
	for($i=0;$i<$length;$i++)
	{ 
		$$positions[$i]=$valores[$i];
	}
	$accion = $valores[0];
	$imei = $valores[1];
	$iccid = $valores[2];
	$nombre = $valores[3];
	$idE = $valores[4];
	$idS = $valores[5];
	$casado = $valores[6];
	$tienda = $valores[7];
	if ($accion=="editar")
	{
?>
<div class="container">
	<div class="jumbotron">
		<div class="row">
			<div class="col-md-6 @col-md-offset-3@ animated rotateInDownRight">
				<h1>Editar Series</h1>
				<form role="form" method="post" action="index.php?page=actualiza">
					<div class="form-group">
						<label for="serie"><span class="glyphicon glyphicon-phone"></span> Nombre</label>
						<input class="form-control" type="text" name="equip" id="equip" value="<?php echo $nombre; ?>"></input>
					</div>
					<div class="form-group">
						<label for="serie"><span class="glyphicon glyphicon-barcode"></span> IMEI</label>
						<input class="form-control" type="text" name="imei" id="imei" value="<?php echo $imei; ?>"></input>
					</div>
					<div class="form-group">
						<label for="serie"><span class="glyphicon glyphicon-barcode"></span> ICCID</label>
						<input class="form-control" type="text" name="iccid" id="iccid" value="<?php echo $iccid; ?>"></input>
					</div>
					<div class="form-group">
						<input type="hidden" name="idsim" id="idsim" value="<?php echo $idE; ?>"></input>
						<input type="hidden" name="idequip" id="idequip" value="<?php echo $idS; ?>"></input>
						<input type="hidden" name="tien" id="tien" value="<?php echo $tienda; ?>"></input>
						<input type="hidden" name="casa" id="casa" value="<?php echo $casado; ?>"></input>
					</div>
					<a class="btn btn-lg btn-danger" href="<?=$_SERVER["HTTP_REFERER"]?>"><span class="glyphicon glyphicon-menu-left"></span> Volver</a>
					<button type="submit" class="btn btn-lg btn-success"><span class="glyphicon glyphicon-send"></span> Guardar</button>
				</form>
			</div>
		</div>
	</div>
</div>
<?php
	}
	else if ($accion=="eliminar")
	{
		try 
		{
			$conexion = new PDO('mysql:host=mysql.hostinger.mx;dbname=u492945132_b1','u492945132_user','123456');
			$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			if ($idE>5)
			{
				$elimina = $conexion->prepare("DELETE FROM equipo WHERE id_equipo= :id;");
				$rows = $elimina->execute( array(':id'=> $idE));
			}
			else
			{
				echo 'IMEI Libre';
			}
			if ($idS>5)
			{
				$elimina = $conexion->prepare("DELETE FROM sim WHERE id_sim= :id;");
				$rows = $elimina->execute( array(':id'=> $idS));
			}
			else
			{
				echo 'ICCID libre';
			}
			$eliminar = $conexion->prepare("DELETE FROM casados WHERE id_casado= :id;");
			$rows = $eliminar->execute( array(':id'=> $casado));
			echo'<script type="text/javascript"> alert("Series Eliminadas Exitosamente"); window.location="http://mexsinf.cf/listadoequipos/index.php?page=carga";</script>';
		} catch (PDOException $e)
		{
			echo "El Error Es:     ".$e->getMessage();	
		}
	}
	else
	{
		echo'<script type="text/javascript"> alert("Acción No Definida"); window.location="http://mexsinf.cf/listadoequipos/index.php?page=carga";</script>';
	}
?>