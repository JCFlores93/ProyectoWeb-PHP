<?php 
$servidor = "localhost";
$usuario = "root";
$clave = "root";
$base_de_datos = "base_de_datos";

mysql_connect($servidor, $usuario, $clave) or die(mysql_error()) ;
mysql_select_db($base_de_datos) or die(mysql_error()) ;

?>