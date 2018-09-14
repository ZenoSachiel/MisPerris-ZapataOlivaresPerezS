-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 14-09-2018 a las 03:39:11
-- Versión del servidor: 5.7.21
-- Versión de PHP: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `misperris`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `adoptante`
--

DROP TABLE IF EXISTS `adoptante`;
CREATE TABLE IF NOT EXISTS `adoptante` (
  `rut` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `fechn` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `tel` int(11) NOT NULL,
  `reg` varchar(50) NOT NULL,
  `ciu` varchar(50) NOT NULL,
  `tviv` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudades`
--

DROP TABLE IF EXISTS `ciudades`;
CREATE TABLE IF NOT EXISTS `ciudades` (
  `id_ciu` int(11) NOT NULL,
  `descripcion` varchar(45) NOT NULL,
  `regiones_id_reg` int(11) NOT NULL,
  PRIMARY KEY (`id_ciu`),
  KEY `fk_ciudades_regiones1_idx` (`regiones_id_reg`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ciudades`
--

INSERT INTO `ciudades` (`id_ciu`, `descripcion`, `regiones_id_reg`) VALUES
(1, 'Santiago', 1),
(2, 'Quintero', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `id` int(20) NOT NULL,
  `user` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`id`, `user`, `pass`) VALUES
(1, 'admin', '1234');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perrito`
--

DROP TABLE IF EXISTS `perrito`;
CREATE TABLE IF NOT EXISTS `perrito` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `raza` varchar(50) NOT NULL,
  `edad` int(11) NOT NULL,
  `vac` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `perrito`
--

INSERT INTO `perrito` (`id`, `nombre`, `raza`, `edad`, `vac`) VALUES
(1, 'asd', 'fdg', 10, '4');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `regiones`
--

DROP TABLE IF EXISTS `regiones`;
CREATE TABLE IF NOT EXISTS `regiones` (
  `id_reg` int(11) NOT NULL,
  `descripcion` varchar(45) NOT NULL,
  PRIMARY KEY (`id_reg`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `regiones`
--

INSERT INTO `regiones` (`id_reg`, `descripcion`) VALUES
(1, 'Metropolitana'),
(2, 'Valparaiso');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sit_vac`
--

DROP TABLE IF EXISTS `sit_vac`;
CREATE TABLE IF NOT EXISTS `sit_vac` (
  `id_sitv` int(11) NOT NULL,
  `desc` varchar(45) NOT NULL,
  PRIMARY KEY (`id_sitv`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `sit_vac`
--

INSERT INTO `sit_vac` (`id_sitv`, `desc`) VALUES
(1, 'Vacunado'),
(2, 'No Vacunado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vacunas`
--

DROP TABLE IF EXISTS `vacunas`;
CREATE TABLE IF NOT EXISTS `vacunas` (
  `id_vac` int(11) NOT NULL,
  `desc` varchar(45) NOT NULL,
  `sit_vac_id` int(11) NOT NULL,
  PRIMARY KEY (`id_vac`),
  KEY `fk_vacunas_sit_vac_idx` (`sit_vac_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `vacunas`
--

INSERT INTO `vacunas` (`id_vac`, `desc`, `sit_vac_id`) VALUES
(1, 'Todas las Vacunas', 1),
(2, 'Solo Antiparasitaria', 1),
(3, 'Solo Antirrabica', 1),
(4, 'Ninguna Vacuna', 2);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ciudades`
--
ALTER TABLE `ciudades`
  ADD CONSTRAINT `fk_ciudades_regiones1` FOREIGN KEY (`regiones_id_reg`) REFERENCES `regiones` (`id_reg`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `vacunas`
--
ALTER TABLE `vacunas`
  ADD CONSTRAINT `fk_vacunas_sit_vac` FOREIGN KEY (`sit_vac_id`) REFERENCES `sit_vac` (`id_sitv`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
