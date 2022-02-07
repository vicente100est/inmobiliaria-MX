
<?php
if (!isset($_SESSION)) {session_start();}
//$nombre_u=$_SESSION['nomb_usu'];
//$fotito=$_SESSION['fotousu'];
//$nombresuc=$_SESSION['nomb_suc'];

require_once 'Config/conexion.php';
require_once 'login/Model/Producto.php';

$objProducto = new Producto();
$depto = $objProducto->getDepto();
$pais = $objProducto->getPais();
$clax = $objProducto->getClase();
$tranx = $objProducto->getTransaccion();


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Tu Techo</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>


    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/mediaelementplayer.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/fl-bigmug-line.css">
    
  
    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    <script src="login/js/myjavaMobil3.js"></script>
  </head>
  <body>
  
  <div class="site-loader"></div>
    
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->

   
    <div class="site-navbar mt-4">
        <div class="container py-1">
          <div class="row align-items-center">
            <div class="col-8 col-md-8 col-lg-4">
              <h1 class="mb-0"><a href="index.php" class="text-white h3 mb-0"><strong>TU TECHO<span class="text-danger">.</span></strong></a></h1>
            </div>
            <div class="col-4 col-md-4 col-lg-8">
              <nav class="site-navigation text-right text-md-right" role="navigation">

                <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

                <ul class="site-menu js-clone-nav d-none d-lg-block">
                  <li class="active">
                    <a href="index.php">Inicio</a>
                  </li>
                  
                  <li class="has-children">
                    <a href="#">SERVICIOS</a>
                    <ul class="dropdown arrow-top">
                      <li><a href="registraAviso.php">Registre su Aviso</a></li>
                      <li><a href="citas.php">Reserve una Cita</a></li>
                      <li><a href="buscar.php">Buscar Avisos</a></li>
                      <li><a href="pagados.php">Avisos Pagados</a></li>

                    </ul>
                  </li>
                  <li >
                    <a href="acerca.php">Acerca de</a>
                  </li>
                 

                  <li><a href="contacto.php">Contacto</a></li>

				 <li ><a href="login/acceso.php">Administrador</a></li>

                </ul>
              </nav>
            </div>
           

          </div>
        </div>
      </div>
      
          
    
    
    </div>

    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/agente3.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">
          <div class="col-md-12">
            <h1 class="mb-2">Registro de Avisos</h1>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row">
          
          <div class="col-md-9 col-lg-9 mb-4" data-aos="fade-up" data-aos-delay="200">
            <div class="p-4 bg-white">
             <!-- <span class="d-block text-secondary small text-uppercase">Jan 20th, 2019</span>-->
              <h2 class="h5 text-black mb-3"><a href="#">REGISTRANDO SU AVISO</a></h2>
              <p>Estimado cliente registre su AVISO de Venta, Anticretico, Alquiler GRATUITAMENTE en este formulario mediante nuestra  
              pagina promocionaremos el mismo a diferentes departamentos, provincias a nivel nacional e internacional, registre sus datos
              con informacion real, el mismo estara sujeta a aprobacion del administrador.</p>
            </div>
            
              	
                
                
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
                

<form id="formulario1" class="credit-card-div" onsubmit="return agregaRegiss();">
<div class="panel panel-default" >
 	<div class="panel-heading">
