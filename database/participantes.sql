-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 19-11-2020 a las 13:31:41
-- Versión del servidor: 5.6.49-cll-lve
-- Versión de PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `fullday`
--

DROP DATABASE IF EXISTS fullday;
CREATE DATABASE fullday;
USE fullday;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `participantes`
--

CREATE TABLE `participantes` (
  `id_participante` int(11) NOT NULL,
  `apellidos` varchar(50) DEFAULT NULL,
  `nombres` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `telefono` varchar(15) DEFAULT NULL,
  `tipo` varchar(10) DEFAULT NULL,
  `organizacion` varchar(150) DEFAULT NULL,
  `aprobacion` varchar(5) DEFAULT NULL,
  `pago` varchar(10) DEFAULT NULL,
  `metodo` varchar(10) DEFAULT NULL,
  `monto` float DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `participantes`
--

INSERT INTO `participantes` (`id_participante`, `apellidos`, `nombres`, `email`, `telefono`, `tipo`, `organizacion`, `aprobacion`, `pago`, `metodo`, `monto`) VALUES
(1, 'HUERTAS FRANCO', 'MAX ALEC', 'max.alec.huertas@gmail.com', '949171842', 'PREGRADO', 'UNIVERSIDAD NACIONAL DE TRUJILLO', 'true', 'PENDIENTE', null, 0),
(2, 'GAMBOA RUBIO', 'MARYORI PRIISCILA', 'priis_7_23@hotmail.com', '963702006', 'PREGRADO', 'UNIVERSIDAD NACIONAL DE TRUJILLO', 'false', 'PENDIENTE', null, 0),
(3, 'NAVEZ AROCA', 'JAIRO RAUL', 'jaironavezaroca@gmail.com', '956504624', 'PREGRADO', 'UNIVERSIDAD NACIONAL DE TRUJILLO', 'true', 'PENDIENTE', null, 0),
(4, 'CASTILLO CAMPOS', 'JOHNNY STUAR', 'jcastilloc@unitru.edu.pe', '922769096', 'PREGRADO', 'UNIVERSIDAD NACIONAL DE TRUJILLO', 'true', 'COMPLETO', `YAPE`, 15),
(8, 'SABA SáNCHEZ', 'JHON JAIRO', 'jsaba@unitru.edu.pe', '949339096', 'PREGRADO', 'UNIVERSIDAD NACIONAL DE TRUJILLO', 'true', 'PENDIENTE', null, 0),
(9, 'ROJAS ALZA', 'ANDRES BENJAMIN', 'arojas@unitru.edu.pe', '992466613', 'PREGRADO', 'UNIVERSIDAD NACIONAL DE TRUJILLO', 'true', 'PENDIENTE', null, 0),
(10, 'BRICEñO MONTAñO', 'JAVIER RODOLFO', 'jbricenomontano@gmail.com', '981559813', 'PREGRADO', 'UNIVERSIDAD NACIONAL DE TRUJILLO', 'true', 'PENDIENTE', null, 0),
(11, 'ALVARADO ROJAS', 'ROSA MARíA', 'rmalvarado@unitru.edu.pe', '948764361', 'PREGRADO', 'UNIVERSIDAD NACIONAL DE TRUJILLO', 'true', 'COMPLETO', `INTERBANK`, 15);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `participantes`
--
ALTER TABLE `participantes`
  ADD PRIMARY KEY (`id_participante`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `participantes`
--
ALTER TABLE `participantes`
  MODIFY `id_participante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
