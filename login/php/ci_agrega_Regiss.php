<?php
//include('conexion.php');
if (!isset($_SESSION)) {session_start();}
//$codsucss=$_SESSION['codsuc'];
//$id_usux=$_SESSION['id_usu'];
date_default_timezone_set('America/La_Paz');
include('../php/conexion.php');
//$proceso= $_POST['pro'];

$descri = $_POST['descri'];
$zon = $_POST['zon'];
$dire = $_POST['dire'];
$tm2 = $_POST['tm2'];
$com2 = $_POST['com2'];
$pre = $_POST['pre'];
$dueno = $_POST['dueno'];
$ci = $_POST['ci'];
$cel = $_POST['cel'];
$correo = $_POST['correo'];
$bano = $_POST['bano'];
$npiso = $_POST['npiso'];
$agua = $_POST['agua'];
$luz = $_POST['luz'];
$gas = $_POST['gas'];
$coci = $_POST['coci'];
$gara = $_POST['gara'];
$come = $_POST['come'];
$livin = $_POST['livin'];
$parri = $_POST['parri'];
$pisi = $_POST['pisi'];
$jardi = $_POST['jardi'];
$depo = $_POST['depo'];
$calefo = $_POST['calefo'];
$copais = $_POST['copais'];
$codep = $_POST['codep'];
$hax = $_POST['hax'];
$desta = $_POST['desta'];
$nvis = $_POST['nvis'];
$nconsul = $_POST['nconsul'];
$codcla = $_POST['codclax'];
$codtra = $_POST['codtrax'];
$codduex = $_POST['codduex'];



$fecha = date('Y-m-d');
//var_dump ($_POST);
//VERIFICAMOS EL PROCESO
//$fee= date("Y-m-d", strtotime($fepag) );

//switch($proceso){
//	case 'Registro':
		mysqli_query($conexion,"INSERT INTO propietario (nombredue,emaildue,celdue,direccdue,cidue)VALUES
		 ('$dueno','$correo','$cel','$dire','$ci')");

		$codduex=mysqli_insert_id($conexion); 

//		mysqli_query($conexion,"UPDATE propiedades SET descrippro ='$descri',zona ='$zon',direccion ='$dire',coddep ='$codep'
//		,codpais ='$copais',areatot ='$tm2',areaconstru ='$com2',banos ='$bano',garaje ='$gara',deposito ='$depo',
//		pisos ='$npiso',living ='$livin',comedor ='$come',parrillero ='$parri',piscina ='$pisi',luz ='$luz',
//		agua ='$agua',gas ='$gas',cocina ='$coci',jardin ='$jardi',calefon ='$calefo',
//		destaca ='$desta',nvisitas ='$nvis',nconsulta ='$nconsul',codcla='$codcla',codtra ='$codtra' WHERE codpropi = '$idarx'");



		mysqli_query($conexion,"INSERT INTO propiedades (descrippro,zona,direccion,precio,blkpro,coddep,codpais,areatot,areaconstru,
		banos,garaje,deposito,pisos,living,comedor,parrillero,piscina,luz,agua,gas,cocina,jardin,calefon,destaca,codcla,codtra,coddue)VALUES
		 ('$descri','$zon','$dire','$pre','NO','$codep','$copais','$tm2','$com2','$bano','$gara','$depo','$npiso','$livin',
		 '$come','$parri','$pisi','$luz','$agua','$gas','$coci','$jardi','$calefo','0','$codcla','$codtra','$codduex')");
		 
//echo '</table>';
?>