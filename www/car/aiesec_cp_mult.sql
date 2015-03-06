-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-12-2014 a las 17:06:13
-- Versión del servidor: 5.5.32
-- Versión de PHP: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `aiesec_cp_mult`
--
CREATE DATABASE IF NOT EXISTS `aiesec_cp_mult` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `aiesec_cp_mult`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `foda`
--
-- Creación: 13-12-2014 a las 13:49:29
--

CREATE TABLE IF NOT EXISTS `foda` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `email` varchar(40) NOT NULL,
  `fortalezas` varchar(250) NOT NULL,
  `debilidades` varchar(250) NOT NULL,
  `oportunidades` varchar(250) NOT NULL,
  `amenazas` varchar(250) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `foda`
--

INSERT INTO `foda` (`id`, `email`, `fortalezas`, `debilidades`, `oportunidades`, `amenazas`) VALUES
(1, 'cesar.seguracruz@aiesec.net', '@Fortaleza Amarilla@Fuerza del Futuro', '@Debilidad Negra@Debilidad Naranja@Debilidad PÃºrpura', '@Oportunidades Doradas@Oportunidad Dorada', '@Amenaza Sin Color@Amenaza Guinda@Amenaza Ruby'),
(2, 'Test@aiesec.net', '@F', '@D@Mala salud', '@O', '@A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `master_user`
--
-- Creación: 13-12-2014 a las 13:49:30
--

CREATE TABLE IF NOT EXISTS `master_user` (
  `email` varchar(40) NOT NULL,
  `password` varchar(20) NOT NULL,
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `comite` varchar(5) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `master_user`
--

INSERT INTO `master_user` (`email`, `password`, `id`, `comite`) VALUES
('cesar.seguracruz@aiesec.net', 'arigato1', 1, 'ALL'),
('develop.ipn@aiesec.org.mx', 'koperus17', 2, 'IPN'),
('monserrat.miranda@aiesec.net', 'monserrat', 3, 'GUA'),
('victor.lozada@aiesec.net', 'victor', 4, 'CDJ'),
('gerardo.felixzac@aiesec.net', 'gerardo', 5, 'ZAC'),
('develop.gdl@aiesec.org.mx', 'develop', 6, 'GDL');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `self_awareness`
--
-- Creación: 13-12-2014 a las 13:49:30
--

CREATE TABLE IF NOT EXISTS `self_awareness` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `email` varchar(40) DEFAULT NULL,
  `suenos` varchar(250) DEFAULT NULL,
  `intereses` varchar(250) DEFAULT NULL,
  `actividades` varchar(250) DEFAULT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `self_awareness`
--

INSERT INTO `self_awareness` (`id`, `email`, `suenos`, `intereses`, `actividades`, `fecha`) VALUES
(1, 'cesar.seguracruz@aiesec.net', 'SueÃ±os Morados', 'Intereses Azules', 'Actividades Rojas', '2014-11-17 14:50:15'),
(2, 'Test@aiesec.net', 'Ejemplo de SueÃ±os', 'Ejemplo de Intereses', 'Estudiar por ejemplo.', '2014-11-26 15:15:06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `timeline`
--
-- Creación: 13-12-2014 a las 13:49:30
--

CREATE TABLE IF NOT EXISTS `timeline` (
  `time` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `email` varchar(40) DEFAULT NULL,
  `tipo` int(1) DEFAULT NULL,
  `meta` varchar(250) DEFAULT NULL,
  `3m` varchar(250) NOT NULL,
  `6m` varchar(250) NOT NULL,
  `12m` varchar(250) NOT NULL,
  `24m` varchar(250) NOT NULL,
  `60m` varchar(250) NOT NULL,
  `120m` varchar(250) NOT NULL,
  `id` int(4) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Volcado de datos para la tabla `timeline`
--

INSERT INTO `timeline` (`time`, `email`, `tipo`, `meta`, `3m`, `6m`, `12m`, `24m`, `60m`, `120m`, `id`) VALUES
('2014-11-17 14:50:15', 'cesar.seguracruz@aiesec.net', 0, ' Ser VP ', '  ', ' Hacer un ttt ', '  ', '  ', '  ', '  ', 1),
('2014-11-17 14:50:15', 'cesar.seguracruz@aiesec.net', 1, ' MEta 21 ', '  ', '  ', '  ', '  ', '  ', '  ', 2),
('2014-11-17 14:50:15', 'cesar.seguracruz@aiesec.net', 1, ' Meta 22 ', '  ', '  ', '  ', '  ', '  ', '  ', 3),
('2014-11-17 14:50:15', 'cesar.seguracruz@aiesec.net', 1, '  ', '  ', '  ', '  ', '  ', '  ', ' 120m ', 4),
('2014-11-17 14:50:15', 'cesar.seguracruz@aiesec.net', 2, ' Meta ', ' 3m ', ' 6m ', ' 12m ', ' 24m ', ' 60m ', ' 120m ', 5),
('2014-11-26 15:16:10', 'Test@aiesec.net', 0, ' AIESEC ', '  ', '  ', '  ', '  ', '  ', '  ', 6),
('2014-11-26 15:16:10', 'Test@aiesec.net', 1, '  ', ' PROFESSIONAL ', '  ', '  ', '  ', '  ', '  ', 7),
('2014-11-26 15:16:10', 'Test@aiesec.net', 2, '  ', ' PERSONAL ', '  ', '  ', '  ', '  ', '  ', 8),
('2014-11-26 15:28:47', 'Test@aiesec.net', 0, ' AIESEC ', ' ', ' ', ' ', ' ', ' ', ' ', 9),
('2014-11-26 15:28:47', 'Test@aiesec.net', 1, ' ', ' PROFESSIONAL ', ' ', ' ', ' ', ' ', ' ', 10),
('2014-11-26 15:28:47', 'Test@aiesec.net', 2, ' ', ' PERSONAL ', ' ', ' ', ' ', ' ', ' ', 11),
('2014-11-26 15:29:44', 'Test@aiesec.net', 0, ' Una meta AIESECa ', ' 3 Meses ', ' 6 Meses ', ' 1 AÃ±o ', ' 2 AÃ±os ', ' 5 AÃ±os ', ' 10 AÃ±os ', 12),
('2014-11-26 15:29:44', 'Test@aiesec.net', 1, ' Una meta PROFESIONAL ', ' 3m  ', ' 6m  ', ' 1  ', ' 2 ', ' 5 ', ' 10 ', 13),
('2014-11-26 15:29:44', 'Test@aiesec.net', 2, ' Una meta PERSONAL ', ' 3m ', ' 6m  ', ' 12m  ', ' 24m  ', ' 60m  ', ' 120m ', 14),
('2014-12-13 14:37:33', 'algo@algo.com', 0, '  ', ' 0 ', '  ', '  ', '  ', '  ', '  ', 15),
('2014-12-13 14:37:33', 'algo@algo.com', 0, '  ', ' 0 ', '  ', '  ', '  ', '  ', '  ', 16),
('2014-12-13 14:37:33', 'algo@algo.com', 0, '  ', ' 0 ', '  ', '  ', '  ', '  ', '  ', 17),
('2014-12-13 14:37:33', 'algo@algo.com', 0, '  ', ' 1 ', '  ', '  ', '  ', '  ', '  ', 18),
('2014-12-13 14:37:33', 'algo@algo.com', 0, '  ', ' 1 ', '  ', '  ', '  ', '  ', '  ', 19),
('2014-12-13 14:37:33', 'algo@algo.com', 0, '  ', ' 1 ', '  ', '  ', '  ', '  ', '  ', 20),
('2014-12-13 14:37:33', 'algo@algo.com', 0, '  ', ' 2 ', '  ', '  ', '  ', '  ', '  ', 21),
('2014-12-13 14:37:33', 'algo@algo.com', 0, '  ', ' 2 ', '  ', '  ', '  ', '  ', '  ', 22),
('2014-12-13 14:48:09', 'algo@algo.com', 0, '  ', ' 0 ', '  ', '  ', '  ', '  ', '  ', 23),
('2014-12-13 14:48:09', 'algo@algo.com', 0, '  ', ' 0 ', '  ', '  ', '  ', '  ', '  ', 24),
('2014-12-13 14:48:09', 'algo@algo.com', 0, '  ', ' 0 ', '  ', '  ', '  ', '  ', '  ', 25),
('2014-12-13 14:48:09', 'algo@algo.com', 0, '  ', ' 1 ', '  ', '  ', '  ', '  ', '  ', 26),
('2014-12-13 14:48:09', 'algo@algo.com', 0, '  ', ' 1 ', '  ', '  ', '  ', '  ', '  ', 27),
('2014-12-13 14:48:09', 'algo@algo.com', 0, '  ', ' 1 ', '  ', '  ', '  ', '  ', '  ', 28),
('2014-12-13 14:48:09', 'algo@algo.com', 0, '  ', ' 2 ', '  ', '  ', '  ', '  ', '  ', 29),
('2014-12-13 14:48:09', 'algo@algo.com', 0, '  ', ' 2 ', '  ', '  ', '  ', '  ', '  ', 30),
('2014-12-13 14:54:43', 'algo@algo.com', 0, '  ', ' 0 ', '  ', '  ', '  ', '  ', '  ', 31),
('2014-12-13 14:54:43', 'algo@algo.com', 0, '  ', ' 0 ', '  ', '  ', '  ', '  ', '  ', 32),
('2014-12-13 14:54:43', 'algo@algo.com', 0, '  ', ' 0 ', '  ', '  ', '  ', '  ', '  ', 33),
('2014-12-13 14:54:43', 'algo@algo.com', 0, '  ', ' 1 ', '  ', '  ', '  ', '  ', '  ', 34),
('2014-12-13 14:54:43', 'algo@algo.com', 0, '  ', ' 1 ', '  ', '  ', '  ', '  ', '  ', 35),
('2014-12-13 14:54:43', 'algo@algo.com', 0, '  ', ' 1 ', '  ', '  ', '  ', '  ', '  ', 36),
('2014-12-13 14:54:43', 'algo@algo.com', 0, '  ', ' 2 ', '  ', '  ', '  ', '  ', '  ', 37),
('2014-12-13 14:54:43', 'algo@algo.com', 0, '  ', ' 2 ', '  ', '  ', '  ', '  ', '  ', 38),
('2014-12-13 14:56:14', 'algo@algo.com', 0, '  ', '  ', ' akjdl ', ' lkj ', ' qkl ', ' lj ', ' k ', 39),
('2014-12-13 14:56:14', 'algo@algo.com', 0, '  ', ' 0 ', ' l ', '  ', ' j ', ' kj ', ' k ', 40),
('2014-12-13 14:56:14', 'algo@algo.com', 0, ' kj ', ' 0 ', ' k ', ' jk ', ' j ', ' j ', '  ', 41),
('2014-12-13 14:56:14', 'algo@algo.com', 0, '  ', ' 0 ', ' jk ', ' jk ', '  ', ' nk ', ' u ', 42),
('2014-12-13 14:56:14', 'algo@algo.com', 0, ' d ', ' 1 ', ' d ', ' f ', ' g ', ' f ', ' g ', 43),
('2014-12-13 14:56:14', 'algo@algo.com', 0, '  ', ' 1 ', '  ', '  ', '  ', '  ', '  ', 44),
('2014-12-13 14:56:14', 'algo@algo.com', 0, '  ', ' 1 ', '  ', '  ', ' fsf ', '  ', ' h ', 45),
('2014-12-13 14:56:14', 'algo@algo.com', 0, ' h ', ' 2 ', ' hh ', ' h ', ' h ', '  ', ' h ', 46),
('2014-12-13 14:56:14', 'algo@algo.com', 0, '  ', ' 2 ', '  ', '  ', '  ', '  ', '  ', 47);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--
-- Creación: 13-12-2014 a las 13:49:30
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(40) DEFAULT NULL,
  `edad` int(3) DEFAULT NULL,
  `foto` blob,
  `email` varchar(40) DEFAULT NULL,
  `comite` varchar(20) DEFAULT NULL,
  `magic` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  KEY `id_2` (`id`),
  KEY `id_3` (`id`),
  KEY `id_4` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `edad`, `foto`, `email`, `comite`, `magic`) VALUES
(1, 'Miguel Segura', 22, 0x647261676f6e5f504e473938312e706e67, 'cesar.seguracruz@aiesec.net', 'IPN', 'Boom'),
(2, 'Test Online', 22, 0x416c6f6e655f496e5f5468655f53746f726d5f62795f646576696c736861726b2e6a7067, 'Test@aiesec.net', 'IPN', 'Back'),
(13, 'Support/Test Online', 22, NULL, 'cesar.seguracruz@aiesec.net', 'GUA', 'Boom'),
(14, 'Support/Test Online', 22, NULL, 'cesar.seguracruz@aiesec.net', 'CDJ', 'Boom'),
(15, 'Support/Test Online', 22, NULL, 'cesar.seguracruz@aiesec.net', 'ZAC', 'Boom'),
(16, 'Support/Test Online', 22, NULL, 'cesar.seguracruz@aiesec.net', 'GDL', 'Boom');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
