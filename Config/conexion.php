<?php
global $cnx;
$manejador="mysql";
$servidor="localhost";
$usuario="root";
$pass="";
$base="bdinmobiliaria";
$cadena="$manejador:host=$servidor;dbname=$base";
$cnx = new PDO($cadena,$usuario,$pass);
?>
