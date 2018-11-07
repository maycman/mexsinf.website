<?php
	function fecha($param)
	{
		$array=explode(' ', $param);
		$fe=$array[0];
		$hr=$array[1];
		$array2=explode('-',$fe);
		$fecha=$array2[2].' de '.$mes.' del '.$array2[0];
		$year = $array2[0];
		return $year;
	}
	function fechaContrato($param)
	{
		$array=explode('/', $param);
		$fecha=$array[1]."/".$array[0]."/".$array[2];
		return $fecha;
	}
?>