<?php
//if (!isset($_SESSION)) {session_start();}

//$conexion = mysql_connect('localhost', 'root', 'marite');
//mysql_select_db('bdalmacen', $conexion);

$conexion=mysqli_connect("localhost","root","","bdinmobiliaria") or die ("Error no Conecta". mysqli_error($conexion));
if (mysqli_connect_errno())
 {
  echo "Error de Conexion  MySQL: " . mysqli_connect_error();
  }



//function fechaNormal($fecha){
//		$nfecha = date('d/m/Y',strtotime($fecha));
//		return $nfecha;
//}

?>