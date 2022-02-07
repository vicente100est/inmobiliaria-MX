<?php
class Producto
{
	function getClase(){
		$sql = "SELECT * FROM clase ";
		global $cnx;
		return $cnx->query($sql);
	}
	function getTransaccion(){
		$sql = "SELECT * FROM transaccion ";
		global $cnx;
		return $cnx->query($sql);
	}
	function getDepto(){
		$sql = "SELECT * FROM departamento ";
		global $cnx;
		return $cnx->query($sql);
	}

	function getPais(){
		$sql = "SELECT * FROM pais ";
		global $cnx;
		return $cnx->query($sql);
	}
	function getpersonasgral(){
		$sql = "SELECT * FROM personal ";
		global $cnx;
		return $cnx->query($sql);
	}


	function getVigente($id_usu){
		//$sql = "SELECT *  FROM vigente WHERE codsuc='$codsucx'  ";
		$sql = "SELECT * FROM codnumov WHERE id_usu='$id_usu' AND turno='SI' ";
		global $cnx;
		global $totalreg;
		$STH=$cnx->query($sql);
		return $STH->rowCount();
	}
	
	function getVigente2($id_usu){
		$sql = "SELECT * FROM codnumov WHERE id_usu='$id_usu' AND turno='SI' ";
		global $cnx;
		return $cnx->query($sql);
	}

	function getCodnumv($idusuu){
		$sql = "SELECT * FROM codnumov WHERE id_usu='$idusuu' AND turno='SI' ";
		global $cnx;
		return $cnx->query($sql);
	}
	function getarticulo(){
		$sql = "SELECT * FROM aarticulototal WHERE imprimio='NO' ";
		global $cnx;
		return $cnx->query($sql);
	}

	function getsni(){
		$sql = "SELECT * FROM sni";
		global $cnx;
		return $cnx->query($sql);
	}

	function getgrupocarta(){
		$sql = "SELECT * FROM grupoc";
		global $cnx;
		return $cnx->query($sql);
	}

	function getusuarios(){
		$sql = "SELECT * FROM usuarios ORDER BY nomb_usu ASC";
		global $cnx;
		return $cnx->query($sql);
	}	
	function getgrupo(){
		$sql = "SELECT * FROM grupo ORDER BY codg ASC";
		global $cnx;
		return $cnx->query($sql);
	}	
	function getprovee(){
		$sql = "SELECT * FROM proveedor ORDER BY codprov ASC";
		global $cnx;
		return $cnx->query($sql);
	}	


	
	function getreg(){
		$sql = "SELECT * FROM codnu";
		global $cnx;
		return $cnx->query($sql);
	}
	function getp(){
		$sql = "SELECT * FROM proveedor ORDER BY nombre ASC";
		global $cnx;
		return $cnx->query($sql);
	}
	
	function getmovim(){
		$sql = "SELECT * FROM movim";
		global $cnx;
		return $cnx->query($sql);
	}
	function getusu($usuarios){
		$sql = "SELECT * FROM usuarios WHERE usuario = '$usuarios'";
		global $cnx;
		return $cnx->query($sql);
	}

	function getcod($id_usu){
		$sql = "SELECT * FROM usuarios WHERE id_usu = '$id_usu'";
		global $cnx;
		return $cnx->query($sql);
	}

	function getturno(){ 
		$sql = "SELECT * FROM codnu";
		global $cnx;
		return $cnx->query($sql);
	}
	
	
	
	function get(){
		$sql = "SELECT * FROM productos ORDER BY nomb_prod ASC";
		global $cnx;
		return $cnx->query($sql);
	}


	
	function getUltimaVenta()
	{
		$sql = "SELECT LAST_INSERT_ID() as ultimo";
		global $cnx;
		return $cnx->query($sql);
	}
	
	function guardarDetalleVenta($idventa,$idproducto,$cantidad,$precio,$subtotal,$precio_dist,$id_prov){
		$sql = "INSERT INTO venta_detalle (idventa,idproducto,cantidad,precio,subtotal,tmov,precio_dist,id_prov) values ($idventa,$idproducto,$cantidad,'$precio','$subtotal','I','$precio_dist','$id_prov')";
		global $cnx;
		return $cnx->query($sql);
	}
	
		function incrementa_saldo($cantidad,$id){
		$sql = "UPDATE productos SET saldo=saldo+'$cantidad' WHERE id_prod='$id'";
		global $cnx;
		return $cnx->query($sql);
	}	
	

}
?>