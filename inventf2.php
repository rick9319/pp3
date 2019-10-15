<?php include("seguridad.php"); 
include("seguridad.php");
 include("conexion.php");
$link=conecta();
$tipo=$_POST['tipo'] ;

require_once('dist/class.ezpdf.php');
$pdf = new Cezpdf('a4');
$pdf->selectFont('dist/fonts/courier.afm');
$pdf->ezSetCmMargins(1,1,1.5,1.5);
$queEmp=mysqli_query($link, "SELECT * FROM equipo where idtipo='$tipo'");
$totEmp = mysqli_num_rows($queEmp);

$ixx = 0;
while($datatmp = mysqli_fetch_array($queEmp)) { 
    $ixx = $ixx+1;
    $data[] = array_merge($datatmp, array('num'=>$ixx));
}
$titles = array(
                'idequipo'=>'<b>ID</b>',
                'idtipo'=>'<b>ID Tipo</b>',
                'idusuario'=>'<b>ID Usuario</b>',
                'marca'=>'<b>Marca</b>',
                'modelo'=>'<b>Modelo</b>',
                'nserie'=>'<b>Numero de Serie</b>',
                'cantidad'=>'<b>Cantidad disponible</b>',
                'fechre'=>'<b>Fecha de registro</b>',
                //'servicios'=>'<b>servicio</b>',
                //'nnit'=>'<b>NIT</b>',
                //'observacion'=>'<b>Observaciones</b>'

                
            );
$options = array(
                'shadeCol'=>array(0.9,0.9,0.9),
                'xOrientation'=>'center',
                'width'=>551
            );

$txttit = "<b> Inventario Actual</b>\n";

$pdf->ezText($txttit, 18);
$pdf->ezTable($data, $titles, '', $options);
$pdf->ezText("\n\n\n", 10);
$pdf->ezText("<b>Fecha:</b> ".date("d/m/Y"), 10);
$pdf->ezText("<b>Hora:</b> ".date("H:i:s")."\n\n", 10);
$pdf->ezStream();


?> 
