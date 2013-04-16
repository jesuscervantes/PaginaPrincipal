<?php



function Conectarse(){
$link = mysql_connect("localhost","gruporod_eljebus","eljebus1234");
if (!$link) {
die('No puede conectarse: '.mysql_error());
}
// Seleccionamos la base de datos que nos interesa

$dos=mysql_query('use gruporod_Grupo',$link) or die("Error seleccionando la base de datos.".mysql_error()); 


// Devolvemos $link porque nos hará falta más adelante, cuando queramos hacer consultas.

return $link;

}

?>