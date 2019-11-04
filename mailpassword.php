<!DOCTYPE html>
 <html>
 <head>
<script src="assets/sweetalert2.js"></script>
<link rel="stylesheet" type="text/css" href="assets/sweetalert2.css">
</head>
</html>
<?php
 include("conexion.php");
 $link=conecta();
 $recu=0;
 $recu=$_POST['recu'];
 $recuperar = mysqli_query($link, "SELECT correo FROM registro WHERE correo='$recu'");
while($recur = mysqli_fetch_row($recuperar))
{
$resulta=$recur[0];
}
// Contact subject
$subject ='Prueba1';
// Details
$message='Recuperacion de tu password';
//echo $subject;
// Mail of sender
$from='fiueesevangelica@gmail.com';
$name='Sysadmin';
$bounce     = "fiueesevangelica@gmail.com";
// From
//$header=”from: $name <$mail_from>”;
// Enter your email address
$to =$resulta;
$headers    = "From:$from\r\nReturn-path:$bounce";
$send_contact=mail($to,$subject,$message, $headers);
// Check, if message sent to your email
if($send_contact){

}
else {

}
?>


