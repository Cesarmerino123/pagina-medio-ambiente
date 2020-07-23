<?php
	include("mail.php");
$nombre=$_POST['nombre'];
$email=$_POST['email'];
$mensaje=$_POST['mensaje'];

 $conn=conectarse();
 $sql="select * from formulario";
                
 $sql = "insert into datos (nombre,email,mensaje)
values("$nombre","$email","$mensaje");
 
 mysql_query($sql) or die (mysql_error());
echo"<script language='javascript'>
		alert('Los  registros fueron guardados correctamente');
		$ejecutar=mysql_query($sql);
if (!$ejecutar) {
	echo"Hubo Algun Error";
else{
	echo "Datos guardados correctamente<br><a href='contacto.html'>Volver</a>"
}
?>

