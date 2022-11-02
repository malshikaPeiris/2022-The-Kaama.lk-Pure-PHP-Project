<?php
require('./fpdf184/fpdf.php');
include 'connection.php';

class mypdf extends FPDF
{
	
	function header()
	{
		$db = new PDO('mysql:host=localhost;dbname=itpm_restaurant','root','');
		$this->setfont('arial', 'B', 13);
		$this->cell(180,4,'User List',0,1,'L');
		$this->Ln();
		
	}
	function footer()
	{
		$this-> setY(-15);
		$this->setfont('arial', '', 8);
		$this->cell(0,10,'page' .$this->PageNo().'/{nb}',0,0,'c');
	}
	function headerTable(){
         $this->setfont('Times', 'B', 10);
         $this->cell(10,10,'ID',1,0,'C');
         $this->cell(30,10,'FIRST NAME',1,0,'C');
         $this->cell(30,10,'LAST NAME',1,0,'C');
         $this->cell(40,10,'EMAIL'	,1,0,'C');
         $this->cell(20,10,'GENDER'	,1,0,'C');
         $this->cell(40,10,'IMAGE'	,1,0,'C');
         $this->cell(20,10,'USER TYPE'	,1,0,'C');
         

	}
	function viewTable($db)
	{

		$stmt=$db->query('SELECT * From users WHERE id!= '.$_GET['userId'].' ORDER BY id DESC');
		
        $a =15;
        $b = 30;

		while ($data =$stmt->fetch(PDO :: FETCH_OBJ)) {
			
			$this->Ln();
            
			$this->cell(10,20,$data->id,1,0,'C');
            $this->cell(30,20, $data->fname,1,0,'C');
         	$this->cell(30,20,$data->lname,1,0,'C');
         	$this->cell(40,20,$data->email,1,0,'L');
         	$this->cell(20,20,$data->gender,1,0,'C');
         	$this->cell(40,20,$this->Image('./db/'.$data->image ,150,$b,$a),1,0,'C');
         	$this->cell(20,20,$data->userType,1,0,'C');

            $b = $b+ 20;
			
			
		 
		}
			
	 }
}


$pdf = new mypdf();

$pdf->AddPage();
$pdf->headerTable();
$pdf->viewTable($db);
$pdf->Ln();
$pdf->output();

?>