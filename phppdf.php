 <?php
define('FPDF_FONTPATH', 'font/');
require('fpdf.php');

//Connect to your database
include("dbclasscontroller.php");
class phptopdf
{
	private $dbhandle;
	private $pdf;
	private $result;
	private $header;
	function __construct() {
		$this->db_handle = new Db();
		$this->pdf = new FPDF();
		$this->pdf->AddPage();
           }
	public function writePDFhead() {
           $this->pdf->SetMargins(10,30);
           $this->pdf->Image('pictures/thumb/whologo.png', 5, 5, 20, 20);
           $this->pdf->SetFont('Arial', 'B', 16);
           $this->pdf->Text(80,10,'mPower Report');
           $this->pdf->SetFillColor(241,245,230);
           $this->pdf->Rect(5,25,200,250,'FD');
         }
	public function query($sqlheadquery,$sqlvalquery)
	{
		$this->result = $this->db_handle->select($sqlvalquery);//"SELECT * FROM registration");
$this->header = $this->db_handle->select($sqlheadquery);//"SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = 'registration' AND TABLE_NAME = 'registration'");
	}
	public function writePDFtable() 
	{
	   //initialize counter
         $i = 0;

      //Set maximum rows per page
         $max = 2;
        $this->pdf->SetXY(10,30);
        $this->pdf->SetFont('Arial', 'B', 9);
		foreach($this->header as $heading) {
        	    foreach($heading as $column_heading)
				{
					$this->pdf->SetFillColor(20,210,205);
		             $this->pdf->Cell(30, 6, $column_heading, 1);
				}
             }
		
         foreach($this->result as $row) {
         		
	      if ($i == $max)
            {
              $this->pdf->AddPage();
              $this->writePDFhead();
		      $this->pdf->SetFont('Arial', 'B', 9);		
              foreach($this->header as $heading) {
        	    foreach($heading as $column_heading)
				{
					$this->pdf->SetFillColor(200,210,205);
		             $this->pdf->Cell(30, 6, $column_heading, 1);
				}
             }
		      $i = 0;
	         }
		
	     $this->pdf->Ln();
	     foreach($row as $column)
	        {
		     $this->pdf->Cell(30,6,$column,1);
		
	        }
	      $i = $i + 1;
         }
	}
	public function outputpdf()
	{
	$date = new DateTime();

     $this->pdf->Output('mHealth'.$date->getTimestamp().'.pdf','D');
    }
}

?> 