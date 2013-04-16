<?php

	include('Conexion.php');


	$conectar=new Conexion("System","localhost","root","6374");

	$datos[0]=$_POST['Nombre'];
	$datos[1]=$_POST['mail'];
	$datos[2]=$_POST['empresa'];
	$datos[3]=$_POST['pass'];

 	$sql="INSERT INTO Propietario(Nombre,Correo,Empresa,Pass) VALUES('$datos[0]','$datos[1]','$datos[2]',MD5('$datos[3]'))";
	if($conectar->Query($sql))
		echo "<center><img src='imagenes/registro.jpg'><br>El registro se realiz&oacute; correctamente</center>";
	else
		echo"<center><img src='imagenes/registro2.jpg' width='100' heigth='100'><br>Ocurri&oacute; un error intentalo m&aacute;s tarde</center>";
?>