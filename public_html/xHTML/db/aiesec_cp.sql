-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-11-2014 a las 17:12:25
-- Versión del servidor: 5.5.32
-- Versión de PHP: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `aiesec_cp`
--
CREATE DATABASE IF NOT EXISTS `aiesec_cp` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `aiesec_cp`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `foda`
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `foda`
--

INSERT INTO `foda` (`id`, `email`, `fortalezas`, `debilidades`, `oportunidades`, `amenazas`) VALUES
(1, 'cesar.seguracruz@aiesec.net', '@Fortaleza Amarilla@Fuerza del Futuro', '@Debilidad Negra@Debilidad Naranja@Debilidad PÃºrpura', '@Oportunidades Doradas@Oportunidad Dorada', '@Amenaza Sin Color@Amenaza Guinda@Amenaza Ruby');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `master_user`
--

CREATE TABLE IF NOT EXISTS `master_user` (
  `email` varchar(40) NOT NULL,
  `password` varchar(20) NOT NULL,
  `id` int(2) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `master_user`
--

INSERT INTO `master_user` (`email`, `password`, `id`) VALUES
('cesar.seguracruz@aiesec.net', 'arigato1', 1),
('develop.ipn@aiesec.org.mx', 'koperus17', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `self_awareness`
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `self_awareness`
--

INSERT INTO `self_awareness` (`id`, `email`, `suenos`, `intereses`, `actividades`, `fecha`) VALUES
(1, 'cesar.seguracruz@aiesec.net', 'SueÃ±os Morados', 'Intereses Azules', 'Actividades Rojas', '2014-11-17 14:50:15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `timeline`
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `timeline`
--

INSERT INTO `timeline` (`time`, `email`, `tipo`, `meta`, `3m`, `6m`, `12m`, `24m`, `60m`, `120m`, `id`) VALUES
('2014-11-17 14:50:15', 'cesar.seguracruz@aiesec.net', 0, ' Ser VP ', '  ', ' Hacer un ttt ', '  ', '  ', '  ', '  ', 1),
('2014-11-17 14:50:15', 'cesar.seguracruz@aiesec.net', 1, ' MEta 21 ', '  ', '  ', '  ', '  ', '  ', '  ', 2),
('2014-11-17 14:50:15', 'cesar.seguracruz@aiesec.net', 1, ' Meta 22 ', '  ', '  ', '  ', '  ', '  ', '  ', 3),
('2014-11-17 14:50:15', 'cesar.seguracruz@aiesec.net', 1, '  ', '  ', '  ', '  ', '  ', '  ', ' 120m ', 4),
('2014-11-17 14:50:15', 'cesar.seguracruz@aiesec.net', 2, ' Meta ', ' 3m ', ' 6m ', ' 12m ', ' 24m ', ' 60m ', ' 120m ', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(40) DEFAULT NULL,
  `edad` int(3) DEFAULT NULL,
  `foto` blob NOT NULL,
  `email` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  KEY `id_2` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `edad`, `foto`, `email`) VALUES
(1, 'Miguel Segura', 22, 0x647261676f6e5f504e473938312e706e67, 'cesar.seguracruz@aiesec.net');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
