<?php include("seguridad.php"); 
include("seguridad.php");
 include("conexion.php");
require('dist/FPDF/fpdf.php');

class PDF extends FPDF
{


// Tabla coloreada
function FancyTable($header)
{
    $this->Image('assets/images/logo250.jpg',80,1,50);

      $this->Ln(40);
    $this->Cell(10);
   
    $this->Cell(170,10,' Inventario Actual',0,0,'C');
    
    $this->Ln(20);

    $this->SetFillColor(18, 15, 112);
    $this->SetTextColor(255);
    $this->SetDrawColor(18, 15, 112);
    $this->SetLineWidth(.3);
    $this->SetFont('','');
    // Cabecera
    $w = array(20, 20, 20, 25, 30, 30, 10, 40);
    for($i=0;$i<count($header);$i++)
        $this->Cell($w[$i],7,$header[$i],1,0,'C',true);
    $this->Ln();
    // Restauración de colores y fuentes
    $this->SetFillColor(224,235,255);
    $this->SetTextColor(0);
    $this->SetFont('');
    // Datos
    $fill = false;
$link2=conecta();
$marca=$_POST['marca'] ;
$queEmp=mysqli_query($link2, "SELECT * FROM equipo where marca='$marca'");
while($row = mysqli_fetch_row($queEmp))
            {
        $this->Cell($w[0],6,number_format($row[0]),'LR',0,'C',$fill);
        $this->Cell($w[1],6,number_format($row[1]),'LR',0,'C',$fill);
        $this->Cell($w[2],6,number_format($row[2]),'LR',0,'C',$fill);
        $this->Cell($w[3],6,$row[3],'LR',0,'C',$fill);
         $this->Cell($w[4],6,$row[4],'LR',0,'C',$fill);
          $this->Cell($w[5],6,$row[5],'LR',0,'C',$fill);
           $this->Cell($w[6],6,number_format($row[6]),'LR',0,'C',$fill);
            $this->Cell($w[7],6,$row[7],'LR',0,'C',$fill);
        $this->Ln();
        $fill = !$fill;
    }
    // Línea de cierre
    $this->Cell(array_sum($w),0,'','T');
}
}

$pdf = new PDF();
// Títulos de las columnas
$header = array('ID Equipo', 'ID Tipo', 'ID Usuario', 'Marca','Modelo','Serie','Qt','Fecha de registro');
$pdf->SetFont('Times','',12);
$pdf->AddPage();
$pdf->FancyTable($header);
$pdf->Output();

?> 
