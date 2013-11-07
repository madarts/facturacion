<?php

GLOBAL $conexion;

$conexion=mysql_connect('localhost','madson','madson') or die("Error: El servidor no puede conectar con la base de datos");
mysql_select_db('euskofactusyn',$conexion);

?>