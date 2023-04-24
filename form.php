<?php
$nombre="";
if (!empty($_REQUEST['nombres'])){
$nombre=$_REQUEST['nombres'];
}
 
$fecha_nacimiento="";
if (!empty($_REQUEST['fecha_nacimiento'])){
$carrera=$_REQUEST['fecha_nacimiento'];
}
 
$ocupacion="";
if (!empty($_REQUEST['ocupacion'])){
$materia=$_REQUEST['ocupacion'];
}

$ocupacion="";
if (!empty($_REQUEST['ocupacion'])){
$materia=$_REQUEST['ocupacion'];
}
 
$ocupacion="";
if (!empty($_REQUEST['ocupacion'])){
$materia=$_REQUEST['ocupacion'];
}
 
 
//Luego sobrescribo el txt
 
$archivo="datos.txt";
 
     $file=fopen($archivo,"w");
     fwrite($file,$nombres,$fecha_nacimiento,$ocupacion);

?>