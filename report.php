<?php
require ('phppdf.php');
$pdfreport=new phptopdf();
$pdfreport->writePDFhead();
$pdfreport->query("SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = 'registration' AND TABLE_NAME = 'registration'","SELECT * FROM registration");
$pdfreport->writePDFtable();
$pdfreport->outputpdf();


/*define('FPDF_FONTPATH', 'font/');
require_once("dbclasscontroller.php");
require('fpdf.php');
function writePDFhead($pdf) {
 $pdf->SetMargins(10,30);
$pdf->Image('pictures/thumb/whologo.png', 5, 5, 20, 20);
$pdf->SetFont('Arial', 'B', 16);
$pdf->Text(80,10,'mPower Report');
$pdf->SetFillColor(241,245,230);
$pdf->Rect(5,25,200,250,'FD');
         }
$db_handle = new Db();
$result = $db_handle->select("SELECT * FROM registration");
$header = $db_handle->select("SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = 'registration' AND TABLE_NAME = 'registration'");


$pdf = new FPDF();
//set initial y axis position per page
$pdf->AddPage();
$pdf->SetXY(10,30);
writePDFhead($pdf);
$pdf->SetFont('Arial', 'B', 9);	
	
foreach($header as $heading) {
	
	foreach($heading as $column_heading)
		$pdf->Cell(30, 6, $column_heading, 1);
}
//initialize counter
$i = 0;

//Set maximum rows per page
$max = 2;


foreach($result as $row) {
	if ($i == $max)
    {
        $pdf->AddPage();
        writePDFhead($pdf);
		$pdf->SetFont('Arial', 'B', 9);		
        foreach($header as $heading) {
        	foreach($heading as $column_heading)
		      $pdf->Cell(30, 6, $column_heading, 1);
        }
		$i = 0;
	}
		
	$pdf->Ln();
	foreach($row as $column)
	{
		$pdf->Cell(30,6,$column,1);
		
	}
	$i = $i + 1;
}
$date = new DateTime();

$pdf->Output('mHealth'.$date->getTimestamp().'.pdf','D');*/
?>