<?php
require('rpdf.php');

$pdf=new RPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','',40);
$pdf->TextWithRotation(50,65,'Voila',45,-45);
$pdf->SetFontSize(30);
$pdf->TextWithDirection(110,50,'salut !','L');
$pdf->TextWithDirection(110,50,'wf3 !','U');
$pdf->TextWithDirection(110,50,'ecole !','R');
$pdf->TextWithDirection(110,50,'du web !','D');
$pdf->Output();
?>