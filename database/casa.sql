-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-09-2022 a las 00:29:01
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `casa`
--
CREATE DATABASE IF NOT EXISTS `casa` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `casa`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `arenacats`
--

DROP TABLE IF EXISTS `arenacats`;
CREATE TABLE IF NOT EXISTS `arenacats` (
  `idArenaCats` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT,
  `totalArena` double DEFAULT NULL,
  `cantidadArena` int(11) DEFAULT NULL,
  `fechaCompra` date DEFAULT NULL,
  `fechaTerminacion` date DEFAULT NULL,
  PRIMARY KEY (`idArenaCats`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `arenacats`
--

INSERT INTO `arenacats` (`idArenaCats`, `totalArena`, `cantidadArena`, `fechaCompra`, `fechaTerminacion`) VALUES
(0000000001, 23000, 6, '2022-07-27', '2022-08-26'),
(0000000002, 100000, 1, '2022-08-11', '2022-06-16');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

DROP TABLE IF EXISTS `categoria`;
CREATE TABLE IF NOT EXISTS `categoria` (
  `idCategoria` varchar(10) NOT NULL,
  `nombreCategoria` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idCategoria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`idCategoria`, `nombreCategoria`) VALUES
('Cat01', 'Aseo'),
('Cat02', 'Plaza'),
('Cat03', 'Tienda');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comidacats`
--

DROP TABLE IF EXISTS `comidacats`;
CREATE TABLE IF NOT EXISTS `comidacats` (
  `idComidaCats` int(11) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT,
  `valorComida` double DEFAULT NULL,
  `tipoComida` varchar(50) DEFAULT NULL,
  `cantidadComida` int(11) DEFAULT NULL,
  `fechaCompra` date DEFAULT NULL,
  `fechaTerminacion` date DEFAULT NULL,
  PRIMARY KEY (`idComidaCats`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `comidacats`
--

INSERT INTO `comidacats` (`idComidaCats`, `valorComida`, `tipoComida`, `cantidadComida`, `fechaCompra`, `fechaTerminacion`) VALUES
(00000000003, 10000, 'whiskas', 2, '2022-07-18', '2022-07-31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallecompra`
--

DROP TABLE IF EXISTS `detallecompra`;
CREATE TABLE IF NOT EXISTS `detallecompra` (
  `idDetalleCompra` int(11) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT,
  `idProducto` int(11) UNSIGNED ZEROFILL NOT NULL,
  `idCompra` int(11) UNSIGNED ZEROFILL NOT NULL,
  `cantidadProducto` int(11) DEFAULT NULL,
  `subtotal` double DEFAULT NULL,
  PRIMARY KEY (`idDetalleCompra`),
  KEY `idCompra` (`idCompra`),
  KEY `idProducto` (`idProducto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ejemplo`
--

DROP TABLE IF EXISTS `ejemplo`;
CREATE TABLE IF NOT EXISTS `ejemplo` (
  `numero` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT,
  `codigo` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`numero`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ejemplo`
--

INSERT INTO `ejemplo` (`numero`, `codigo`) VALUES
(0001, 'gdfg'),
(0002, 'cgfgd');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

DROP TABLE IF EXISTS `estado`;
CREATE TABLE IF NOT EXISTS `estado` (
  `idEstado` int(1) NOT NULL AUTO_INCREMENT,
  `estado` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idEstado`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`idEstado`, `estado`) VALUES
(1, 'No Pago'),
(2, 'Pagado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `listacompra`
--

DROP TABLE IF EXISTS `listacompra`;
CREATE TABLE IF NOT EXISTS `listacompra` (
  `idCompra` int(11) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT,
  `totalCompra` double DEFAULT NULL,
  `fechaCompra` date DEFAULT NULL,
  `estado` int(1) NOT NULL,
  PRIMARY KEY (`idCompra`),
  KEY `estado` (`estado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `presentacion`
--

DROP TABLE IF EXISTS `presentacion`;
CREATE TABLE IF NOT EXISTS `presentacion` (
  `idPresentacion` varchar(10) NOT NULL,
  `nombrePresentacion` varchar(50) DEFAULT NULL,
  `siglaPresentacion` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idPresentacion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `presentacion`
--

INSERT INTO `presentacion` (`idPresentacion`, `nombrePresentacion`, `siglaPresentacion`) VALUES
('Pre01', 'Kilo', 'Kg'),
('Pre02', 'Libra', 'Lb'),
('Pre03', 'Unidad(es)', 'Unid');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prioridad`
--

DROP TABLE IF EXISTS `prioridad`;
CREATE TABLE IF NOT EXISTS `prioridad` (
  `idPrioridad` varchar(10) NOT NULL,
  `nombrePrioridad` varchar(50) NOT NULL,
  PRIMARY KEY (`idPrioridad`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `prioridad`
--

INSERT INTO `prioridad` (`idPrioridad`, `nombrePrioridad`) VALUES
('Pri01', 'Alta'),
('Pri02', 'Media'),
('Pri03', 'Baja'),
('Pri04', 'Opcional');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

DROP TABLE IF EXISTS `producto`;
CREATE TABLE IF NOT EXISTS `producto` (
  `idProducto` int(11) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT,
  `nombreProducto` varchar(50) DEFAULT NULL,
  `descripcionProducto` varchar(50) DEFAULT NULL,
  `marca` varchar(50) DEFAULT NULL,
  `lugarDeCompra` varchar(50) DEFAULT NULL,
  `fechaVencimiento` date DEFAULT NULL,
  `idPresentacion` varchar(10) NOT NULL,
  `stock` int(11) DEFAULT NULL,
  `idCategoria` varchar(10) NOT NULL,
  `idPrioridad` varchar(10) NOT NULL,
  `precio` double DEFAULT NULL,
  `estado` int(1) DEFAULT NULL,
  PRIMARY KEY (`idProducto`),
  KEY `idPresentacion` (`idPresentacion`),
  KEY `idPrioridad` (`idPrioridad`),
  KEY `idCategoria` (`idCategoria`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`idProducto`, `nombreProducto`, `descripcionProducto`, `marca`, `lugarDeCompra`, `fechaVencimiento`, `idPresentacion`, `stock`, `idCategoria`, `idPrioridad`, `precio`, `estado`) VALUES
(00000000002, 'Papas', 'de año', 'granel', 'nu c', '2022-09-28', 'Pre02', 2, 'Cat02', 'Pri01', 2000, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recibo`
--

DROP TABLE IF EXISTS `recibo`;
CREATE TABLE IF NOT EXISTS `recibo` (
  `idRecibo` int(11) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT,
  `valorRecibo` double DEFAULT NULL,
  `idServicio` int(11) NOT NULL,
  `consumo` double DEFAULT NULL,
  `fechaPago` date DEFAULT NULL,
  `estado` int(1) DEFAULT NULL,
  PRIMARY KEY (`idRecibo`),
  KEY `idServicio` (`idServicio`),
  KEY `estado` (`estado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

DROP TABLE IF EXISTS `servicios`;
CREATE TABLE IF NOT EXISTS `servicios` (
  `idServicio` int(11) NOT NULL AUTO_INCREMENT,
  `tipoServicio` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idServicio`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`idServicio`, `tipoServicio`) VALUES
(1, 'Agua'),
(2, 'Electricidad'),
(3, 'Gas'),
(4, 'Internet');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detallecompra`
--
ALTER TABLE `detallecompra`
  ADD CONSTRAINT `detallecompra_ibfk_1` FOREIGN KEY (`idCompra`) REFERENCES `listacompra` (`idCompra`);

--
-- Filtros para la tabla `listacompra`
--
ALTER TABLE `listacompra`
  ADD CONSTRAINT `listacompra_ibfk_1` FOREIGN KEY (`estado`) REFERENCES `estado` (`idEstado`);

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`idPresentacion`) REFERENCES `presentacion` (`idPresentacion`),
  ADD CONSTRAINT `producto_ibfk_2` FOREIGN KEY (`idPrioridad`) REFERENCES `prioridad` (`idPrioridad`),
  ADD CONSTRAINT `producto_ibfk_3` FOREIGN KEY (`idCategoria`) REFERENCES `categoria` (`idCategoria`);

--
-- Filtros para la tabla `recibo`
--
ALTER TABLE `recibo`
  ADD CONSTRAINT `recibo_ibfk_1` FOREIGN KEY (`idServicio`) REFERENCES `servicios` (`idServicio`),
  ADD CONSTRAINT `recibo_ibfk_2` FOREIGN KEY (`estado`) REFERENCES `estado` (`idEstado`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
