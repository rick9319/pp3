<?php include("seguridad.php"); 
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
   
    $this->Cell(170,10,' Usuarios registrados en sistema',0,0,'C');
    
    $this->Ln(20);

    $this->SetFillColor(18, 15, 112);
    $this->SetTextColor(255);
    $this->SetDrawColor(18, 15, 112);
    $this->SetLineWidth(.3);
    $this->SetFont('','');
    // Cabecera
    $w = array(10, 25, 25, 25, 10, 15, 30,20,30);
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
    $queEmp=mysqli_query($link2, "SELECT idusuario,nombre,apellidos, correl, idrol, nombreusuario,correo, fechar FROM registro WHERE idrol=2");
    while($row = mysqli_fetch_row($queEmp))
            {
        $this->Cell($w[0],6,number_format($row[0]),'LR',0,'C',$fill);
        $this->Cell($w[1],6,$row[1],'LR',0,'C',$fill);
        $this->Cell($w[2],6,$row[2],'LR',0,'C',$fill);
        $this->Cell($w[3],6,number_format($row[3]),'LR',0,'C',$fill);
         $this->Cell($w[4],6,number_format($row[4]),'LR',0,'C',$fill);
          $this->Cell($w[5],6,$row[5],'LR',0,'C',$fill);
           $this->Cell($w[6],6,$row[6],'LR',0,'C',$fill);  
           $this->Cell($w[7],6,'Encriptado','LR',0,'C',$fill);         
            $this->Cell($w[8],6,$row[7],'LR',0,'C',$fill);
           
        $this->Ln();
        $fill = !$fill;
    }
    // Línea de cierre
    $this->Cell(array_sum($w),0,'','T');
}
}

$pdf = new PDF();
// Títulos de las columnas
$header = array('ID', 'Nombre', 'Apellidos','Correlativo','ID Rol','Usuario','Correo','Password','Fecha de registro');
$pdf->SetFont('Times','',8);
$pdf->AddPage();
$pdf->FancyTable($header);
$pdf->Output();
?> 
