<?php 
require('../core/fpdf.php');


//create a FPDF object
$pdf=new FPDF();

//set document properties
$pdf->SetTextColor(255,0,0);
$pdf->SetTitle('Contact Information');

//set font for the entire document
$pdf->SetFont('Helvetica','B',20);
//$pdf->SetTextColor(50,60,100);

//set up a page
$pdf->AddPage('P'); 

//display the title with a border around it
$pdf->SetXY(50,20);
$pdf->SetDrawColor(50,60,100);
$pdf->Cell(100,10,'User Contact Information',1,0,'C',0);

$pdf->SetTextColor(50,60,100);
//Set x and y position for the main text, reduce font size and write content
$pdf->SetXY (10,50);
$pdf->SetFontSize(12);
$pdf->SetDrawColor(0,0,0);
$pdf->Write(5,'This file can be printed to get user Information.');

$pdf->SetXY (10,60);
$pdf->SetFontSize(10);
$pdf->Write(5,'UserName: '.$_POST['username']);

$pdf->SetXY (10,70);
$pdf->SetFontSize(10);
$pdf->Write(5,'Email:'.$_POST['email']);

$pdf->SetXY (10,80);
$pdf->SetFontSize(10);
$pdf->Write(5,'Phone Number: '.$_POST['phone']);

$pdf->SetXY (10,90);
$pdf->SetFontSize(10);
$pdf->Write(5,'Address: '.$_POST['address']);

//Output the document
$pdf->Output('example1.pdf','I');
 ?>