<input type="hidden"  class="form-control input-sm" id="pro" name="pro" value="Registro" />
     <div class="row">
              	<div class="col-md-6 apagar">
                  <span class="help-block text-muted small-font" >Titulo del Aviso:</span>
                  <input type="text"  class="form-control input-sm" id="descri" name="descri" required  placeholder="Tutulo del Aviso" />
              	</div>
              	<div class="col-md-6 apagar">
                  <span class="help-block text-muted small-font" >Zona:</span>
                  <input type="text"  class="form-control input-sm" id="zon" name="zon" required  placeholder="Zona" />
              	</div>
	 </div>
    
     <div class="row">
              	<div class="col-md-12 apagar">
                  <span class="help-block text-muted small-font" >Direccion:</span>
                  <input type="text"  class="form-control input-sm" id="dire" name="dire" required  placeholder="Direccion" />
              	</div>
	 </div>

     <div class="row">
          		<div class="col-md-4">
                  <span class="help-block text-muted small-font" >  Total m2:</span>
                  <input type="text" class="form-control input-sm" id="tm2" name="tm2" required placeholder="Total m2" />
              	</div>
          		<div class="col-md-4">
                  <span class="help-block text-muted small-font" >Construido m2:</span>
                  <input type="text" class="form-control input-sm" id="com2" name="com2" required placeholder="Contruido m2" />
              	</div>

              	<div class="col-md-4">
                  <span class="help-block text-muted small-font" > Precio $us:</span>
                  <input type="text" class="form-control input-sm" id="pre" name="pre" placeholder="Precio en $us" />
              	</div>
      </div>

     <div class="row">
          		<div class="col-md-4">
                  <span class="help-block text-muted small-font" >  Nombre del Propietario:</span>
                  <input type="text" class="form-control input-sm" id="dueno" name="dueno" required placeholder="Nombre Propietario" />
              	</div>
          		<div class="col-md-4">
                  <span class="help-block text-muted small-font" >  No de Carnet:</span>
                  <input type="text" class="form-control input-sm" id="ci" name="ci" required placeholder="No Carnet" />
              	</div>
                
          		<div class="col-md-4">
                  <span class="help-block text-muted small-font" >  Cel/Telf:</span>
                  <input type="text" class="form-control input-sm" id="cel" name="cel" required placeholder="Telefono o Celular" />
              	</div>

      </div>

     <div class="row">
              	<div class="col-md-4">
                  <span class="help-block text-muted small-font" > Correo Electronico:</span>
                  <input type="text" class="form-control input-sm" id="correo" name="correo" placeholder="Correo Electronico" />
              	</div>
                
          		<div class="col-md-4">
                  <span class="help-block text-muted small-font" >  Baños:</span>
                  <input type="number" class="form-control input-sm" id="bano" name="bano" required placeholder="No Baños" />
              	</div>

              	<div class="col-md-4">
                  <span class="help-block text-muted small-font" > Pisos:</span>
                  <input type="number" class="form-control input-sm" id="npiso" name="npiso" placeholder="No Pisos" />
              	</div>
      </div>

     <div class="row">
                
         		<div class="col-md-4">
                  <span class="help-block text-muted small-font" > Agua:</span>
                	<input type="radio"  name="agua" CHECKED id="ag1" value="SI">SI
					<input type="radio"  name="agua" id="ag2" value="NO"> NO

              	</div>

         		<div class="col-md-4">
                  <span class="help-block text-muted small-font" > Luz:</span>
                	<input type="radio"  name="luz" CHECKED id="lu1" value="SI">SI
					<input type="radio"  name="luz" id="lu2" value="NO"> NO
              	</div>

         		<div class="col-md-4">
                  <span class="help-block text-muted small-font" > Gas:</span>
                	<input type="radio"  name="gas" CHECKED id="ga1" value="SI">SI
					<input type="radio"  name="gas" id="ga2" value="NO"> NO

              	</div>

      </div>

         
     <div class="row">
                
         		<div class="col-md-4">
                  <span class="help-block text-muted small-font" > Cocina:</span>
                	<input type="radio"  name="coci" CHECKED id="coc1" value="SI">SI
					<input type="radio"  name="coci" id="coc2" value="NO"> NO

              	</div>

         		<div class="col-md-4">
                  <span class="help-block text-muted small-font" > Garage:</span>
                	<input type="radio"  name="gara" CHECKED id="gga1" value="SI">SI
					<input type="radio"  name="gara" id="gga2" value="NO"> NO
              	</div>

         		<div class="col-md-4">
                  <span class="help-block text-muted small-font" > Comedor:</span>
                	<input type="radio"  name="come" CHECKED id="com1" value="SI">SI
					<input type="radio"  name="come" id="com2" value="NO"> NO

              	</div>

      </div>

    <div class="row">
                
         		<div class="col-md-4">
                  <span class="help-block text-muted small-font" > living:</span>
                	<input type="radio"  name="livin" CHECKED id="liv1" value="SI">SI
					<input type="radio"  name="livin" id="liv2" value="NO"> NO

              	</div>

         		<div class="col-md-4">
                  <span class="help-block text-muted small-font" > Parrillero:</span>
                	<input type="radio"  name="parri" CHECKED id="prr1" value="SI">SI
					<input type="radio"  name="parri" id="prr2" value="NO"> NO
              	</div>

         		<div class="col-md-4">
                  <span class="help-block text-muted small-font" > Piscina:</span>
                	<input type="radio"  name="pisi" CHECKED id="pis1" value="SI">SI
					<input type="radio"  name="pisi" id="pis2" value="NO"> NO

              	</div>

      </div>            

    <div class="row">
                
         		<div class="col-md-4">
                  <span class="help-block text-muted small-font" > Jardin:</span>
                	<input type="radio"  name="jardi" CHECKED id="jar1" value="SI">SI
					<input type="radio"  name="jardi" id="jar22" value="NO"> NO

              	</div>

         		<div class="col-md-4">
                  <span class="help-block text-muted small-font" > Deposito:</span>
                	<input type="radio"  name="depo" CHECKED id="dp1" value="SI">SI
					<input type="radio"  name="depo" id="dp2" value="NO"> NO
              	</div>

         		<div class="col-md-4">
                  <span class="help-block text-muted small-font" > Calefon:</span>
                	<input type="radio"  name="calefo" CHECKED id="cal1" value="SI">SI
					<input type="radio"  name="calefo" id="cal2" value="NO"> NO

              	</div>

      </div>            

    <div class="row">

                <div class="col-md-4">
                <span class="help-block text-muted small-font" > Pais:</span>
                 <div class="col-xs-5">
                <select name="copais" id="copais" class="form-control" >
                 <option value="0">Ninguno</option>
                    <?php foreach($pais as $dato2):?>
                <option value="<?php echo $dato2['codpais']?>"><?php echo $dato2['descrippais']?></option>
                    <?php endforeach;?>
                    </select>
                </div>
                </div>

                
                <div class="col-md-4">
                <span class="help-block text-muted small-font" > Departamento:</span>
                 <div class="col-xs-5">
                <select name="codep" id="codep" class="form-control" >
                 <option value="0">Ninguno</option>
                    <?php foreach($depto as $dato1):?>
                <option value="<?php echo $dato1['coddep']?>"><?php echo $dato1['descripdepto']?></option>
                    <?php endforeach;?>
                    </select>
                </div>
                </div>
      </div>           

