<?php include("seguridad.php"); 
 include("conexion.php");

require('dist/FPDF/fpdf.php');


class PDF extends FPDF
{
function Header()
{
    global $title;

    // Arial bold 15
    $this->SetFont('Times','B',15);
    // Calculamos ancho y posición del título.
$this->Image('assets/images/logo250.jpg',80,1,50);

      $this->Ln(40);
    $this->Cell(10);
   
    $this->Cell(170,10,' SOLICITUD DE ASIGNACION',0,0,'C');
    
    $this->Ln(20);
}

function Footer()
{
    // Posición a 1,5 cm del final
    $this->SetY(-15);
    // Arial itálica 8
    $this->SetFont('Arial','I',8);
    // Color del texto en gris
    $this->SetTextColor(128);
    // Número de página
    $this->Cell(0,10,'Pag '.$this->PageNo(),0,0,'C');
}

function ChapterTitle($num, $label)
{
    // Arial 12
    $this->SetFont('Arial','',10);
    // Color de fondo
    $this->SetFillColor(18, 15, 112);
    // Título
$this->SetTextColor(255);
    $this->Cell(0,6,"Apartado $num : $label",0,1,'L',true);
    // Salto de línea
    $this->Ln(4);
}

function ChapterBody()
{
    // Leemos el fichero
    // Times 12
    $this->SetFont('Times','',10);
    // Imprimimos el texto justificado
    // Salto de línea
      $this->SetTextColor(0,0,0);
    $this->Ln();
    // Cita en itálica
    $this->SetFont('','I');
    $link=conecta();
    $id =$_REQUEST['idasig'];
    $mixedquery=mysqli_query($link,"SELECT procesoasig.idasig,registro.nombre,registro.apellidos, registro.correl, equipo.marca, equipo.modelo, equipo.nserie,aula.aula,procesoasig.cantidad,procesoasig.fechaasig,procesoasig.aprob from (((procesoasig INNER JOIN registro ON registro.idusuario=procesoasig.idusuario) INNER JOIN equipo ON equipo.idequipo=procesoasig.idequipo) INNER JOIN aula ON aula.idaula=procesoasig.idaula) WHERE procesoasig.idasig='$id'");
    while($rowmix = mysqli_fetch_row($mixedquery))
{
    $id=$rowmix[0];
    $nombre=$rowmix[1];
    $apellidos=$rowmix[2];
    $correl=$rowmix[3];
    $marca =$rowmix[4];
    $modelo=$rowmix[5];
    $nserie=$rowmix[6];
    $aula=$rowmix[7];
    $cantidad=$rowmix[8];
    $fecha=$rowmix[9];
    $aprob=$rowmix[10];

    $this->Cell(40,10,'Yo '. $nombre. ','.$apellidos.' con correlativo numero ' .$correl. ' empleado natural de la Universidad Evangelica de El Salvador');
     $this->Ln(10);
     $this->Cell(40,10,' solicito la aprobacion para asignacion del siguiente equipo: ');
          $this->Ln(20);
          $this->Cell(40,10,'Especificaciones Tecnicas :                                        Asignacion: ');
          $this->Ln(10);
$this->Cell(40,10,'Marca: '. $marca. '                                                                Aula: ' . $aula);
$this->Ln(10);
$this->Cell(40,10,'Modelo: '. $modelo.'                                                         Cantidad de equipo/s a establecer: '. $cantidad.' unidades');
$this->Ln(10);
$this->Cell(40,10,'Numero de serie: '. $nserie);
$this->Ln(20);
$this->Cell(40,10,'OBSERVACIONES: ');
$this->Ln(40);
$this->Cell(40,10,'Dicha solicitud de la asignacion fue ingresada en sistema en la fecha: ' .$fecha.'');
$this->Ln(50);
$this->Cell(40,10,'_____________________________                                           _____________________________           ');
$this->Ln(10);
$this->Cell(0,10,'Firma solicitante                                                                        Firma decanato');
$this->Ln(40);
}
    
}

function PrintChapter($num, $title)
{
    $this->AddPage();
    $this->ChapterTitle($num,$title);
    $this->ChapterBody();
}

function ChapterBody2()
{
    // Leemos el fichero
    // Times 12
    $this->SetFont('Times','',12);
    // Imprimimos el texto justificado
    // Salto de línea
      $this->SetTextColor(0,0,0);
    $this->Ln();
    // Cita en itálica
    $this->SetFont('','I');
$this->Cell(40,10,'');
$this->Ln(10);
$this->Cell(40,10,'');
}
function PrintChapter2($num, $title)
{
    $this->AddPage();
    $this->ChapterTitle($num,$title);
    $this->ChapterBody2();
}
}

$pdf = new PDF();
$title = 'SOLICITUD DE APROBACION SES';
$pdf->SetTitle($title);
$pdf->SetAuthor('UEES');
$pdf->PrintChapter(1,'Solicitud empleado');
$pdf->PrintChapter2(2,'Extension de responsabilidad UEES');
$pdf->Output();
?>
