-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-04-2018 a las 18:51:47
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `basedatos1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `guitarwars`
--

CREATE TABLE `guitarwars` (
  `id` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `nombre` varchar(32) DEFAULT NULL,
  `puntos` int(11) DEFAULT NULL,
  `imagen` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `guitarwars`
--

INSERT INTO `guitarwars` (`id`, `fecha`, `nombre`, `puntos`, `imagen`) VALUES
(1, '2008-04-22 12:37:34', 'Paco Jastorius', 127650, NULL),
(2, '2008-04-22 19:27:54', 'Nevil Johansson', 98430, NULL),
(3, '2008-04-23 07:06:35', 'Eddie Vanilli', 345900, NULL),
(4, '2008-04-23 07:12:53', 'Belita Chevy', 282470, NULL),
(5, '2008-04-23 07:13:34', 'Ashton Simpson', 368420, NULL),
(6, '2008-04-23 12:09:50', 'Kenny Lavitz', 64930, NULL),
(7, '2018-04-06 08:18:07', 'Pepe', 20000, NULL),
(8, '2018-04-07 15:53:22', 'paco lucia', 100, 'banner_670x235_col_quimicos_cantabria_psn.gif'),
(9, '2018-04-08 10:13:10', 'jimmy hendrix', 10, 'close.png'),
(10, '2018-04-08 10:15:09', 'jimmy hendrix', 10, 'close.png'),
(11, '2018-04-08 10:15:23', 'pedro', 22, 'loading.gif'),
(12, '2018-04-08 10:16:57', 'pedro', 22, 'loading.gif'),
(13, '2018-04-08 10:17:15', 'juana', 233, 'next.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lista_emails`
--

CREATE TABLE `lista_emails` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `apellido` varchar(20) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `lista_emails`
--

INSERT INTO `lista_emails` (`id`, `nombre`, `apellido`, `email`) VALUES
(2, 'pepe', 'perez', 'pepe@perez.com'),
(3, 'pepa', 'perez', 'pepa@perez.com'),
(4, 'jordi', 'alvarez', 'clickea@clickea.net'),
(5, 'pedro', 'perez', 'pedro@perez.com'),
(11, 'pedro', 'alvarez', 'pedro@alvarez.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `guitarwars`
--
ALTER TABLE `guitarwars`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name` (`nombre`);

--
-- Indices de la tabla `lista_emails`
--
ALTER TABLE `lista_emails`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `guitarwars`
--
ALTER TABLE `guitarwars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `lista_emails`
--
ALTER TABLE `lista_emails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