<div class="row">

                <div class="col-md-4">
                <span class="help-block text-muted small-font" > Clase:</span>
                 <div class="col-xs-5">
                		<select name="codclax" id="codclax" class="form-control" >
                 		<option value="0">Ninguno</option>
                    	<?php foreach($clax as $dato3):?>
                		<option value="<?php echo $dato3['codcla']?>"><?php echo $dato3['descripcla']?></option>
                    	<?php endforeach;?>
                    	</select>
                </div>
                </div>

                
                <div class="col-md-4">
                <span class="help-block text-muted small-font" > Transaccion:</span>
                 <div class="col-xs-5">
                		<select name="codtrax" id="codtrax" class="form-control" >
                 		<option value="0">Ninguno</option>
                    	<?php foreach($tranx as $dato5):?>
                		<option value="<?php echo $dato5['codtra']?>"><?php echo $dato5['descriptra']?></option>
                    	<?php endforeach;?>
                    	</select>
                </div>
                </div>




      </div>
 

<hr>


             <div class="row ">
          		<div class="col-md-3">
                 <span class="help-block text-muted small-font" >.</span>
                 <input type="submit" value="Enviar" class="btn btn-success" id="reg"/>
              	</div>

     		</div>


	</div>
</div>
</form>

<div id="mensaje"></div>

              
                
            </div>
        </div>
    </div>
</div>                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
          </div>
          

        </div>
      </div>
    </div>



<footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="mb-5">
              <h3 class="footer-heading mb-4">Acerca de TU TECHO</h3>
              <p>Somos una Empresa con una vision emprendedora que desea lograr una efectiva interaccion con el cliente a través de nuestra pagina WEB</p>
            </div>


            
          </div>
          <div class="col-lg-4 mb-5 mb-lg-0">
            <div class="row mb-5">
              <div class="col-md-12">
                <h3 class="footer-heading mb-4">Menu de Navegacion</h3>
              </div>
              <div class="col-md-6 col-lg-6">
                <ul class="list-unstyled">
                  <li><a href="index.php">Inicio</a></li>
                  <li><a href="registraAviso.php">Registre su Aviso</a></li>
                  <li><a href="citas.php">Reserve una Cita</a></li>
                  <li><a href="buscar.php">Buscar Avisos</a></li>
                </ul>
              </div>
              <div class="col-md-6 col-lg-6">
                <ul class="list-unstyled">
                  <li><a href="acerca.php">Acerca de</a></li>
                  <li><a href="contacto.php">Contacto</a></li>
                  <li><a href="login/acceso.php">Administrador</a></li>
                </ul>
              </div>
            </div>


          </div>

          <div class="col-lg-4 mb-5 mb-lg-0">
            <h3 class="footer-heading mb-4">Siguenos por</h3>

                <div>
                  <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                  <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                  <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                  <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
                </div>

            

          </div>
          
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> Derechos Reservados ></a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
          
        </div>
      </div>
    </footer>


    
    

  </div>

  
  
  
  
  
  
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/mediaelement-and-player.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>
    
  </body>
</html>