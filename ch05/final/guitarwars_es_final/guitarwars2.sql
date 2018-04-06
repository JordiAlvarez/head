-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-04-2018 a las 10:38:23
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
  `puntos` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `guitarwars`
--

INSERT INTO `guitarwars` (`id`, `fecha`, `nombre`, `puntos`) VALUES
(1, '2008-04-22 12:37:34', 'Paco Jastorius', 127650),
(2, '2008-04-22 19:27:54', 'Nevil Johansson', 98430),
(3, '2008-04-23 07:06:35', 'Eddie Vanilli', 345900),
(4, '2008-04-23 07:12:53', 'Belita Chevy', 282470),
(5, '2008-04-23 07:13:34', 'Ashton Simpson', 368420),
(6, '2008-04-23 12:09:50', 'Kenny Lavitz', 64930),
(7, '2018-04-06 08:18:07', 'Pepe', 20000);

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
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `guitarwars`
--
ALTER TABLE `guitarwars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


ALTER TABLE guitarwars ADD COLUMN imagen varchar(64)
