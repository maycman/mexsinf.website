<?php
	function repetir($imei, $iccid)
	{
		$conexion = new PDO('mysql:host=mysql.hostinger.mx;dbname=u492945132_b1','u492945132_user','123456');
		$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$serie=$conexion->query("select s.iccid, e.imei from sim s inner join (casados c inner join equipo e on c.id_equipo=e.id_equipo) on s.id_sim=c.id_sim");
		foreach ($serie as $open)
		{
			if($iccid=="")
			{
				if ($imei==$open['imei'])
				{
					$band = false;
					echo $open['imei'].'-';
				}
				else
				{
					$band = true;
				}
			}
			else
			{
				if ($imei==$open['imei'] || $iccid==$open['iccid'])
				{
					$band = false;
					echo $open['imei'].'*';
				}
				else
				{
					$band = true;
				}
			}
		}
		return $band;
	}
?>