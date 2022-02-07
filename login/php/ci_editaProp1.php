<?php
include('conexion.php');

$id = $_POST['id'];

//OBTENEMOS LOS VALORES DEL PRODUCTO

$valores = mysqli_query($conexion,"SELECT * FROM propiedades AS pro LEFT JOIN propietario AS du ON pro.coddue=du.coddue WHERE pro.codpropi = '$id'");
$valores2 = mysqli_fetch_array($valores);

$datos = array(
				0 => $valores2['descrippro'], 
				1 => $valores2['zona'], 
				2 => $valores2['direccion'], 
				3 => $valores2['coddep'], 
				4 => $valores2['codpais'], 
				5 => $valores2['areatot'], 
				6 => $valores2['areaconstru'], 
				7 => $valores2['domirope'], 
				8 => $valores2['suite'], 
				9 => $valores2['banos'], 
				10 => $valores2['garaje'], 
				11 => $valores2['deposito'], 
				12 => $valores2['pisos'], 
				13 => $valores2['living'], 
				14 => $valores2['comedor'], 
				15 => $valores2['empleada'], 
				16 => $valores2['parrillero'], 
				17 => $valores2['piscina'], 
				18 => $valores2['luz'], 
				19 => $valores2['agua'], 
				20 => $valores2['gas'], 
				21 => $valores2['cocina'], 
				22 => $valores2['jardin'], 
				23 => $valores2['calefon'], 
				24 => $valores2['mapa'], 
				25 => $valores2['fotoprop'], 
				26 => $valores2['precio'], 
				27 => $valores2['blkpro'], 
				28 => $valores2['codmone'], 
				29 => $valores2['codtra'], 
				30 => $valores2['codcla'], 
				31 => $valores2['coddue'], 
				32 => $valores2['cidue'], 
				33 => $valores2['fechavence'], 
				34 => $valores2['observpropi'], 
				35 => $valores2['tratohecho'], 
				36 => $valores2['nvisitas'], 
				37 => $valores2['destaca'], 
				38 => $valores2['nconsulta'], 
				39 => $valores2['nombredue'], 
				40 => $valores2['celdue'], 
				41 => $valores2['emaildue'], 

				);
echo json_encode($datos);
?>