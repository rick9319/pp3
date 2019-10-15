<?php include("seguridad.php"); 
require_once('dist/class.ezpdf.php');
$pdf = new Cezpdf('a4');
$pdf->selectFont('dist/fonts/courier.afm');
$pdf->ezSetCmMargins(1,1,1.5,1.5);
 include("conexion.php");
$link=conecta();
$queEmp=mysqli_query($link, "SELECT * FROM registro where idrol=1");
$totEmp = mysqli_num_rows($queEmp);

$ixx = 0;
while($datatmp = mysqli_fetch_array($queEmp)) { 
    $ixx = $ixx+1;
    $data[] = array_merge($datatmp, array('num'=>$ixx));
}
$titles = array(
                'idusuario'=>'<b>ID</b>',
                'nombre'=>'<b>Nombre</b>',
                'apellidos'=>'<b>Apellidos</b>',
                'correl'=>'<b>Numero de correlativo</b>',
                'idrol'=>'<b>Rol</b>',
                'nombreusuario'=>'<b>Nombre de usuario</b>',
                'correo'=>'<b>Correo</b>',
                'password'=>'<b>Contraseña</b>',
                'fotor'=>'<b>Foto</b>',
                 'fechar'=>'<b>Fecha de registro</b>',
                //'servicios'=>'<b>servicio</b>',
                //'nnit'=>'<b>NIT</b>',
                //'observacion'=>'<b>Observaciones</b>'

                
            );
$options = array(
                'shadeCol'=>array(0.9,0.9,0.9),
                'xOrientation'=>'center',
                'width'=>551
            );

$txttit = "<b> Usuarios registrados</b>\n";

$pdf->ezText($txttit, 18);
$pdf->ezTable($data, $titles, '', $options);
$pdf->ezText("\n\n\n", 10);
$pdf->ezText("<b>Fecha:</b> ".date("d/m/Y"), 10);
$pdf->ezText("<b>Hora:</b> ".date("H:i:s")."\n\n", 10);
$pdf->ezStream();


?> 
