-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 24-04-2020 a las 17:20:02
-- Versión del servidor: 5.7.26
-- Versión de PHP: 7.0.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdinmobiliaria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cambios`
--

DROP TABLE IF EXISTS `cambios`;
CREATE TABLE IF NOT EXISTS `cambios` (
  `codtc` int(10) NOT NULL AUTO_INCREMENT,
  `fechatc` date NOT NULL,
  `tcambio` double(10,2) NOT NULL,
  PRIMARY KEY (`codtc`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas`
--

DROP TABLE IF EXISTS `citas`;
CREATE TABLE IF NOT EXISTS `citas` (
  `codcit` int(10) NOT NULL AUTO_INCREMENT,
  `fecharecep` date NOT NULL,
  `horarecep` char(8) NOT NULL,
  `fechacita` date NOT NULL,
  `horacita` char(8) NOT NULL,
  `codcli` int(10) NOT NULL,
  `id_usu` int(10) NOT NULL,
  `celularcita` varchar(20) NOT NULL,
  `nombrecita` varchar(80) NOT NULL,
  `emailcita` varchar(100) NOT NULL,
  `observcita` varchar(300) NOT NULL,
  PRIMARY KEY (`codcit`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `citas`
--

INSERT INTO `citas` (`codcit`, `fecharecep`, `horarecep`, `fechacita`, `horacita`, `codcli`, `id_usu`, `celularcita`, `nombrecita`, `emailcita`, `observcita`) VALUES
(3, '2019-03-12', '19:43:14', '2019-03-30', '12:00', 0, 0, '72862342', 'MARCELO RENGEL ROJAS', 'ral@hotmail.com', 'por favor que sea puntual'),
(4, '2019-03-12', '19:44:43', '2019-03-24', '15:20', 0, 0, '77766269', 'MARCELO RENGEL ROJAS', 'raulwebnet@hotmail.com', 'se citara a esa hora'),
(5, '2019-03-14', '11:44:01', '2019-03-16', '15:20', 0, 0, '72862342', 'MARCELO RENGEL ROJAS', 'ral@hotmail.com', 'por favor sea puntual '),
(6, '2019-03-15', '15:12:49', '2019-03-19', '15:30', 0, 0, '77289887', 'RAUL RODRIGUEZ MENAR', 'raulwebnet@hotmail.com', 'POR FAVOR CONFIRME LA CITA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clase`
--

DROP TABLE IF EXISTS `clase`;
CREATE TABLE IF NOT EXISTS `clase` (
  `codcla` int(10) NOT NULL AUTO_INCREMENT,
  `descripcla` varchar(40) NOT NULL,
  PRIMARY KEY (`codcla`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clase`
--

INSERT INTO `clase` (`codcla`, `descripcla`) VALUES
(1, 'CASA'),
(2, 'DEPARTAMENTO'),
(3, 'HABITACION'),
(4, 'GARZONIER');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `codnu`
--

DROP TABLE IF EXISTS `codnu`;
CREATE TABLE IF NOT EXISTS `codnu` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nordencre` int(10) NOT NULL,
  `nordenrec` int(10) NOT NULL,
  `nordenaux` int(10) NOT NULL,
  `nordenped` int(10) NOT NULL,
  `fechaactual` date NOT NULL,
  `tcambioo` double(10,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `codnu`
--

INSERT INTO `codnu` (`id`, `nordencre`, `nordenrec`, `nordenaux`, `nordenped`, `fechaactual`, `tcambioo`) VALUES
(1, 0, 12, 0, 0, '2018-01-01', 6.97);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

DROP TABLE IF EXISTS `departamento`;
CREATE TABLE IF NOT EXISTS `departamento` (
  `coddep` int(10) NOT NULL AUTO_INCREMENT,
  `descripdepto` varchar(15) NOT NULL,
  PRIMARY KEY (`coddep`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `departamento`
--

INSERT INTO `departamento` (`coddep`, `descripdepto`) VALUES
(1, 'LA PAZ'),
(2, 'SANTA CRUZ'),
(3, 'COCHABAMBA'),
(4, 'ORURO'),
(5, 'POTOSI'),
(7, 'SUCRE'),
(8, 'TARIJA'),
(9, 'BENI'),
(10, 'PANDO'),
(11, 'EL ALTO'),
(12, 'OTRO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dosificacion`
--

DROP TABLE IF EXISTS `dosificacion`;
CREATE TABLE IF NOT EXISTS `dosificacion` (
  `coddo` int(10) NOT NULL AUTO_INCREMENT,
  `codsuc` int(10) NOT NULL,
  `codtisuc` int(10) NOT NULL,
  `facdel` int(10) NOT NULL,
  `facal` int(10) NOT NULL,
  `facactual` int(10) NOT NULL,
  `nautorizacion` char(20) NOT NULL,
  `nit` char(30) NOT NULL,
  `llave` varchar(200) NOT NULL,
  `fechalim` date NOT NULL,
  `leyenda` varchar(300) NOT NULL,
  `cdfac` char(2) NOT NULL,
  PRIMARY KEY (`coddo`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `dosificacion`
--

INSERT INTO `dosificacion` (`coddo`, `codsuc`, `codtisuc`, `facdel`, `facal`, `facactual`, `nautorizacion`, `nit`, `llave`, `fechalim`, `leyenda`, `cdfac`) VALUES
(6, 1, 0, 0, 0, 14, '666666666666', '66666666788666', '%64$Â·2()/yUh45PpIO9((9046*op0))%$Â·3323%&', '2018-06-22', 'leyenda 2', 'X'),
(13, 2, 0, 0, 0, 3, '455566555', '67676767676', 'hfghrfgf&%$Â·))HYY/&&%$54GF5%/(()J)))', '2018-06-23', 'Leyenda 1', 'X');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenpropie`
--

DROP TABLE IF EXISTS `imagenpropie`;
CREATE TABLE IF NOT EXISTS `imagenpropie` (
  `codima` int(10) NOT NULL AUTO_INCREMENT,
  `codpropi` int(10) NOT NULL,
  `fotoima` varchar(100) NOT NULL,
  `blkima` char(2) NOT NULL,
  PRIMARY KEY (`codima`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `moneda`
--

DROP TABLE IF EXISTS `moneda`;
CREATE TABLE IF NOT EXISTS `moneda` (
  `codmone` int(10) NOT NULL AUTO_INCREMENT,
  `descripmone` varchar(30) NOT NULL,
  `tcambio` double(10,2) NOT NULL,
  PRIMARY KEY (`codmone`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ofertas`
--

DROP TABLE IF EXISTS `ofertas`;
CREATE TABLE IF NOT EXISTS `ofertas` (
  `codofe` int(10) NOT NULL AUTO_INCREMENT,
  `codpropi` int(10) NOT NULL,
  `fechaofe` date NOT NULL,
  `importeofe` double(10,2) NOT NULL,
  `codmone` int(10) NOT NULL,
  `clienteofe` varchar(80) NOT NULL,
  `celuofe` varchar(20) NOT NULL,
  `emailofe` varchar(100) NOT NULL,
  `ciofe` varchar(20) NOT NULL,
  `observofe` varchar(300) NOT NULL,
  PRIMARY KEY (`codofe`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pais`
--

DROP TABLE IF EXISTS `pais`;
CREATE TABLE IF NOT EXISTS `pais` (
  `codpais` int(10) NOT NULL AUTO_INCREMENT,
  `descrippais` varchar(30) NOT NULL,
  PRIMARY KEY (`codpais`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pais`
--

INSERT INTO `pais` (`codpais`, `descrippais`) VALUES
(1, 'BOLIVIA'),
(2, 'PERU'),
(3, 'ARGENTINA'),
(4, 'CHILE');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal`
--

DROP TABLE IF EXISTS `personal`;
CREATE TABLE IF NOT EXISTS `personal` (
  `id_per` int(10) NOT NULL AUTO_INCREMENT,
  `nombreper` varchar(70) NOT NULL,
  `emailper` varchar(100) NOT NULL,
  `celper` varchar(50) NOT NULL,
  `direccper` varchar(150) NOT NULL,
  `observper` varchar(300) NOT NULL,
  `fotoper` varchar(100) NOT NULL,
  `ciper` varchar(30) NOT NULL,
  `qrfotoper` varchar(300) NOT NULL,
  `coddep` int(10) NOT NULL,
  `codcar` int(10) NOT NULL,
  PRIMARY KEY (`id_per`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `personal`
--

INSERT INTO `personal` (`id_per`, `nombreper`, `emailper`, `celper`, `direccper`, `observper`, `fotoper`, `ciper`, `qrfotoper`, `coddep`, `codcar`) VALUES
(16, 'RICARDO RAMIREZ', 'oscarlp92@hotmail.com', '77289887', 'Calle Independencia #266', '', '../fotos/2019-03-1516-58-11.jpg', '6764500', '', 0, 0),
(31, 'JUAN PEREZ', 'juna@hotmail.com', '719867676767', 'AVENIDA CAMACHO #34', '', 'login/fotos/ra.jpg', '557575757', '', 0, 0),
(32, 'PEDRO SUAREZ', 'vill@hotmail.com', '71087867878', 'AVENIDA VILLAZON', '', 'login/fotos/img_2.jpg', '23232', '', 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `propiedades`
--

DROP TABLE IF EXISTS `propiedades`;
CREATE TABLE IF NOT EXISTS `propiedades` (
  `codpropi` int(10) NOT NULL AUTO_INCREMENT,
  `codigopro` varchar(20) NOT NULL,
  `descrippro` varchar(50) NOT NULL,
  `zona` varchar(50) NOT NULL,
  `direccion` varchar(150) NOT NULL,
  `coddep` int(10) NOT NULL,
  `codpais` int(10) NOT NULL,
  `areatot` varchar(15) NOT NULL,
  `areaconstru` varchar(15) NOT NULL,
  `dormirope` char(2) NOT NULL,
  `suite` char(2) NOT NULL,
  `banos` int(5) NOT NULL,
  `garaje` char(2) NOT NULL,
  `deposito` char(2) NOT NULL,
  `pisos` int(3) NOT NULL,
  `living` char(2) NOT NULL,
  `comedor` char(2) NOT NULL,
  `empleada` char(2) NOT NULL,
  `parrillero` char(2) NOT NULL,
  `piscina` char(2) NOT NULL,
  `luz` char(2) NOT NULL,
  `agua` char(2) NOT NULL,
  `gas` char(2) NOT NULL,
  `cocina` char(2) NOT NULL,
  `jardin` char(2) NOT NULL,
  `calefon` char(2) NOT NULL,
  `mapa` varchar(100) NOT NULL,
  `fotoprop` varchar(100) NOT NULL,
  `fotoprop2` varchar(100) NOT NULL,
  `precio` double(10,2) NOT NULL,
  `blkpro` char(2) NOT NULL,
  `codmone` int(10) NOT NULL,
  `codtra` int(10) NOT NULL,
  `codcla` int(10) NOT NULL,
  `coddue` int(10) NOT NULL,
  `cidue` varchar(30) NOT NULL,
  `fechavence` date NOT NULL,
  `observpropi` varchar(300) NOT NULL,
  `tratohecho` char(2) NOT NULL,
  `nvisitas` int(5) NOT NULL,
  `destaca` int(5) NOT NULL,
  `nconsulta` int(10) NOT NULL,
  PRIMARY KEY (`codpropi`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `propiedades`
--

INSERT INTO `propiedades` (`codpropi`, `codigopro`, `descrippro`, `zona`, `direccion`, `coddep`, `codpais`, `areatot`, `areaconstru`, `dormirope`, `suite`, `banos`, `garaje`, `deposito`, `pisos`, `living`, `comedor`, `empleada`, `parrillero`, `piscina`, `luz`, `agua`, `gas`, `cocina`, `jardin`, `calefon`, `mapa`, `fotoprop`, `fotoprop2`, `precio`, `blkpro`, `codmone`, `codtra`, `codcla`, `coddue`, `cidue`, `fechavence`, `observpropi`, `tratohecho`, `nvisitas`, `destaca`, `nconsulta`) VALUES
(1, 'SLL-244', 'CASA EN VENTA', 'GRAN PODER 5', 'AVENIDA CAMACHO #34', 1, 1, '500 m2', '180 m2', 'SI', 'NO', 3, 'SI', 'SI', 3, 'SI', 'SI', 'NO', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', '', '../fotos/2019-03-1511-36-49.jpg', 'login/fotos/2019-03-1511-36-49.jpg', 50000.00, '', 1, 2, 2, 1, '', '2019-02-15', 'SIN HIPOTECA', 'NO', 5, 10, 7),
(2, '', 'CASA EN ANTICRETICO', '16 DE JULIO', 'CALLE VICENTE OCHO 789', 2, 1, '300 M2', '200 M2', 'SI', 'SI', 2, 'SI', 'SI', 3, 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'NO', 'SI', 'NO', 'SI', 'SI', '', '../fotos/2019-03-1516-46-55.jpg', 'login/fotos/2019-03-1516-46-55.jpg', 50000.00, '', 1, 2, 1, 1, '', '2019-02-20', 'NO HIPOTEC', 'NO', 50, 3, 8),
(3, '', 'CASA EN ALQUILER', 'SAN SEBASTIAN', 'AVENIDA SAN JORGE No 45', 2, 1, '100 M2', '50 M2', 'SI', 'SI', 2, 'NO', 'SI', 2, 'SI', 'SI', 'NO', 'SI', 'NO', 'SI', 'SI', 'SI', 'NO', 'SI', 'SI', '', '../fotos/2019-03-1511-18-52.jpg', 'login/fotos/2019-03-1511-18-52.jpg', 35000.00, '', 1, 1, 1, 1, '', '2019-03-05', 'CC', '', 1, 5, 1),
(4, '', 'CASA EN CONSTRUCCION', 'CHALLAPAMPA', 'CALLE MUJI Y BENACIO BURGO 890', 2, 1, '100 M2', '50 M2', 'SI', 'SI', 0, 'NO', 'SI', 2, 'SI', 'SI', 'NO', 'SI', 'NO', 'SI', 'SI', 'SI', 'NO', 'SI', 'SI', '', '../fotos/2019-03-1516-47-13.jpg', 'login/fotos/2019-03-1516-47-13.jpg', 230000.00, '', 0, 2, 1, 1, '', '2019-03-21', 'NADA', '', 0, 1, 1),
(8, '', 'HERMOSA CASA ZONA SUR', 'NORTE CENTRAL ANILLO 9', 'CALLE ICHILO 78 ROJS', 1, 1, '500 m2', '180 m2', '', '', 1, 'SI', 'SI', 2, 'NO', 'SI', '', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'NO', 'SI', '', '../fotos/2019-03-1519-16-46.jpg', 'login/fotos/2019-03-1519-16-46.jpg', 150000.00, '', 0, 1, 1, 1, '', '0000-00-00', '', '', 0, 0, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `propietario`
--

DROP TABLE IF EXISTS `propietario`;
CREATE TABLE IF NOT EXISTS `propietario` (
  `coddue` int(10) NOT NULL AUTO_INCREMENT,
  `nombredue` varchar(70) NOT NULL,
  `emaildue` varchar(100) NOT NULL,
  `celdue` varchar(50) NOT NULL,
  `direccdue` varchar(150) NOT NULL,
  `observdue` varchar(300) NOT NULL,
  `fotodue` varchar(100) NOT NULL,
  `cidue` varchar(30) NOT NULL,
  `qrfotoper` varchar(300) NOT NULL,
  PRIMARY KEY (`coddue`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `propietario`
--

INSERT INTO `propietario` (`coddue`, `nombredue`, `emaildue`, `celdue`, `direccdue`, `observdue`, `fotodue`, `cidue`, `qrfotoper`) VALUES
(1, 'RICARDO RAMIREZ  SOTOMAYOR', 'oscarIN@hotmail.com', '77766269', 'CALLE ICHILO 78 ROJS', '', '../fotos/2018-09-0101-14-30.jpg', '3071525', ''),
(31, 'JUAN PEREZ', 'juna@hotmail.com', '719867676767', 'AVENIDA CAMACHO #34', '', '../fotos/2018-10-2022-53-42.jpg', '557575757', ''),
(32, 'PEDRO SUAREZ', 'vill@hotmail.com', '71087867878', 'AVENIDA VILLAZON', '', '../fotos/2018-10-2022-54-03.jpg', '23232', ''),
(33, 'MARITE RODRIGUEZ', 'mari@hotmail.com', '777777777', 'AVENIDA VILLAZON', '', '', '1111112222', ''),
(34, 'jUAN VALDEZ', 'oscarlp92@hotmail.com', '72862342', 'AVENIDA CAMACHO #34', '', '', '312455555', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitud`
--

DROP TABLE IF EXISTS `solicitud`;
CREATE TABLE IF NOT EXISTS `solicitud` (
  `codsol` int(10) NOT NULL AUTO_INCREMENT,
  `codigosol` varchar(20) NOT NULL,
  `fechasol` date NOT NULL,
  `nombresol` varchar(100) NOT NULL,
  `emailsol` varchar(100) NOT NULL,
  `celusol` varchar(20) NOT NULL,
  `cisol` varchar(15) NOT NULL,
  `codpropi` varchar(20) NOT NULL,
  `observsol` varchar(300) NOT NULL,
  `blksol` char(2) NOT NULL,
  `cancelo` char(3) NOT NULL,
  PRIMARY KEY (`codsol`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `solicitud`
--

INSERT INTO `solicitud` (`codsol`, `codigosol`, `fechasol`, `nombresol`, `emailsol`, `celusol`, `cisol`, `codpropi`, `observsol`, `blksol`, `cancelo`) VALUES
(12, '2019-03-1219-38-09', '2019-03-12', 'MARCELO RENGEL ROJAS', 'RRY@hotmail.com', '72862342', '', '2', 'asasa', '', 'NO'),
(13, '2019-03-1215-40-28', '2019-03-12', 'MARITE RODRIGUEZ', 'raulwebnet@hotmail.com', '77766269', '', '2', 'MUCHAS GRACIAS LE AGRADEZCO', '', 'NO'),
(14, '2019-03-1215-48-35', '2019-03-12', 'MARCELO RENGEL ROJAS', 'ral@hotmail.com', '72862342', '', '4', 'AASASAS', '', 'NO'),
(15, '2019-03-1411-44-57', '2019-03-14', 'RAUL RODRIGUEZ MENAR', 'raulwebnet@hotmail.com', '72862342', '', '1', 'necesito esa informacion para visitar', '', 'NO'),
(16, '2019-03-1510-39-04', '2019-03-15', 'MARCELO RENGEL ROJAS', 'raulwebnet@hotmail.com', '72862342', '', '13', 'me ineteresa la casa necesito detalles', '', 'NO'),
(17, '2019-03-1510-42-10', '2019-03-15', 'RAUL RODRIGUEZ MENAR', 'raulwebnet@hotmail.com', '77766269', '', '2', 'QUIERO EN ANTICRETICO', '', 'NO'),
(18, '2019-03-1511-37-04', '2019-03-15', 'SEBASTIAN LORA MENDEZ', 'raulwebnet@hotmail.com', '77766258', '', '1', 'REQUIERO INFORMACION GRACIAS', '', 'NO'),
(19, '2019-03-1514-43-53', '2019-03-15', 'JORGE PEREZ', 'raulwebnet@hotmail.com', '77289887', '', '13', 'DESEO CONOCER DATOS E INFORMACION', '', 'NO'),
(20, '2019-03-1515-09-53', '2019-03-15', 'MARCELO RENGEL ROJAS', 'raulwebnet@hotmail.com', '72862342', '', '14', 'DESEO VER EL INMUEBLE', '', 'NO'),
(21, '2019-03-1515-17-32', '2019-03-15', 'MARCELO RENGEL ROJAS', 'ral@hotmail.com', '72862342', '', '8', 'CC', '', 'NO'),
(22, '2019-03-1515-17-51', '2019-03-15', 'RAUL RODRIGUEZ MENAR', 'raulwebnet@hotmail.com', '77766269', '', '8', 'CCC', '', 'NO'),
(23, '2019-03-1515-18-59', '2019-03-15', 'RAUL RODRIGUEZ MENAR', 'ral@hotmail.com', '77289887', '', '2', 'SOLICITO URGENTE', '', 'NO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `transaccion`
--

DROP TABLE IF EXISTS `transaccion`;
CREATE TABLE IF NOT EXISTS `transaccion` (
  `codtra` int(10) NOT NULL AUTO_INCREMENT,
  `descriptra` varchar(35) NOT NULL,
  PRIMARY KEY (`codtra`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `transaccion`
--

INSERT INTO `transaccion` (`codtra`, `descriptra`) VALUES
(1, 'VENTA'),
(2, 'ANTICRETICO'),
(3, 'ALQUILER');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usu` int(10) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(20) NOT NULL,
  `nomb_usu` varchar(50) NOT NULL,
  `pass_usu` varchar(100) NOT NULL,
  `id_area` varchar(20) NOT NULL,
  `id_per` int(10) NOT NULL,
  `coddep` int(10) NOT NULL,
  `nombredepto` varchar(15) NOT NULL,
  `nomb_suc` varchar(60) NOT NULL,
  `codsuc` int(10) NOT NULL,
  `codtisuc` int(10) NOT NULL,
  `fotousu` varchar(100) NOT NULL,
  `qrfotousu` varchar(200) NOT NULL,
  `codcar` int(10) NOT NULL,
  `mnu_compras` int(5) NOT NULL,
  `mnu_ventas` int(5) NOT NULL,
  PRIMARY KEY (`id_usu`),
  KEY `id_area` (`id_area`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usu`, `usuario`, `nomb_usu`, `pass_usu`, `id_area`, `id_per`, `coddep`, `nombredepto`, `nomb_suc`, `codsuc`, `codtisuc`, `fotousu`, `qrfotousu`, `codcar`, `mnu_compras`, `mnu_ventas`) VALUES
(11, 'admin', 'RICARDO RAMIREZ', 'admin', 'admin', 16, 1, 'LA PAZ', 'ALMACEN CENTRAL', 1, 0, '../fotos/2019-03-1516-58-11.jpg', '', 0, 0, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
