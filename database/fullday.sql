-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-11-2020 a las 00:28:36
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.3.9

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
(2, 'GAMBOA RUBIO', 'MARYORI PRIISCILA', 'priis_7_23@hotmail.com', '963702006', 'PREGRADO', 'UNIVERSIDAD NACIONAL DE TRUJILLO', 'false', 'PENDIENTE', NULL, 0),
(3, 'NAVEZ AROCA', 'JAIRO RAUL', 'jaironavezaroca@gmail.com', '956504624', 'PREGRADO', 'UNIVERSIDAD NACIONAL DE TRUJILLO', 'true', 'PENDIENTE', NULL, 0),
(4, 'CASTILLO CAMPOS', 'JOHNNY STUAR', 'jcastilloc@unitru.edu.pe', '922769096', 'PREGRADO', 'UNIVERSIDAD NACIONAL DE TRUJILLO', 'true', 'COMPLETO', 'YAPE', 15),
(8, 'SABA SáNCHEZ', 'JHON JAIRO', 'jsaba@unitru.edu.pe', '949339096', 'PREGRADO', 'UNIVERSIDAD NACIONAL DE TRUJILLO', 'true', 'PENDIENTE', NULL, 0),
(9, 'ROJAS ALZA', 'ANDRES BENJAMIN', 'arojas@unitru.edu.pe', '992466613', 'PREGRADO', 'UNIVERSIDAD NACIONAL DE TRUJILLO', 'true', 'PENDIENTE', NULL, 0),
(10, 'BRICEñO MONTAñO', 'JAVIER RODOLFO', 'jbricenomontano@gmail.com', '981559813', 'PREGRADO', 'UNIVERSIDAD NACIONAL DE TRUJILLO', 'true', 'PENDIENTE', NULL, 0),
(11, 'ALVARADO ROJAS', 'ROSA MARíA', 'rmalvarado@unitru.edu.pe', '948764361', 'PREGRADO', 'UNIVERSIDAD NACIONAL DE TRUJILLO', 'true', 'COMPLETO', 'INTERBANK', 15),
(12, 'HUERTAS FRANCO', 'MAX ALEC', 'max.alec.huertas@gmail.com', '949171842', 'PREGRADO', 'UNIVERSIDAD NACIONAL DE TRUJILLO', 'true', 'PENDIENTE', NULL, 0),
(13, 'DíAZ ARGOMEDO', 'CéSAR ALEJANDRO', 'llalejoll11@gmail.com', '980081199', 'PREGRADO', 'UNIVERSIDAD NACIONAL DE TRUJILLO', 'true', 'COMPLETO', 'YAPE', 15),
(14, 'MENDEZ POLO', 'JHONY ROBIN', 'jmendez@unitru.edu.pe', '977551155', 'PREGRADO', 'UNIVERSIDAD NACIONAL DE TRUJILLO', 'true', 'PENDIENTE', NULL, 0),
(15, 'URBINA NARRO', 'CÉSAR AUGUSTO', 'curbina@unitru.edu.pe', '966875583', 'PREGRADO', 'UNIVERSIDAD NACIONAL DE TRUJILLO', 'true', 'PENDIENTE', NULL, 0),
(16, 'AZABACHE SANTOS', 'JOSé DIEGO', 'aspirojose@gmail.com', '959428071', 'PREGRADO', 'UNIVERSIDAD NACIONAL DE TRUJILLO', 'true', 'PENDIENTE', NULL, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `created_at`, `updated_at`, `password`) VALUES
(1, 'Max Alec Huertas Franco', 'max.alec.huertas@gmail.com', '2020-11-24 04:12:06', '2020-11-24 04:12:06', '$2y$10$7VOj3gSEHTSxIaSx97aILOmfTfOmwKFaSdPcDZIGWizq9qeWng2vy');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `participantes`
--
ALTER TABLE `participantes`
  ADD PRIMARY KEY (`id_participante`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`) USING HASH;

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `participantes`
--
ALTER TABLE `participantes`
  MODIFY `id_participante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
