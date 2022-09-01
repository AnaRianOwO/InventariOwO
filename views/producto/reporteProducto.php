<?php 
require('assets/fpdf/fpdf.php');

class PDF extends FPDF {

    function TablaProd($prod, $data){
        $this->SetFillColor(3,1,8);
        $this->SetTextColor(255);
        $this->SetDrawColor(3,1,8);
        $this->SetLineWidth(.3);
        $this->SetFont('','B');
        
        $w = array(33, 35, 32, 42, 35, 38, 20, 30, 30, 20);
        for($i=0;$i<count($prod);$i++)
            $this->Cell($w[$i],7,$prod[$i],1,0,'C',true);
        $this->Ln();
        $this->SetFillColor(217, 219, 248);
        $this->SetTextColor(0);
        $this->SetFont('');
        $fill = false;
        foreach($data["producto"] as $row)
        {
            $this->Cell($w[0],6,utf8_decode($row["nombreProducto"]),'LR',0,'L',$fill);
            $this->Cell($w[1],6,utf8_decode($row["descripcionProducto"]),'LR',0,'L',$fill);
            $this->Cell($w[2],6,utf8_decode($row["marca"]),'LR',0,'L',$fill);
            $this->Cell($w[3],6,utf8_decode($row["lugarDeCompra"]),'LR',0,'L',$fill);
            $this->Cell($w[4],6,utf8_decode($row["fechaVencimiento"]),'LR',0,'R',$fill);
            $this->Cell($w[5],6,utf8_decode($row["nombrePresentacion"]),'LR',0,'L',$fill);
            $this->Cell($w[6],6,utf8_decode($row["stock"]),'LR',0,'R',$fill);
            $this->Cell($w[7],6,utf8_decode($row["nombreCategoria"]),'LR',0,'L',$fill);
            $this->Cell($w[8],6,utf8_decode($row["nombrePrioridad"]),'LR',0,'L',$fill);
            $this->Cell($w[9],6,utf8_decode($row["precio"]),'LR',0,'R',$fill);
            $this->Ln();
            $fill = !$fill;
        }
        $this->Cell(array_sum($w),0,'','T');
    }
}
$pdf = new PDF('L', 'mm', array(350,200));
$pdf->AddPage();
$pdf->SetTitle("Reporte productos");
$pdf->SetFont('Arial','B',14);
$pdf->Cell(300,10,'Reporte productos', 0, 1, "C");
$pdf->TablaProd($prod,$data);
$pdf->Output();
?>