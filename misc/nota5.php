<?php
require('../fpdf/fpdf.php');
include('../includes/config.php');
try{
    $pdo = new PDO('mysql:host=localhost;dbname=ecobay','root','');
}catch(PDOException $error){
    echo $error->getmessage();
}

$select = $pdo->prepare("SELECT * FROM tblbooking where status ='2'");
$select->execute();
$row = $select->fetch(PDO::FETCH_OBJ);
$pdf = new FPDF('P','mm', array(500,300));
$pdf->AddPage();
$pdf->Ln( 30 );
$pdf->Image("../assets/images/dealer-logo.png", 120, 5, 40);


$pdf->SetFont('Arial','B',16);
$pdf->Cell(20,10,'EcoBay Freight | Customs Clearing Services',0,1,'L');
$pdf->SetFont('Arial','U',14);
$pdf->Cell(20,10 ,'Cancelled Bookings',0,1,'L');
//////////////////////////////////////////////
 
 
$pdf->SetY(60);
$pdf->SetFont('Arial','B',5);
$pdf->Cell(33,5 ,'BookingNumber',1,0,'C');
$pdf->SetFont('Arial','B',5);
$pdf->Cell(33,5 ,'userEmail',1,0,'C');
$pdf->SetFont('Arial','B',5);
$pdf->Cell(33,5 ,'Vehicle Name',1,0,'C');
 $pdf->SetFont('Arial','B',5);
$pdf->Cell(33,5 ,'Booking Date',1,0,'C');
$pdf->SetFont('Arial','B',5);
$pdf->Cell(33,5 ,'Quantity',1,0,'C');
$pdf->SetFont('Arial','B',5);
$pdf->Cell(33,5 ,'Price',1,0,'C');
$pdf->SetFont('Arial','B',5);
$pdf->Cell(33,5 ,'Status',1,1,'C');


$select = $pdo->prepare("SELECT * FROM tblbooking where status ='2' ");
$select->execute();
while($item = $select->fetch(PDO::FETCH_OBJ)){

    $pdf->SetFont('Arial','B',5);
    $pdf->Cell(33,6,$item->BookingNumber,1,0,'C');
    $pdf->Cell(33,6,$item->userEmail,1,0,'C');   
	
		$VehicleId= $item->VehicleId;
		$sql_qry =  mysqli_query($con, "SELECT * FROM tblvehicles WHERE id = '$VehicleId' ");
		$record = $sql_qry->fetch_array();
		$VehiclesTitle = $record['VehiclesTitle'];
 
		 
	 $pdf->SetFont('Arial','B',5);
    $pdf->Cell(33,6,$VehiclesTitle,1,0,'C');   
	$pdf->Cell(33,6,$item->BookingDate,1,0,'C');
	
	$pdf->SetFont('Arial','B',5);
    $pdf->Cell(33,6,$item->Quantity,1,0,'C'); 
    $pdf->Cell(33,6,'$'.$item->Price,1,0,'C'); 
  
    $pdf->SetFont('Arial','B',5);
    $pdf->Cell(33,6,'Cancelled Booking',1,0,'C');    
	 
}

$pdf->Output();

