<?php
include_once 'vendor/setasign/fpdf/fpdf.php';

$pdf = new fpdf(); // nouveau document PDF
$pdf->addPage(); //ajout d'une page blanche
$pdf->setFont('Arial', '', 12); //police arial 12
$pdf->Cell(190,10,'Hello World!',0,1,'C');
$pdf->setTextColor(255,0,0); //couleur rouge
$pdf->Cell(190,10,'Copyright WF3',0,1,'C');
$pdf->Output(); // envoi au navigateur
?>