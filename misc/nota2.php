<?php
require('../fpdf/fpdf.php');

try{
    $pdo = new PDO('mysql:host=localhost;dbname=ecobay','root','');
}catch(PDOException $error){
    echo $error->getmessage();
}

$select = $pdo->prepare("SELECT * FROM tblcontactusquery order by status ASC");
$select->execute();
$row = $select->fetch(PDO::FETCH_OBJ);
$pdf = new FPDF('P','mm', array(500,300));
$pdf->AddPage();
$pdf->Ln( 30 );
$pdf->Image("../assets/images/dealer-logo.png", 120, 5, 40);


$pdf->SetFont('Arial','B',16);
$pdf->Cell(20,10,'EcoBay Freight | Customs Clearing Services',0,1,'L');
$pdf->SetFont('Arial','U',14);
$pdf->Cell(20,10 ,'Customers Enquiries',0,1,'L');
//////////////////////////////////////////////

$pdf->SetY(60);
$pdf->SetFont('Arial','B',5);
$pdf->Cell(40,5 ,'FullName',1,0,'C');
$pdf->SetFont('Arial','B',5);
$pdf->Cell(40,5 ,'EmailId',1,0,'C');
$pdf->SetFont('Arial','B',5);
$pdf->Cell(40,5 ,'ContactNumber',1,0,'C');
 $pdf->SetFont('Arial','B',5);
$pdf->Cell(80,5 ,'Message',1,0,'C');
$pdf->SetFont('Arial','B',5);
$pdf->Cell(30,5 ,'Date',1,0,'C');
$pdf->SetFont('Arial','B',5);
$pdf->Cell(20,5 ,'Verified',1,1,'C');
 

$select = $pdo->prepare("SELECT * FROM tblcontactusquery order by status ASC");
$select->execute();
while($item = $select->fetch(PDO::FETCH_OBJ)){

    $pdf->SetFont('Arial','B',5);
    $pdf->Cell(40,6,$item->name,1,0,'C');
    $pdf->Cell(40,6,$item->EmailId,1,0,'C');   
	
	 $pdf->SetFont('Arial','B',5);
    $pdf->Cell(40,6,$item->ContactNumber,1,0,'C');   
	$pdf->Cell(80,6,$item->Message,1,0,'C');
	
	$pdf->SetFont('Arial','B',5);
    $pdf->Cell(30,6,$item->PostingDate,1,0,'C'); 
	$status=$item->status;
if($status == 1){$status="Read"; }	
else {$status="Pending"; }
    $pdf->Cell(20,6,$status,1,1,'C');   
  
	 
}

$pdf->Output();

