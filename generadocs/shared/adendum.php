<?php
	require_once "funciones.php";
	$lenght = count($_POST);
	$posicion = array_keys($_POST);
	$val = array_values($_POST);
	$f=$val[0];
	$cuenta=$val[1];
	$fecha=fechaContrato($f);
	$leyenda='RECIBI DE CONFORMIDAD CARACTERISTICAS  DE OPERACIÓN  DEL PLAN ';
	$ventaplazos='                                                                                                                                                                                                                                        **VENTA A PLAZOS**';
	$tel=$val[2];
	$ica=$val[3];
	$nombre=$val[4];
	$marca=$val[5];
	$modelo=$val[6];
	$imei=$val[7];
	$iccid=$val[8];
	$puntos=$val[9];
	$costo=$val[10];
	$meses=$val[11];
	$plan=$val[12];
	$switch=$val[14];
	if ($switch=='on')
	{
		$obs=$leyenda.$plan.$ventaplazos;
	}
	else
	{
		$obs=$leyenda.$plan;
	}
	// Camino a los include
	set_include_path(get_include_path() . PATH_SEPARATOR . './Classes/');
	// PHPExcel
	require_once '/home/u492945132/public_html/generadocs/shared/excel/Classes/PHPExcel.php';
	// PHPExcel_IOFactory
	include '/home/u492945132/public_html/generadocs/shared/excel/Classes/PHPExcel/IOFactory.php';
	// Creamos un objeto PHPExcel
	$objPHPExcel = new PHPExcel();
	// Leemos un archivo Excel 2007
	$objReader = PHPExcel_IOFactory::createReader('Excel5');
	$objPHPExcel = $objReader->load("base3.xls");
	// Indicamos que se pare en la hoja uno del libro
	$objPHPExcel->setActiveSheetIndex(0);
	//Escribimos en la hoja en las celdas
	$objPHPExcel->getActiveSheet()->SetCellValue('AU5',$fecha)
								->SetCellValue('A6',$nombre)
								->SetCellValue('AD5',$tel)
								->SetCellValue('BC11',"'".$ica)
								->SetCellValue('I15',$marca)
								->SetCellValue('AB15',$modelo)
								->SetCellValue('AN15',"'".$imei)
								->SetCellValue('BG15',"'".$iccid)
								->SetCellValue('U18',$puntos)
								->SetCellValue('AM18',$costo)
								->SetCellValue('AN20',$meses)
								->SetCellValue('L20',$plan)
								->SetCellValue('I106',$obs);

	$calling= "ContratoAdendum ".$tel." ".$nombre;
	//Guardamos el archivo en formato Excel 2007
	//Si queremos trabajar con Excel 2003, basta cambiar el 'Excel2007' por 'Excel5' y el nombre del archivo de salida cambiar su formato por '.xls'
	// Redirect output to a client’s web browser (Excel5)
	header('Content-Type: application/vnd.ms-excel');
	header('Content-Disposition: attachment;filename="'.$calling.'.xls"');
	header('Cache-Control: max-age=0');
	// If you're serving to IE 9, then the following may be needed
	header('Cache-Control: max-age=1');

	// If you're serving to IE over SSL, then the following may be needed
	header ('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
	header ('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT'); // always modified
	header ('Cache-Control: cache, must-revalidate'); // HTTP/1.1
	header ('Pragma: public'); // HTTP/1.0

	$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
	$objWriter->save('php://output');
	exit;
	/*$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
	$objWriter->save("Archivo_salida.xlsx");*/
?>