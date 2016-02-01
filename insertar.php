<?php 

include("conexion.php");

	if(isset($_POST['nombre']) && !empty($_POST['nombre']) &&
	isset($_POST['pw']) && !empty($_POST['pw']))
{
$con=mysql_connect($host,$user,$pw) or die("Problemas al conectar");
mysql_select_db($db,$con) or die("Problemas al conectar la bd");

mysql_query("INSERT INTO prueba_db (NOMBRE,PW) VALUES ('$_POST[nombre]','$_POST[pw]')",$con);
echo "Datos insertados";
}else{
	echo "Problemas al insertar datos";
}

 ?>


<!--$con ES LA VARIABLE DE CONEXION D ELA BASE DE DATOS-->