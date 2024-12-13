<?php
require('../fpdf/fpdf.php');

try{
    $pdo = new PDO('mysql:host=localhost;dbname=ecobay','root','');
    //echo 'Connection Successfull';
}catch(PDOException $error){
    echo $error->getmessage();
}

$select = $pdo->prepare("SELECT * FROM tblvehicles");
$select->execute();
$row = $select->fetch(PDO::FETCH_OBJ);
//$pdf = new FPDF('P','mm', array(500,300));
$pdf = new FPDF('P','mm', array(500,300));

$pdf->AddPage();

$pdf->SetFont('Arial','B',16);
$pdf->Cell(20,10,'EcoBay Freight | Customs Clearing Services',0,1,'L');

//$pdf->SetFont('Arial','U',14);
$pdf->SetFont('Arial','U',14);
$pdf->Cell(20,10 ,'VEHICLES DETAILS',0,1,'L');

//////////////////////////////////////////////
$pdf->SetY(34);

$pdf->SetFont('Arial','B',5);
$pdf->Cell(40,5 ,'VehiclesTitle',1,0,'C');
$pdf->SetFont('Arial','B',5);
$pdf->Cell(40,5 ,'VehiclesBrand',1,0,'C');
$pdf->SetFont('Arial','B',5);
$pdf->Cell(40,5 ,'PricePerDay',1,0,'C');
 $pdf->SetFont('Arial','B',5);
$pdf->Cell(40,5 ,'FuelType',1,0,'C');
$pdf->SetFont('Arial','B',5);
$pdf->Cell(40,5 ,'ModelYear',1,0,'C');
$pdf->SetFont('Arial','B',5);
$pdf->Cell(40,5 ,'SeatingCapacity',1,1,'C');

$select = $pdo->prepare("SELECT * FROM tblvehicles");
$select->execute();
while($item = $select->fetch(PDO::FETCH_OBJ)){

    $pdf->SetFont('Arial','B',5);
    $pdf->Cell(40,6,$item->VehiclesTitle,1,0,'C');
    $pdf->Cell(40,6,$item->VehiclesBrand,1,0,'C');   
	
	 $pdf->SetFont('Arial','B',5);
    $pdf->Cell(40,6,$item->PricePerDay,1,0,'C');   
	$pdf->Cell(40,6,$item->FuelType,1,0,'C');
	
	$pdf->SetFont('Arial','B',5);
    $pdf->Cell(40,6,$item->ModelYear,1,0,'C');   
	 $pdf->Cell(40,6,$item->SeatingCapacity,1,1,'C');

   
	 
}

$pdf->Output();

