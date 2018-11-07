<?php
	function fecha($param)
	{
		$array=explode(' ', $param);
		$fe=$array[0];
		$hr=$array[1];
		$array2=explode('-',$fe);
		if ($array2[1]==1)
		{
			$mes='Enero';
		}
		else if($array2[1]==2)
		{
			$mes='Febrero';
		}
		elseif ($array2[1]==3)
		{
			$mes='Marzo';
		}
		elseif($array2[1]==4)
		{
			$mes='Abril';
		}
		elseif($array2[1]==5)
		{
			$mes='Mayo';
		}
		elseif($array2[1]==6)
		{
			$mes='Junio';
		}
		elseif($array2[1]==7)
		{
			$mes='Julio';
		}
		elseif($array2[1]==8)
		{
			$mes='Agosto';
		}
		elseif($array2[1]==9)
		{
			$mes='Septiembre';
		}
		elseif($array2[1]==10)
		{
			$mes='Octubre';
		}
		elseif($array2[1]==11)
		{
			$mes='Noviembre';
		}
		elseif($array2[1]==12)
		{
			$mes='Diciembre';
		}
		else
		{
			$mes='Mes No Valido';
		}
		$fecha=$array2[2].' de '.$mes.' del '.$array2[0];
		return $fecha;
	}
	function hora($param)
	{
		$array=explode(' ', $param);
		$fe=$array[0];
		$hr=$array[1];
		return $hr;
	}
	function tienda($param)
	{
		if ($param==1)
		{
			$tienda='Matamoros Toluca';
		}
		else if($param==2)
		{
			$tienda='San Juan Metepec';
		}
		elseif ($param==3)
		{
			$tienda='Galerias Toluca';
		}
		elseif($param==4)
		{
			$tienda='Fabela Sur';
		}
		elseif($param==5)
		{
			$tienda='Portal Pachuca';
		}
		else
		{
			$tienda='Tienda No Valida';
		}
		return $tienda;
	}
	function asesor($param)
	{
		if ($param==1)
		{
			$asesor='David';
		}
		elseif($param==2)
		{
			$asesor='Levi';
		}
		elseif($param==3)
		{
			$asesor='Osvaldo';
		}
		else
		{
			$asesor='No Valido';
		}
		return $asesor;
	}
?>