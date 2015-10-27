<?php

include_once 'vendor/setasign/fpdf/fpdf.php';
$pdf = new fpdf();
$pdf->addPage();
$pdf->setFont('arial','',22);
$pdf->Cell(190,10,'Hello les moutons!!!!!',0,1,'C');
$pdf->Output();

//echo "ok";












?>