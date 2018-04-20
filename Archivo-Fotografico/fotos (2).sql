-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-04-2018 a las 12:24:46
-- Versión del servidor: 10.1.25-MariaDB
-- Versión de PHP: 7.1.7

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
-- Estructura de tabla para la tabla `fotos`
--

CREATE TABLE `fotos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `autor` varchar(50) NOT NULL,
  `localizacion` varchar(100) NOT NULL,
  `categoria` varchar(100) NOT NULL,
  `fecha_publicacion` date NOT NULL,
  `fecha` date NOT NULL,
  `url` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `fotos`
--

INSERT INTO `fotos` (`id`, `titulo`, `descripcion`, `autor`, `localizacion`, `categoria`, `fecha_publicacion`, `fecha`, `url`) VALUES
(40, 'Liencres2', 'holita', 'pepito', 'holis', 'hla', '2018-04-25', '2018-04-25', 'survey-1594962_1920.jpg'),
(41, 'Liencres2', 'holita', 'pepito', 'holis', 'hla', '2018-04-25', '2018-04-25', 'survey-1594962_1920.jpg'),
(42, 'Liencres', 'Foto liencres', 'pepito', 'holis', 'lala', '2018-04-20', '2018-04-24', 'liencres04-1100x825.jpg'),
(43, 'Liencres', 'Foto liencres', 'pepito', 'holis', 'lala', '2018-04-20', '2018-04-24', 'liencres04-1100x825.jpg'),
(44, 'Holis', 'holita', 'hola', 'holis', 'pepe', '2018-04-20', '2018-04-24', 'liencres04-1100x825.jpg'),
(45, 'Liencres4', 'holis', 'holita', 'hola', 'pepe', '2018-04-19', '2018-04-24', '507.jpg'),
(46, 'Puente de Arce', 'Puente siglo XV', 'Manu Cantudo', 'Arce', 'Monumentos', '2018-04-11', '2018-04-25', 'puente-arce.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `fotos`
--
ALTER TABLE `fotos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `fotos`
--
ALTER TABLE `fotos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
