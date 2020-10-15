<?php 

require('fpdf/fpdf.php');

$alturaPag = 210;
$larguraPag = 297;
$nome="Fulano Pereira da Silva";
$datas="INÍCIO: 21/07/2020  TERMINO: 21/07/2020";

$pdf = new FPDF('L','mm','A4');
$pdf->AddPage();
$pdf->SetAutoPageBreak(false);

$pdf->SetFont('Arial','B',30);
$pdf->SetTextColor(180,0,0);
$pdf->Image("cert.jpg",0 ,0 , $larguraPag, $alturaPag);
$pdf->SetXY(($larguraPag/2)-($pdf->GetStringWidth($nome)/2),95);
$pdf->Write(1, utf8_decode($nome));

$pdf->SetFont('Arial','B',15);
$pdf->SetXY(($larguraPag/2)-($pdf->GetStringWidth($datas)/2),195);
$pdf->Write(1, utf8_decode($datas));

$pdf->Output();

?>