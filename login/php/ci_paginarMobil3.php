<?php
if (!isset($_SESSION)) {session_start();}

	include('conexion.php');
	$paginaActual = $_POST['partida'];

    $nroProductos = mysqli_num_rows(mysqli_query($conexion,"SELECT * FROM propiedades AS pro LEFT JOIN transaccion AS
	 tr ON pro.codtra=tr.codtra LEFT JOIN departamento AS de ON pro.coddep=de.coddep LEFT JOIN
	  pais AS pa ON pro.codpais=pa.codpais WHERE pro.blkpro!='NO' "));
    $nroLotes = 2;
    $nroPaginas = ceil($nroProductos/$nroLotes);
    $lista = '';
    $tabla = '';
	if($paginaActual > 1){
        $lista = $lista.'<li><a href="javascript:pagination('.($paginaActual-1).');">Anterior</a></li>';
    }
    for($i=1; $i<=$nroPaginas; $i++){
        if($i == $paginaActual){
            $lista = $lista.'<li class="active"><a href="javascript:pagination('.$i.');">'.$i.'</a></li>';
        }else{
            $lista = $lista.'<li><a href="javascript:pagination('.$i.');">'.$i.'</a></li>';
        }
    }
    if($paginaActual < $nroPaginas){
        $lista = $lista.'<li><a href="javascript:pagination('.($paginaActual+1).');">Siguiente</a></li>';
    }
  
  	if($paginaActual <= 1){
  		$limit = 0;
  	}else{
  		$limit = $nroLotes*($paginaActual-1);
  	}

  	$registro = mysqli_query($conexion,"SELECT * FROM propiedades AS pro LEFT JOIN transaccion AS
	 tr ON pro.codtra=tr.codtra LEFT JOIN departamento AS de ON pro.coddep=de.coddep LEFT JOIN pais AS
	  pa ON pro.codpais=pa.codpais WHERE pro.blkpro!='NO' ORDER BY pro.destaca ASC  LIMIT $limit, $nroLotes ");

  	//$tabla = $tabla.'<table class="table table-condensed  ">';
		while($registro2 = mysqli_fetch_array($registro)){
		$tabla = $tabla.'<div class="row mb-4">
          <div class="col-md-12">
            <div class="property-entry horizontal d-lg-flex">

              <a href="javascript:mostrarfoto('.$registro2['codpropi'].');" class="property-thumbnail h-100">
                <div class="offer-type-wrap">
                  <span class="offer-type bg-danger">'.$registro2['descriptra'].'</span>
                  
                </div>
                
				
				<img src="'.$registro2['fotoprop2'].'" alt="Image" class="img-fluid">
              </a>

              <div class="p-4 property-body">
                <a href="#" class="property-favorite"><span class="icon-heart-o"></span></a>
                <h2 class="property-title"><a href="#">'.$registro2['descrippro'].'</a></h2>
                <span class="property-location d-block mb-3"><span class="property-icon icon-pencil"></span> '.$registro2['descripdepto'].'/'.$registro2['descrippais'].'</span>
                <strong class="property-price text-primary mb-3 d-block text-success">$us :'.number_format($registro2['precio'],0).'</strong>
                <p>Zona :'.$registro2['zona'].'</p>
                <ul class="property-specs-wrap mb-3 mb-lg-0">
                  <li>
				  <a href="javascript:solicitando('.$registro2['codpropi'].');" class="btn btn-warning" role="button">INFORMACION DETALLADA</a>
                  </li>
                  <li>
                    <span class="property-specs">Consultas</span>
                    <span class="property-specs-number">'.$registro2['nconsulta'].'</span>
                    
                  </li>
                  <li>
                    <span class="property-specs">Codigo:</span>
                    <span class="property-specs-number" align="center">'.$registro2['codpropi'].'</span>
                    
                  </li>

                  
                </ul>
              </div>
          </div>
        </div>

        
     
     
        
      </div>';		
	}
        

   // $tabla = $tabla.'</table>';



    $array = array(0 => $tabla,
    			   1 => $lista);

    echo json_encode($array);
?>
