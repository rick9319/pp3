<?php 
header("Content-type: application/vnd.ms-excel" ) ; 
header("Content-Disposition: attachment; filename=reporte-miventa.xls" ) ; 
//en la sigte linea colocar entre comillas el nombre del servidor mysql (generalmente, localhost) 
$servidor="localhost"; 
//en la sigte linea colocar entre comillas el nombre de usuario 
$user=""; 
//en la sigte linea colocar entre comillas la contraseña 
$pass=""; 
//en la sigte linea colocar entre comillas e nombre de la base de datos 
$db=""; 

$fecha=$_POST['datepicker'];

$invert = explode("/",$fecha);

$fecha_invert = $invert[1]."/".$invert[0]."/".$invert[2]; 

echo $fecha_invert;

//en la sigte linea colocar entre comillas e nombre de la tabla
$tabla="misventas_politicas"; 
date_default_timezone_set('america/el_salvador');
mysql_connect($servidor,$user,$pass) ; 
mysql_select_db($db) ; 
$qry=mysql_query("select * from $tabla where fecha='$fecha_invert'") ; 
$campos = mysql_num_fields($qry) ; 
$i=0; 
echo "<table><tr>"; 
while($i<$campos){ 
echo "<td>". mysql_field_name ($qry, $i) ; 
echo "</td>"; 
$i++; 
} 
echo "</tr>"; 
while($row=mysql_fetch_array($qry)){ 
echo "<tr>"; 
for($j=0; $j<$campos; $j++) { 
echo "<td>".$row[$j]."</td>"; 
} 
echo "</tr>"; 
} 
echo "</table>"; 
?> 