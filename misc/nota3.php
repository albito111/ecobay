<?php
require('../fpdf/fpdf.php');

try{
    $pdo = new PDO('mysql:host=localhost;dbname=ecobay','root','');
}catch(PDOException $error){
    echo $error->getmessage();
}

$select = $pdo->prepare("SELECT * FROM tblusers");
$select->execute();
$row = $select->fetch(PDO::FETCH_OBJ);
$pdf = new FPDF('P','mm', array(500,300));
$pdf->AddPage();
$pdf->Ln( 30 );
$pdf->Image("../assets/images/dealer-logo.png", 120, 5, 40);


$pdf->SetFont('Arial','B',16);
$pdf->Cell(20,10,'EcoBay Freight | Customs Clearing Services',0,1,'L');
$pdf->SetFont('Arial','U',14);
$pdf->Cell(20,10 ,'Users',0,1,'L');
//////////////////////////////////////////////

$pdf->SetY(60);
$pdf->SetFont('Arial','B',5);
$pdf->Cell(40,5 ,'FullName',1,0,'C');
$pdf->SetFont('Arial','B',5);
$pdf->Cell(40,5 ,'EmailId',1,0,'C');
$pdf->SetFont('Arial','B',5);
$pdf->Cell(40,5 ,'ContactNo',1,0,'C');
 $pdf->SetFont('Arial','B',5);
$pdf->Cell(40,5 ,'Address',1,0,'C');
$pdf->SetFont('Arial','B',5);
$pdf->Cell(40,5 ,'National Id',1,0,'C');
$pdf->SetFont('Arial','B',5);
$pdf->Cell(40,5 ,'Verified',1,1,'C');


$select = $pdo->prepare("SELECT * FROM tblusers");
$select->execute();
while($item = $select->fetch(PDO::FETCH_OBJ)){

    $pdf->SetFont('Arial','B',5);
    $pdf->Cell(40,6,$item->FullName,1,0,'C');
    $pdf->Cell(40,6,$item->EmailId,1,0,'C');   
	
	 $pdf->SetFont('Arial','B',5);
    $pdf->Cell(40,6,$item->ContactNo,1,0,'C');   
	$pdf->Cell(40,6,$item->Address,1,0,'C');
	
	$pdf->SetFont('Arial','B',5);
    $pdf->Cell(40,6,$item->National_id,1,0,'C');   
    $pdf->Cell(40,6,$item->Verified,1,1,'C');   
  
	 
}

$pdf->Output();

