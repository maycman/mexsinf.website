<?php
	$long = count($_POST);
	$posicion = array_keys($_POST);
	$val = array_values($_POST);
	$dia = $val[0];
	$mes = $val[1];
	$marca = $val[2];
	$model = $val[3];
	$imei = $val[4];
	$coste = $val[5];
	$plazo = $val[6];
	$cuenta = $val[7];
	$tel = $val[8];
	$nombre = utf8_decode($val[9]);
?>
<?php
	require_once('FPDI/fpdf/fpdf.php');
	require_once('FPDI/fpdi.php');
	require_once('FPDI/fpdf_tpl.php');
	require_once "funciones.php";
	// Original file with multiple pages
	$fullPathToFile = "/home/u492945132/public_html/generadocs/shared/base.pdf";
	class PDF extends FPDI
	{
		var $_tplIdx;
		function Header()
		{
			global $fullPathToFile;
			if (is_null($this->_tplIdx))
			{
				// THIS IS WHERE YOU GET THE NUMBER OF PAGES
				$this->numPages = $this->setSourceFile($fullPathToFile);
				$this->_tplIdx = $this->importPage(1);
			}
			$this->useTemplate($this->_tplIdx, 0, 0,200);
		}
		function Footer()
		{
		}
	}
	// Inicia objeto PDF
	$pdf = new PDF();
	// Agrega la pagina
	$pdf->AddPage();
	// El nuevo contenido
	$pdf->SetFont("helvetica", "B", 8);
	$pdf->SetTextColor(20, 20, 20);
	$pdf->Text(142,104,$dia);
	$pdf->Text(110,107,$mes);
	$obten = date("Y-m-d H:i:s",time()-21600);
	$ano = fecha($obten);
	$pdf->Text(165,107,$ano);
	$pdf->Text(117,117,$marca);
	$pdf->Text(119,124,$model);
	$pdf->Text(115,131,$imei);
	$pdf->Text(172,138,$coste);
	// Solo este dato es fijo
	$pdf->Text(117,145,$plazo." MESES");
	$pdf->Text(148,160,$cuenta);
	$pdf->Text(148,167,$tel);
	$pdf->Text(108,231,$nombre);
	// Esto pone el resto de las paginas
	if($pdf->numPages>1)
	{
   		for($i=2;$i<=$pdf->numPages;$i++)
   		{
        	//$pdf->endPage();
        	$pdf->_tplIdx = $pdf->importPage($i);
        	$pdf->AddPage();
        }
    }
	//Muestra el PDF
	ob_end_clean();
	//$pdf->Output();
	// o fuerza la descarga con el parametro D
	$pdf->Output("VentaPlazos ".$tel." ".$nombre.".pdf", 'D');
?>